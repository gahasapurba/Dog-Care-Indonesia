<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>@yield('title')</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="/assets/homepage/images/favicon.svg" />
        <link rel="stylesheet" href="/assets/homepage/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/homepage/css/LineIcons.3.0.css" />
        <link rel="stylesheet" href="/assets/homepage/css/main.css" />
    </head>
    <body>
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="error-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error-content">
                            <h1>@yield('code')</h1>
                            <h2>Oops! @yield('message')!</h2>
                            <p>© {{ date('Y') }} {{ config('app.name') }}. @lang('Hak cipta dilindungi undang-undang.')</p>
                            <div class="button">
                                <a href="{{ url('/') }}" class="btn">Kembali Ke Beranda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/homepage/js/bootstrap.min.js"></script>
        <script>
            window.onload = function () {
            window.setTimeout(fadeout, 500);
            }

            function fadeout() {
            document.querySelector('.preloader').style.opacity = '0';
            document.querySelector('.preloader').style.display = 'none';
            }
        </script>
    </body>
</html>