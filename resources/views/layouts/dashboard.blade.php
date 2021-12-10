<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DCI - @yield('title')</title>
        {{-- Style --}}
        @stack('prepend-style')
        @include('includes.dashboard.style')
        @stack('addon-style')
    </head>
    <body>
        {{-- Sidebar --}}
        @include('includes.dashboard.sidebar')
        <main class="main-wrapper">
            {{-- Header --}}
            @include('includes.dashboard.header')
            {{-- Pages --}}
            @yield('content')
            {{-- Footer --}}
            @include('includes.dashboard.footer')
        </main>
        {{-- Script --}}
        @stack('prepend-script')
        @include('includes.dashboard.script')
        @stack('addon-script')
    </body>
</html>