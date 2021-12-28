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
    <body>
        <div class="total-view">
            <div class="main-header">
                <a href="{{ route('home') }}">
                    <img class="logo" src="{{ asset('css/images/logo.jpg') }}" alt=" ">
                </a>
                <p class="header-text">Smagen Af Øl</p>
            </div>

    {{--        <div class="container column">--}}
    {{--            @yield('options')--}}
    {{--        </div>--}}
            <div class="container">
                <div class="flex-item column">
                    <div class="option-box">
                        <div class="option-link">
                            <a href="{{ route('home') }}" class="option">Tilbage</a>
                        </div>

                        <div class="option-link">
                            <a href="{{ route('home') }}" class="option">Tilbage</a>
                        </div>

                        <div class="option-link">
                            <a href="{{ route('home') }}" class="option">Tilbage</a>
                        </div>

                        <div class="option-link">
                            <a href="{{ route('home') }}" class="option">Tilbage</a>
                        </div>

                        <div class="option-link">
                            <a href="{{ route('home') }}" class="option">Tilbage</a>
                        </div>
                    </div>
                </div>

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
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
