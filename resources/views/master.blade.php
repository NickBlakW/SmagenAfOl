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
                        
                        @forelse($beers as $beer)
                        <div class="grid-item">
                            <div class="card">
                                <div class="beer">
                                    <img class="ratio" src="{{ url('css/images/'.$beer->filename) }}" alt=" ">
                                </div>
                                <div class="card-body">
                                    <h5 class="beer-name">{{ $beer->name }}</h5>
                                    <p class="beer-text">{{ $beer->description }}</p>
                                </div>
                            </div>
                        </div>

                        @empty
                            <h2>Der er ingen øl endnu :(</h2>

                        @endforelse
                    </div>


{{--                        <div class="grid-item">--}}
{{--                            <div class="card">--}}
{{--                                <div class="beer">--}}
{{--                                    <img class="ratio" src="{{ url('css/images/Shakespeare.jpg') }}" alt=" ">--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="beer-name">Shakespeare Stout</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="grid-item">--}}
{{--                            <div class="card">--}}
{{--                                <div class="beer">--}}
{{--                                    <img class="ratio" src="{{ url('css/images/stone25.jpg') }}" alt=" ">--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="beer-name">Stone Anniversary 25</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="grid-item">--}}
{{--                            <div class="card">--}}
{{--                                <div class="beer">--}}
{{--                                    <img class="ratio" src="{{ url('css/images/unpuzzled.png') }}" alt=" ">--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="beer-name">Unpuzzled Infinity</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="grid-item">--}}
{{--                            <div class="card">--}}
{{--                                <div class="beer">--}}
{{--                                    <img class="ratio" src="{{ url('css/images/logo.png') }}" alt=" ">--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="beer-name">XoCovesa Tres Leches</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                </div>
            </div>
        </div>
    </div>

    </body>
</html>
