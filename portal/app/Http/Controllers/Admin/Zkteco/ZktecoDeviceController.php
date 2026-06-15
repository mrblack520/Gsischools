<?php

namespace App\Http\Controllers\Admin\Zkteco;

use App\Http\Controllers\Controller;
use App\Models\ZktecoDevice;
use App\Models\ZktecoPunchLog;
use App\Models\ZktecoSetting;
use App\Services\Zkteco\ZktecoAttendanceSyncService;
use App\Services\Zkteco\ZktecoDeviceClient;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZktecoDeviceController extends Controller
{
    public function index()
    {
        $schoolId = Auth::user()->school_id;
        $devices = ZktecoDevice::forSchool($schoolId)->latest()->get();
        $settings = ZktecoSetting::forSchool($schoolId);
        $pushUrl = url('/'.config('zkteco.adms_prefix', 'iclock').'/cdata');

        return view('backEnd.zkteco.devices', compact('devices', 'settings', 'pushUrl'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'serial_number' => 'nullable|string|max:191|unique:zkteco_devices,serial_number',
            'ip_address' => 'nullable|ip',
            'port' => 'nullable|integer|min:1|max:65535',
            'sync_mode' => 'required|in:push,pull,both',
        ]);

        ZktecoDevice::create([
            'school_id' => Auth::user()->school_id,
            'name' => $request->name,
            'serial_number' => $request->serial_number,
            'ip_address' => $request->ip_address,
            'port' => $request->port ?: config('zkteco.default_port', 4370),
            'sync_mode' => $request->sync_mode,
            'active' => $request->boolean('active', true),
        ]);

        Toastr::success('ZKTeco device added successfully', 'Success');

        return redirect()->route('zkteco.devices');
    }

    public function update(Request $request, ZktecoDevice $device)
    {
        $this->authorizeDevice($device);

        $request->validate([
            'name' => 'required|string|max:191',
            'serial_number' => 'nullable|string|max:191|unique:zkteco_devices,serial_number,'.$device->id,
            'ip_address' => 'nullable|ip',
            'port' => 'nullable|integer|min:1|max:65535',
            'sync_mode' => 'required|in:push,pull,both',
        ]);

        $device->update([
            'name' => $request->name,
            'serial_number' => $request->serial_number,
            'ip_address' => $request->ip_address,
            'port' => $request->port ?: config('zkteco.default_port', 4370),
            'sync_mode' => $request->sync_mode,
            'active' => $request->boolean('active', true),
        ]);

        Toastr::success('Device updated successfully', 'Success');

        return redirect()->route('zkteco.devices');
    }

    public function destroy(ZktecoDevice $device)
    {
        $this->authorizeDevice($device);
        $device->delete();

        Toastr::success('Device deleted successfully', 'Success');

        return redirect()->route('zkteco.devices');
    }

    public function saveSettings(Request $request)
    {
        $request->validate([
            'start_time' => 'required|date_format:H:i',
            'late_time' => 'required|date_format:H:i',
            'absent_time' => 'required|date_format:H:i',
            'mapping_field' => 'required|in:admission_no,user_id,roll_no',
            'sync_interval_minutes' => 'required|integer|min:1|max:60',
        ]);

        $settings = ZktecoSetting::forSchool(Auth::user()->school_id);
        $settings->update([
            'start_time' => $request->start_time.':00',
            'late_time' => $request->late_time.':00',
            'absent_time' => $request->absent_time.':00',
            'mapping_field' => $request->mapping_field,
            'auto_sync_enabled' => $request->boolean('auto_sync_enabled', true),
            'sync_interval_minutes' => $request->sync_interval_minutes,
        ]);

        Toastr::success('ZKTeco settings saved', 'Success');

        return redirect()->route('zkteco.devices');
    }

    public function syncDevice(ZktecoDevice $device, ZktecoAttendanceSyncService $syncService)
    {
        $this->authorizeDevice($device);
        $result = $syncService->pullFromDevice($device);

        if ($result['success']) {
            Toastr::success($result['message'], 'Success');
        } else {
            Toastr::error($result['message'], 'Failed');
        }

        return redirect()->route('zkteco.devices');
    }

    public function syncAll(ZktecoAttendanceSyncService $syncService)
    {
        $schoolId = Auth::user()->school_id;
        $devices = ZktecoDevice::forSchool($schoolId)->active()->get();
        $messages = [];

        foreach ($devices as $device) {
            if (in_array($device->sync_mode, ['pull', 'both'], true)) {
                $result = $syncService->pullFromDevice($device);
                $messages[] = $device->name.': '.$result['message'];
            }
        }

        $stats = $syncService->processUnprocessedLogs($schoolId);
        $messages[] = "Portal sync: {$stats['success']} saved, {$stats['failed']} failed.";

        Toastr::success(implode(' | ', $messages), 'Sync Complete');

        return redirect()->route('zkteco.devices');
    }

    public function testConnection(ZktecoDevice $device)
    {
        $this->authorizeDevice($device);

        if (empty($device->ip_address)) {
            Toastr::error('Set device IP address first', 'Failed');

            return redirect()->route('zkteco.devices');
        }

        $client = new ZktecoDeviceClient($device->ip_address, $device->port ?: 4370);
        $ok = $client->testConnection();

        if ($ok) {
            Toastr::success('Connection to device successful', 'Success');
        } else {
            Toastr::error('Could not connect to device. Check IP, port, and network.', 'Failed');
        }

        return redirect()->route('zkteco.devices');
    }

    public function punchLogs(Request $request)
    {
        $schoolId = Auth::user()->school_id;
        $logs = ZktecoPunchLog::query()
            ->where('school_id', $schoolId)
            ->latest('punch_time')
            ->paginate(50);

        return view('backEnd.zkteco.punch_logs', compact('logs'));
    }

    public function reprocessLogs(ZktecoAttendanceSyncService $syncService)
    {
        ZktecoPunchLog::where('school_id', Auth::user()->school_id)
            ->where('sync_success', false)
            ->update(['is_processed' => false]);

        $stats = $syncService->processUnprocessedLogs(Auth::user()->school_id);

        Toastr::success("Reprocessed: {$stats['success']} success, {$stats['failed']} failed", 'Done');

        return redirect()->route('zkteco.punch_logs');
    }

    protected function authorizeDevice(ZktecoDevice $device): void
    {
        if ($device->school_id && $device->school_id !== Auth::user()->school_id) {
            abort(403);
        }
    }
}
