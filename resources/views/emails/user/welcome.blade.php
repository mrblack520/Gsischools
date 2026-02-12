@extends('emails.layout')
@section('title', 'Welcome to Question Point!')

@section('content')
    <tr>
        <td style="padding: 30px 20px 0;">
            <h2 style="color: #503a8e; font-size: 20px; padding-bottom: 10px;">Welcome to Question Point!</h2>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">
                Dear <strong>{{ isset($user) && $user->first_name ? ucwords($user->first_name) : 'User' }}</strong>,
            </p>
            <p style="font-size: 16px; color: #333; padding-bottom: 15px;">
                We are thrilled to have you on board! Your account has been successfully created at <strong>Question
                    Point</strong>.
            </p>
            <p style="font-size: 16px; color: #333;">
                You can now log in and start exploring.
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0px 20px 15px;">
            <p>
                <a href="{{ $user->login_url ?? url('/') }}"
                    style="background: #503a8e; padding: 12px 22px; border-radius: 24px; text-decoration: none; color: #fff;">
                    Login Now
                </a>
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0 15px 20px;">
            <p style="font-size: 15px; color: #555;">
                If you have any questions, feel free to reach out to our support team.
            </p>
            <p style="font-size: 16px; color: #333; padding-top: 15px;">
                Warm regards,<br>
                <strong>{{ $info->company_name ?? env('APP_NAME') }} Team</strong>
            </p>
        </td>
    </tr>
@endsection
