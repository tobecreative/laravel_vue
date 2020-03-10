<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>Laravel</h1>
        <div id="app">
            <example-component></example-component>
        </div>
        {{-- <div ="app">
            <div id="nav">
                <router-link to="/"> Home</router-link>
                <router-link to="/"> Fruit</router-link>
                <router-link to="/"> About</router-link>
            </div>
            <router-view/> --}}
        </div>
    </body>
</html>
