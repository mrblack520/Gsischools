<tr>
    <td align="center" style="background-color: #503a8e; padding: 20px 15px;">
        <a href="{{ $info->company_url }}" style="text-decoration: none;">
            <img src="{{ $info->company_logo ?? asset('assets/images/logo.svg') }}"
                alt="{{ $info->company_name ?? 'Company' }} Logo" style="max-width: 180px; height: auto;">
        </a>
        <h1 style="padding-top: 6px; padding-bottom: 4px; color: #ffffff; font-size: 24px;">
            {{ $info->company_name ?? 'Company' }}</h1>
        <p style="padding-top: 0px; color: #e0e0e0; font-size: 13px;">{{ $info->company_slogan }}</p>
    </td>
</tr>
