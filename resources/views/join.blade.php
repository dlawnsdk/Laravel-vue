<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><meta name="csrf-token" content="{{ csrf_token() }}"></head>
    <body class="antialiased">
        <div id="app">
            <join/>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
