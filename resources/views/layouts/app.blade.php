<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>

    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>