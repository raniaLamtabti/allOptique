<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>

    </head>
    <body>
        <div id="app">
            <navbar-component></navbar-component>
            <label for="">{{ __('Lang') }}</label>
            <router-view></router-view>
            <footer-component></footer-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
