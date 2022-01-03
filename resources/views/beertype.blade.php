<!DOCTYPE html>
<head lang="en">
    <title>Smagen af Øl</title>

    <link rel="icon" href="{{ url('css/images/leaf.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
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
</body>
