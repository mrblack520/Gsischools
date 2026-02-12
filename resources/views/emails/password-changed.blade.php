@extends('emails.layout')
@section('title', 'Password Changed Successfully')

@section('content')
    <tr>
        <td style="padding: 30px 20px 0;">
            <h2 style="color: #503a8e; font-size: 20px; padding-bottom: 10px;">Password Changed</h2>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">
                Dear <strong>{{ isset($user) && $user->first_name ? ucwords($user->first_name) : 'User' }}</strong>,
            </p>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">
                This is to notify you that the password for your <strong>Question Point</strong> account was changed
                recently.
            </p>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">
                If you made this change, no further action is required.
            </p>
            <p style="font-size: 16px; color: #333;">
                <strong>However, if you did not initiate this change</strong>, please reset your password immediately and
                contact our support team to secure your account.
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0px 20px 15px;">
            <p>
                <a href="{{ $user->reset_link ?? url('/forgot-password') }}"
                    style="background: #503a8e; padding: 12px 22px; border-radius: 24px; text-decoration: none; color: #fff;">
                    Reset Password Now
                </a>
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0 15px 20px;">
            <p style="font-size: 15px; color: #555;">
                If you continue to experience issues, feel free to contact us at <a
                    href="mailto:{{ $info->company_email }}">{{ $info->company_email }}</a>.
            </p>
            <p style="font-size: 16px; color: #333; padding-top: 15px;">
                Stay safe,<br>
                <strong>{{ $info->company_name ?? env('APP_NAME') }} Security Team</strong>
            </p>
        </td>
    </tr>
@endsection
