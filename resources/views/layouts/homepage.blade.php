<!DOCTYPE html>
<html class="no-js" lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>DCI - @yield('title')</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        {{-- Style --}}
        @stack('prepend-style')
        @include('includes.homepage.style')
        @stack('addon-style')
    </head>
    <body>
        {{-- Header --}}
        @include('includes.homepage.header')
        {{-- Pages --}}
        @yield('content')
        {{-- Footer --}}
        @include('includes.homepage.footer')
        {{-- Script --}}
        @stack('prepend-script')
        @include('includes.homepage.script')
        @stack('addon-script')
        {{-- Sweet Alert --}}
        @include('sweetalert::alert')
    </body>
</html>