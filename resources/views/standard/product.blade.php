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
                    <a class="option-link option" href="{{ route('beer.show', [$beer->id]) }}">
                        <p class="beer-name beer-title">{{ $beer->name }}</p>
                    </a>
                    <p class="beer-text">{{ $beer->description }}</p>
                </div>
                <div>
                    <a href="{{ route('beer.show', [$beer->id]) }}">
                        <button class="types-button">Detaljer</button>
                    </a>
                </div>
            </div>
        </div>

    @empty
        <h2>Der er ingen øl endnu :(</h2>

    @endforelse
</div>
