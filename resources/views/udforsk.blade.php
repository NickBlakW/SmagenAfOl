<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Smagen af Øl</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="{{ asset('css/images/leaf.jpg') }}" type="image/x-icon">

        <!-- Scripts -->
        <script src="{{ asset("js/app.js") }}"></script>
    </head>
    <body>
        <div class="total-view">
            @include('standard.header')

            <div class="container">
                @include('standard.refs')

                <div class="flex-item column">
                    @include('standard.product')
                </div>
            </div>
        </div>
    </body>
</html>
