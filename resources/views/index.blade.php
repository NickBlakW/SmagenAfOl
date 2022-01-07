<!DOCTYPE html>
<head lang="en">
    <meta charset="utf-8">

    <title>Smagen af Øl</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/leaf.jpg') }}" type="image/x-icon">
</head>

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        <div class="flex-item column">
            <div class="welcome-box">
                <div class="welcome-sub">
                    <div class="daily-beer">
                        <h2 class="small-margin-left">Dagens Øl</h2>
                        @forelse($botds as $botd)
                        <div class="card">
                            <div class="beer">
                                @if($botd->image == null)
                                    <a href="{{ route('beer.show', [$botd->id]) }}">
                                        <img class="ratio" src="{{ url('images/standin.jpg') }}" alt=" ">
                                    </a>
                                @else
                                    <a href="{{ route('beer.show', [$botd->id]) }}">
                                        <img class="ratio" src="{{ url('images/'.$botd->image) }}" alt=" ">
                                    </a>
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="beer-name">{{ $botd->name }}</h5>
                                <p class="beer-text">{{ $botd->description }}</p>
                            </div>
                            <div>
                                <a href="{{ route('beer.show', [$botd->id]) }}">
                                    <button class="types-button">Detaljer</button>
                                </a>
                            </div>
                        </div>

                        @empty
                        <div>
                            <h5>Dagens øl findes ikke</h5>
                        </div>

                        @endforelse
                    </div>

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
                                    <img class="beer" src="{{ url('images/standin.jpg') }}" alt=" ">
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
                                    <div class="news">
                                        <label>
                                            {{ $announcement->announcement }}
                                        </label>
                                    </div>
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
