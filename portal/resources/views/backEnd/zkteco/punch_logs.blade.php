@extends('backEnd.master')
@section('title')
    ZKTeco Punch Logs
@endsection

@section('mainContent')
<section class="sms-breadcrumb mb-20 up_breadcrumb">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>ZKTeco Punch Logs</h1>
            <div class="bc-pages">
                <a href="{{ route('dashboard') }}">@lang('common.dashboard')</a>
                <a href="{{ route('zkteco.devices') }}">ZKTeco</a>
                <a href="#">Punch Logs</a>
            </div>
        </div>
    </div>
</section>

<section class="admin-visitor-area up_st_admin_visitor">
    <div class="container-fluid p-0">
        <div class="white-box">
            <div class="row mb-20">
                <div class="col-lg-8">
                    <p class="mb-0 text-muted">Raw punches received from ZKTeco devices before they are written to student attendance.</p>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a href="{{ route('zkteco.devices') }}" class="primary-btn small fix-gr-bg">Back to Devices</a>
                    <form action="{{ route('zkteco.reprocess') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="primary-btn small tr-bg">Reprocess Failed</button>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table school-table-style">
                    <thead>
                        <tr>
                            <th>PIN</th>
                            <th>Punch Time</th>
                            <th>Device</th>
                            <th>Processed</th>
                            <th>Result</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($logs as $log)
                            <tr>
                                <td>{{ $log->device_pin }}</td>
                                <td>{{ $log->punch_time->format('d M Y H:i:s') }}</td>
                                <td>{{ $log->device_serial ?: '-' }}</td>
                                <td>{{ $log->is_processed ? 'Yes' : 'No' }}</td>
                                <td>
                                    @if(is_null($log->sync_success))
                                        Pending
                                    @elseif($log->sync_success)
                                        Success
                                    @else
                                        Failed
                                    @endif
                                </td>
                                <td>{{ $log->sync_message }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No punch logs yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $logs->links() }}
        </div>
    </div>
</section>
@endsection
