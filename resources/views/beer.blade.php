<!DOCTYPE html>
<head lang="en">
    <meta charset="utf-8">

    <title>Smagen af Øl</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('css/images/leaf.jpg') }}" type="image/x-icon">

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        <div class="flex-item column option-column">
            <div class="option-box option-column">
                <div class="option-link">
                    <a href="{{ route('udforsk') }}" class="option">Tilbage</a>
                </div>

                <div class="option-link">
                    <a href="{{ route('home') }}" class="option">Forside</a>
                </div>
            </div>
        </div>

        <div class="flex-item column">
            <h1 class="beer-title">{{ $beer->name }}</h1>
            <div class="beer-box">
                <div class="beer-sub">
                    <div class="beer-image">
                        <img class="beer-image" src="{{ url('css/images/'.$beer->filename) }}"  alt=" ">
                    </div>

                    <div class="">
                        <div class="information">
                            @forelse($types as $type)
                                <p class="beer-information">Type: </p><p>{{ $type->type }}</p>
                            @empty
                                <p>Type: N/A</p>
                            @endforelse

                            @forelse($breweries as $brewery)
                                <p class="beer-information">Bryggeri: </p>
                                <a class="option" href="{{ route('brewery.show', [$brewery->id]) }}">
                                    <p>{{ $brewery->name }}</p>
                                </a>
                            @empty
                                <p>Bryggeri: N/A</p>
                            @endforelse
                        </div>

                        <div class="description">
                            <p>Beskrivelse:</p>
                            <p class="beer-description">{{ $beer->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>