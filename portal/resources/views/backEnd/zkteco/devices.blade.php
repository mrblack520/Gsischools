@extends('backEnd.master')
@section('title')
    ZKTeco Biometric Attendance
@endsection

@section('mainContent')
<section class="sms-breadcrumb mb-20 up_breadcrumb">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>ZKTeco Biometric Attendance</h1>
            <div class="bc-pages">
                <a href="{{ route('dashboard') }}">@lang('common.dashboard')</a>
                <a href="{{ route('student_attendance') }}">@lang('student.student_attendance')</a>
                <a href="#">ZKTeco</a>
            </div>
        </div>
    </div>
</section>

<section class="admin-visitor-area up_st_admin_visitor">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="white-box">
                    <div class="row mb-20">
                        <div class="col-lg-8">
                            <h4 class="box-title">Device Push URL (ADMS)</h4>
                            <p class="text-muted mb-1">Configure this URL on your ZKTeco device under Communication / Cloud Server:</p>
                            <code>{{ $pushUrl }}</code>
                            <p class="text-muted mt-2 mb-0">Use each device serial number when registering below so punches are linked to the correct school.</p>
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <a href="{{ route('zkteco.punch_logs') }}" class="primary-btn small fix-gr-bg">View Punch Logs</a>
                            <form action="{{ route('zkteco.sync_all') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="primary-btn small fix-gr-bg">Sync All Devices</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-30">
            <div class="col-lg-5">
                <div class="white-box">
                    <h4 class="box-title">Attendance Rules</h4>
                    <form action="{{ route('zkteco.settings') }}" method="POST">
                        @csrf
                        <div class="primary_input mb-15">
                            <label>Present until</label>
                            <input type="time" name="start_time" class="primary_input_field form-control" value="{{ substr($settings->start_time, 0, 5) }}" required>
                        </div>
                        <div class="primary_input mb-15">
                            <label>Late until</label>
                            <input type="time" name="late_time" class="primary_input_field form-control" value="{{ substr($settings->late_time, 0, 5) }}" required>
                        </div>
                        <div class="primary_input mb-15">
                            <label>Absent after</label>
                            <input type="time" name="absent_time" class="primary_input_field form-control" value="{{ substr($settings->absent_time, 0, 5) }}" required>
                        </div>
                        <div class="primary_input mb-15">
                            <label>Map device PIN to student field</label>
                            <select name="mapping_field" class="primary_input_field form-control">
                                <option value="admission_no" @selected($settings->mapping_field === 'admission_no')>Admission Number</option>
                                <option value="user_id" @selected($settings->mapping_field === 'user_id')>User ID</option>
                                <option value="roll_no" @selected($settings->mapping_field === 'roll_no')>Roll Number</option>
                            </select>
                        </div>
                        <div class="primary_input mb-15">
                            <label>Auto sync interval (minutes)</label>
                            <input type="number" name="sync_interval_minutes" min="1" max="60" class="primary_input_field form-control" value="{{ $settings->sync_interval_minutes }}" required>
                        </div>
                        <div class="primary_input mb-15">
                            <input type="checkbox" name="auto_sync_enabled" value="1" @checked($settings->auto_sync_enabled)>
                            <label class="ml-2">Enable scheduled pull sync</label>
                        </div>
                        <button type="submit" class="primary-btn fix-gr-bg">Save Settings</button>
                    </form>
                </div>

                <div class="white-box mt-30">
                    <h4 class="box-title">Add Device</h4>
                    <form action="{{ route('zkteco.devices.store') }}" method="POST">
                        @csrf
                        <div class="primary_input mb-15">
                            <label>Device Name</label>
                            <input type="text" name="name" class="primary_input_field form-control" placeholder="Main Gate" required>
                        </div>
                        <div class="primary_input mb-15">
                            <label>Serial Number (SN)</label>
                            <input type="text" name="serial_number" class="primary_input_field form-control" placeholder="From device menu">
                        </div>
                        <div class="primary_input mb-15">
                            <label>IP Address (for pull sync)</label>
                            <input type="text" name="ip_address" class="primary_input_field form-control" placeholder="192.168.1.201">
                        </div>
                        <div class="primary_input mb-15">
                            <label>Port</label>
                            <input type="number" name="port" class="primary_input_field form-control" value="4370">
                        </div>
                        <div class="primary_input mb-15">
                            <label>Sync Mode</label>
                            <select name="sync_mode" class="primary_input_field form-control">
                                <option value="both">Push + Pull</option>
                                <option value="push">Push only (ADMS)</option>
                                <option value="pull">Pull only</option>
                            </select>
                        </div>
                        <div class="primary_input mb-15">
                            <input type="checkbox" name="active" value="1" checked>
                            <label class="ml-2">Active</label>
                        </div>
                        <button type="submit" class="primary-btn fix-gr-bg">Add Device</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="white-box">
                    <h4 class="box-title">Registered Devices</h4>
                    <div class="table-responsive">
                        <table class="table school-table-style">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Serial</th>
                                    <th>IP</th>
                                    <th>Mode</th>
                                    <th>Last Sync</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($devices as $device)
                                    <tr>
                                        <td>{{ $device->name }}</td>
                                        <td>{{ $device->serial_number ?: '-' }}</td>
                                        <td>{{ $device->ip_address ?: '-' }}:{{ $device->port }}</td>
                                        <td>{{ strtoupper($device->sync_mode) }}</td>
                                        <td>
                                            @if($device->last_sync_at)
                                                {{ $device->last_sync_at->format('d M Y H:i') }}
                                                <br><small>{{ $device->last_sync_message }}</small>
                                            @else
                                                Never
                                            @endif
                                        </td>
                                        <td>
                                            @if(in_array($device->sync_mode, ['pull', 'both']))
                                                <form action="{{ route('zkteco.devices.sync', $device) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button class="primary-btn small fix-gr-bg">Pull</button>
                                                </form>
                                                <form action="{{ route('zkteco.devices.test', $device) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button class="primary-btn small tr-bg">Test</button>
                                                </form>
                                            @endif
                                            <form action="{{ route('zkteco.devices.destroy', $device) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this device?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="primary-btn small fix-gr-bg bg-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No devices registered yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="white-box mt-30">
                    <h4 class="box-title">Setup Guide</h4>
                    <ol>
                        <li>Enroll each student on the ZKTeco device using their <strong>admission number</strong> as the User ID / PIN (or match your mapping setting above).</li>
                        <li>Add the device here with its serial number and IP address.</li>
                        <li>For real-time sync, set the device cloud server URL to the ADMS URL shown above.</li>
                        <li>For scheduled sync, enable auto sync — the portal pulls attendance every few minutes.</li>
                        <li>Synced attendance appears in <a href="{{ route('student_attendance') }}">Student Attendance</a> and reports automatically.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
