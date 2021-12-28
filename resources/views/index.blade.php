<!DOCTYPE html>
<head lang="en">
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
        <img class="logo" src="{{ asset('css/images/logo.jpg') }}" alt=" ">
        <p class="header-text">Smagen Af Øl</p>
    </div>

    {{--        <div class="container column">--}}
    {{--            @yield('options')--}}
    {{--        </div>--}}
    <div class="container">
        <div class="flex-item column welcome-column">
            <div class="option-box welcome-column">
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
            <div class="welcome-box">
                <div class="welcome-sub">
                    @forelse($beers as $beer)
                    <div class="daily-beer">
                        <h2>Dagens Øl</h2>

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
                        <div>
                            <h5>Dagens øl findes ikke</h5>
                        </div>
                    @endforelse

                    <div class="explore-button">
                        <h2>Udforsk</h2>
                        <div class="card">
                            <div class="beer">
                                <a href="{{ route('udforsk') }}">
                                    <img class="beer" src="{{ url('css/images/Shakespeare.jpg') }}" alt=" ">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('udforsk') }}">
                                    <button class="link-button">Udforsk butikken</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="announcement">
                        <h2>Sidste nyt</h2>
                        <div class="card">
                            <div class="announcement-text">
                                @forelse($announcements as $announcement)
                                    <label>
                                        {{ $announcement->announcement }}
                                    </label>
                                    <p>_____________________________</p>
                                @empty
                                    <h2>Intet nyt</h2>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
