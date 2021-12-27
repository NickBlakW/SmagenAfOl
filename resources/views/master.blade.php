<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Smagen af Øl</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset("js/app.js") }}"></script>
    </head>
    <body class="">
    <div class="total-view">
        <div class="main-header">
            <img class="logo" src="{{ asset('css/images/logo.jpg') }}" alt=" ">
            <p class="header-text">Smagen Af Øl</p>
        </div>

{{--        <div class="container column">--}}
{{--            @yield('options')--}}
{{--        </div>--}}
        <div class="container">
            <div class="flex-item column">
                <div class="product-box">
                    <div class="product-sub">
                        <div class="left-item">
                            <p>test</p>
                        </div>

                        <div class="middle-item">
                            <p>Test</p>
                        </div>

                        <div class="right-item">
                            <p>test</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
