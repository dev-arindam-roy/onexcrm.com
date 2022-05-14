<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('onex.app_title') }} @yield('page_title')</title>
    @stack('page_meta')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'master-assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'master-assets/css/adminlte.min.css') }}">
    @stack('page_css_link')
    <link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'css/signinup.min.css') }}">
    @stack('page_css')
</head>
<body>