<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Secure Your Account' }}</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    @livewireStyles
</head>

<body>
    {{ $slot }}

    @livewireScripts
    <script src="{{ asset('scripts/script.js') }}"></script>
</body>

</html>
