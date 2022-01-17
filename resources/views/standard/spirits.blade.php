<div class="product-sub">
    @forelse($spirits as $spirit)
        <div class="grid-item">
            <div class="card">
                <div class="beer">
                    <a href="{{ route('spirits.show', [$spirit->id]) }}">
                        @if($spirit->image == null)
                            <img class="ratio" src="{{ url('images/standin.jpg') }}" alt=" ">
                        @else
                            <img class="ratio" src="{{ url('images/'.$spirit->image) }}" alt=" ">
                        @endif
                    </a>
                </div>
                <div class="card-body">
                    <a class="option-link option" href="{{ route('spirits.show', [$spirit->id]) }}">
                        <p class="beer-name beer-title">{{ $spirit->name }}</p>
                    </a>
                    <p class="beer-text">{{ $spirit->description }}</p>
                </div>
                <div>
{{--                    <a href="{{ route('beer.show', [$spirit->id]) }}">--}}
{{--                        <button class="types-button">Detaljer</button>--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>

    @empty
        <h2>Der er ingen øl endnu :(</h2>

    @endforelse
</div>
