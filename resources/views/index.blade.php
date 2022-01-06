<!DOCTYPE html>
<head lang="en">
    <meta charset="utf-8">

    <title>Smagen af Øl</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('css/images/leaf.jpg') }}" type="image/x-icon">
</head>

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        <div class="flex-item column">
            <div class="welcome-box">
                <div class="welcome-sub">
                    @forelse($beers as $beer)
                    <div class="daily-beer">
                        <h2 class="small-margin-left">Dagens Øl</h2>

                        <div class="card">
                            <div class="beer">
                                @if($beer->image == null)
                                    <a href="{{ route('beer.show', [$beer->id]) }}">
                                        <img class="ratio" src="{{ url('images/logo.jpg') }}" alt=" ">
                                    </a>
                                @else
                                    <a href="{{ route('beer.show', [$beer->id]) }}">
                                        <img class="ratio" src="{{ url('images/'.$beer->image) }}" alt=" ">
                                    </a>
                                @endif
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
                        <h2 class="small-margin-left">Udforsk</h2>
                        <div class="card">
                            <div class="beer">
                                <a href="{{ route('udforsk') }}">
                                    <img class="beer" src="{{ url('images/Shakespeare.jpg') }}" alt=" ">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('udforsk') }}">
                                    <button class="link-button">Se butikken</button>
                                </a>
                            </div>
                            <div class="beer">
                                <a href="{{ route('bryggeri') }}">
                                    <img class="beer" src="{{ url('images/stone25.jpg') }}" alt=" ">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('bryggeri') }}">
                                    <button class="link-button">Se Bryggerier</button>
                                </a>
                            </div>
                            <div class="beer">
                                <a href="{{ route('beertypes') }}">
                                    <img class="beer" src="{{ url('images/logo.jpg') }}" alt=" ">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('beertypes') }}">
                                    <button class="link-button">Se Øltyper</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="small-margin-left">Sidste nyt</h2>
                        <div class="card announcement">
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
{{--@include('standard.credit')--}}
</body>
