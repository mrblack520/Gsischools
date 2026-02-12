<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', env('APP_NAME'))</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="padding: 20px 0; background-color: #f4f4f4;">
    <tr>
      <td align="center">

        <!-- Container -->
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">

          @include('emails.partials.header')

          @yield('content')

          @include('emails.partials.footer', [
            'unsubscribe_link' => '#'
          ])

        </table>
      </td>
    </tr>
  </table>

</body>
</html>
