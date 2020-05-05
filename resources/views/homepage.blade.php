<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel primi passi</title>
         <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include ('partials.header')
        @include ('partials.footer')
    </body>
</html>
