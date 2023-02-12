<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ONEXCRM</title>
    </head>
    <body>
        <div style="margin: 60px auto; text-align:center;">
            <img src="{{ asset(config('onex.asset_path') . 'master-assets/images/onex-logo-text.png') }}" alt="{{ env('crm_name', 'onexcrm-logo') }}" title="{{ env('crm_name', 'onexcrm') }}" class="img-fluid crm-signup-header-logo" />
            <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
            <p>
                <a href="{{ route('signup.businessAccount') }}">{{ route('signup.businessAccount') }}</a>
            </p>
        </div>
    </body>
</html>


