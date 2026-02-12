<tr>
    <td style="background-color: #e7e7e7; padding: 15px 15px; text-align: center; font-size: 13px; color: #444;">
        <p style="font-weight: bold; padding-bottom: 6px; font-size: 15px;">Follow us:</p>
        <p style="padding-bottom: 8px;">
            @if (isset($info->facebook_link))
                <a href="{{ $info->facebook_link }}" style="padding: 0 5px;text-decoration: none;">
                    <img style="vertical-align: middle; height: 30px; width: 30px;"
                        src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook" />
                </a>
            @endif
            @if (isset($info->twitter_link))
                <a href="{{ $info->twitter_link }}" style="padding: 0 5px;text-decoration: none;">
                    <img src="{{ asset('assets/icons/twitter.png') }}" alt="Twitter"
                        style="vertical-align: middle; height: 30px; width: 30px;" />
                </a>
            @endif
            @if (isset($info->linkedin_link))
                <a href="{{ $info->linkedin_link }}" style="padding: 0 5px;text-decoration: none;">
                    <img src="{{ asset('assets/icons/linkedin.png') }}" alt="LinkedIn"
                        style="vertical-align: middle; height: 30px; width: 30px;" />
                </a>
            @endif
            @if (isset($info->instagram_link))
                <a href="{{ $info->instagram_link }}" style="padding: 0 5px;text-decoration: none;">
                    <img src="{{ asset('assets/icons/instagram.png') }}" alt="Instagram"
                        style="vertical-align: middle; height: 30px; width: 30px;" />
                </a>
            @endif
            @if (isset($info->youtube_link))
                <a href="{{ $info->youtube_link }}" style="padding: 0 5px;text-decoration: none;">
                    <img src="{{ asset('assets/icons/youtube.png') }}" alt="Youtube"
                        style="vertical-align: middle; height: 30px; width: 30px;" />
                </a>
            @endif
        </p>
        <p style="padding-bottom: 4px;">
            <strong>Email: </strong>
            <a href="mailto:{{ $info->company_email }}" style="color: #503a8e; text-decoration: none;">
                {{ $info->company_email }}
            </a>
            @if (is_null($info->company_email2) === false)
                <br>
                <strong>Alternate Email: </strong>
                <a href="mailto:{{ $info->company_email2 }}" style="color: #503a8e; text-decoration: none;">
                    {{ $info->company_email2 }}
                </a>
            @endif
        </p>
        <p style="padding-bottom: 4px;">
            <strong>Phone: </strong>
            <a href="tel:+{{ $info->company_phone }}" style="color: #503a8e; text-decoration: none;">
                {{ $info->company_phone_display ?? $info->company_phone }}
            </a>
        </p>
        <p>
            <strong>Website: </strong>
            <a href="https://{{ $info->company_url }}" style="color: #503a8e; text-decoration: none;">
                {{ $info->company_url }}
            </a>
        </p>
    </td>
</tr>
<tr>
    <td align="center" style="background-color: #eee; padding: 10px 15px; font-size: 11px; color: #888;">
        <p style="padding-bottom: 3px;">&copy; {{ date('Y') }} {{ $info->company_name }}. All rights reserved.</p>
        <p style="padding-bottom: 3px;">{{ $info->company_address }}</p>
        <p style="padding-bottom: 3px;">{{ $info->company_address2 }}</p>
        {{-- <p><a href="{{ $unsubscribe_link }}" style="color: #888; text-decoration: underline;">Unsubscribe</a></p> --}}
    </td>
</tr>
