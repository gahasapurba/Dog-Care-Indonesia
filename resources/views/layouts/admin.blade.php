<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DCI - @yield('title')</title>
        {{-- Style --}}
        @stack('prepend-style')
        @include('includes.admin.style')
        @stack('addon-style')
    </head>
    <body>
        {{-- Sidebar --}}
        @include('includes.admin.sidebar')
        <main class="main-wrapper">
            {{-- Header --}}
            @include('includes.admin.header')
            {{-- Pages --}}
            @yield('content')
            {{-- Footer --}}
            @include('includes.admin.footer')
        </main>
        {{-- Script --}}
        @stack('prepend-script')
        @include('includes.admin.script')
        @stack('addon-script')
        {{-- Sweet Alert --}}
        @include('sweetalert::alert')
    </body>
</html>