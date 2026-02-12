@extends('emails.layout')
@section('title', 'Password Reset Request')

@section('content')
    <tr>
        <td style="padding: 30px 20px 0;">
            <h2 style="color: #503a8e; font-size: 20px; padding-bottom: 10px;">Password Reset Request</h2>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">Dear
                <strong>{{ isset($user) && $user->name ? ucwords($user->name) : 'User' }}</strong>,
            </p>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">
                We received a request to reset your Question Point account password.
            </p>
            <p style="font-size: 16px; color: #333;">
                Click the button below to set a new password:
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0px 20px 15px;">
            <p>
                <a href="{{ isset($user) && $user->link ? $user->link : '' }}"
                    style="background: #503a8e; padding: 12px 22px; border-radius: 24px; text-decoration: none; color: #fff;">
                    Reset Password
                </a>
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0 15px 20px;">
            <p style="font-size: 15px; color: #555;">
                If you did not request this, please ignore this email. Your account is safe.
            </p>
            <p style="font-size: 16px; color: #333; padding-top: 15px;">
                Warm regards,<br>
                <strong>{{ $info->company_name ?? env('APP_NAME') }} Team</strong>
            </p>
        </td>
    </tr>
@endsection
