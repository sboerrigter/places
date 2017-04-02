<!DOCTYPE html>
<html>
    <head>
        @include('layout.head')
    </head>

    <body class="@yield('body-class')">
        @include('layout.header')
        @include('layout.navigation')
        @include('layout.main')
        @include('layout.footer')
    </body>
</html>
