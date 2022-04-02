<div class="product-box">
    <div class="product-sub">
        @forelse($beers as $beer)
            <div class="grid-item">
                <div class="card">
                    <div class="beer">
                        <a href="{{ route('beer.show', [$beer->id]) }}">
                            @if($beer->image == null)
                                <img class="ratio" src="{{ url('images/standin.jpg') }}" alt=" ">
                            @else
                                <img class="ratio" src="{{ url('images/'.$beer->image) }}" alt=" ">
                            @endif
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="option-link option" href="{{ route('beer.show', [$beer->id]) }}">
                            <p class="beer-name beer-title">{{ $beer->name }}</p>
                        </a>
                        @if ($beer->description != null)
                            <p class="beer-text">{{ $beer->description }}</p>
                            @else
                            <p class="beer-text">Ingen beskrivelse</p>
                        @endif
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
</div>
