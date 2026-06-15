<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ZktecoDevice;
use App\Services\Zkteco\ZktecoAttendanceSyncService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

/**
 * ZKTeco ADMS push protocol handler.
 * Configure your device to push to: https://your-domain.com/iclock/cdata
 */
class ZktecoWebhookController extends Controller
{
    public function receiveData(Request $request, ZktecoAttendanceSyncService $syncService): Response
    {
        $serial = $request->query('SN');
        $device = $this->resolveDevice($serial);

        if ($request->isMethod('get')) {
            return response("GET OPTION FROM: {$serial}\r\nStamp=9999\r\nOpStamp=9999\r\nErrorDelay=60\r\nDelay=30\r\nTransTimes=00:00;14:05\r\nTransInterval=1\r\nTransFlag=AttLog\r\nRealtime=1\r\nEncrypt=0\r\n", 200, [
                'Content-Type' => 'text/plain',
            ]);
        }

        $table = $request->query('table', 'ATTLOG');
        $body = $request->getContent();

        Log::info('ZKTeco ADMS data received', [
            'serial' => $serial,
            'table' => $table,
            'length' => strlen($body),
        ]);

        if ($table === 'ATTLOG' && $body !== '') {
            $this->importAttendanceBody($body, $device, $syncService);
        }

        return response('OK', 200, ['Content-Type' => 'text/plain']);
    }

    public function getRequest(Request $request): Response
    {
        return response('OK', 200, ['Content-Type' => 'text/plain']);
    }

    public function deviceCmd(Request $request): Response
    {
        return response('OK', 200, ['Content-Type' => 'text/plain']);
    }

    protected function importAttendanceBody(string $body, ?ZktecoDevice $device, ZktecoAttendanceSyncService $syncService): void
    {
        $lines = preg_split('/\r\n|\n|\r/', trim($body)) ?: [];

        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }

            $parts = str_contains($line, "\t") ? explode("\t", $line) : explode(' ', $line);
            $pin = trim($parts[0] ?? '');
            $datetime = trim($parts[1] ?? '');

            if ($pin === '' || $datetime === '') {
                continue;
            }

            try {
                $punchTime = Carbon::parse($datetime);
            } catch (\Throwable) {
                continue;
            }

            $verify = isset($parts[3]) ? (int) $parts[3] : null;
            $status = isset($parts[2]) ? (int) $parts[2] : null;

            $log = $syncService->storePunch($pin, $punchTime, $device, $verify, $status);
            $syncService->processPunchLog($log, $device?->school_id);
        }
    }

    protected function resolveDevice(?string $serial): ?ZktecoDevice
    {
        if (! $serial) {
            return null;
        }

        return ZktecoDevice::where('serial_number', $serial)->where('active', true)->first();
    }
}
