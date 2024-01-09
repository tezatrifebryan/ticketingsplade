<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

        <link rel=stylesheet href="{{ asset('css/style.bundle.css') }}" />
        <link rel=stylesheet href="{{ asset('css/style.custom.css') }}" />
        <link rel=stylesheet href="{{ asset('plugins/global/plugins.bundle.css') }}" />
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        @spladeHead
    </head>
    <body class="font-sans antialiased">
        @splade

        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
    </body>
</html>
