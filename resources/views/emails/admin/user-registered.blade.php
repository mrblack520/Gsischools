@extends('emails.layout')
@section('title', 'New User Registered')

@section('content')
    <tr>
        <td style="padding: 30px 20px 0;">
            <h2 style="color: #503a8e; font-size: 20px; padding-bottom: 10px;">New User Alert</h2>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">
                Dear Admin,
            </p>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">
                A new user has just registered on <strong>Question Point</strong>. Below are the details:
            </p>
            <ul style="font-size: 16px; color: #333; padding-left: 20px; padding-bottom: 15px;">
                <li><strong>Name:</strong> {{ $user->first_name ?? 'N/A' }}</li>
                <li><strong>Email:</strong> {{ $user->email ?? 'N/A' }}</li>
                <li><strong>Registered At:</strong> {{ $user->created_at->format('d M, Y h:i A') ?? 'N/A' }}</li>
            </ul>
            <p style="font-size: 16px; color: #333;">
                You may log in to the admin panel for further actions.
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0px 20px 15px;">
            <p>
                <a href="{{ $adminPanelUrl ?? url('/admin') }}"
                    style="background: #503a8e; padding: 12px 22px; border-radius: 24px; text-decoration: none; color: #fff;">
                    Go to Admin Panel
                </a>
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0 15px 20px;">
            <p style="font-size: 16px; color: #333; padding-top: 15px;">
                Regards,<br>
                <strong>{{ $info->company_name ?? env('APP_NAME') }} System</strong>
            </p>
        </td>
    </tr>
@endsection
