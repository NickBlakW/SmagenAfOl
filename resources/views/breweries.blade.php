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
        <div class="flex-item column">
            <div class="option-box">
                <div class="option-link">
                    <a href="{{ route('home') }}" class="option">Forside</a>
                </div>

                <div class="option-link">
                    <a href="{{ route('udforsk') }}" class="option">Udforsk</a>
                </div>

                <div class="option-link">
                    <a href="{{ route('bryggeri') }}" class="option">Bryggerier</a>
                </div>
            </div>
        </div>

        <div class="flex-item column">
            <div class="product-box">
                <div class="product-sub">
                    @forelse($breweries as $brewery)
                        <div class="grid-item">
                            <div class="card">
                                <div class="beer">
{{--                                    <a href="{{ route('beer.show', [$brewery->id]) }}">--}}
{{--                                        @if($beer->filename == null)--}}
{{--                                            <img class="ratio" src="{{ url('css/images/logo.jpg') }}" alt=" ">--}}
{{--                                        @else--}}
{{--                                            <img class="ratio" src="{{ url('css/images/'.$beer->filename) }}" alt=" ">--}}
{{--                                        @endif--}}
{{--                                    </a>--}}
                                </div>
                                <div class="card-body">
                                    <a class="option-link option" href="{{ route('brewery.show', [$brewery->id]) }}">
                                        <h5 class="beer-name">{{ $brewery->name }}</h5>
                                    </a>
                                    <p class="beer-text">{{ $brewery->description }}</p>
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
