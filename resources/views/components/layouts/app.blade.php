<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @if (app()->environment('local'))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            @include('components.layouts.assets')
        @endif
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
