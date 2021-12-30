<!DOCTYPE html>
<head lang="en">
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
            <h1 class="beer-title">{{ $brewery->name }}</h1>
            <div class="beer-box">
                <div class="beer-sub">
{{--                    <div class="beer-image">--}}
{{--                        <img class="beer-image" src="{{ url('css/images/'.$beer->filename) }}"  alt=" ">--}}
{{--                    </div>--}}

                    <div class="">
                        <div class="description">
{{--                            <p>{{ $beer->description }}</p>--}}
                        </div>

                        <div class="information">
{{--                            @forelse($types as $type)--}}
{{--                                <p>Type: {{ $type->type }}</p>--}}
{{--                            @empty--}}
{{--                                <p>Type: N/A</p>--}}
{{--                            @endforelse--}}

                            <p>Bryggeri: <b></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="product-box">
            <div class="product-sub">
                @forelse($beers as $beer)
                    <div class="grid-item">
                        <div class="card">
                            <div class="beer">
                                <a href="{{ route('beer.show', [$beer->id]) }}">
                                    @if($beer->filename == null)
                                        <img class="ratio" src="{{ url('css/images/logo.jpg') }}" alt=" ">
                                    @else
                                        <img class="ratio" src="{{ url('css/images/'.$beer->filename) }}" alt=" ">
                                    @endif
                                </a>
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
</body>
