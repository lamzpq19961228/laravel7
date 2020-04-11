<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Laravel')</title>
    </head>
    <body>
        @section('header')
            这里是头部栏
        @show
        @section('sidebar')
            这里是侧边栏
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>