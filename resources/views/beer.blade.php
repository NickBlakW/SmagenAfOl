<!DOCTYPE html>
@include('standard.head')

<body>
@include('standard.modal')

<div class="total-view">
    @include('standard.header')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            <h1 class="beer-title">{{ $beer->name }}</h1>
            <div class="beer-box">
                <div class="beer-sub">
                    @if($beer->image == null)
                        <img class="ratio" src="{{ url('images/standin.jpg') }}" alt=" ">
                    @else
                        <img class="ratio" src="{{ url('images/'.$beer->image) }}" alt=" ">
                    @endif

                    <div class="">
                        <div class="information">
                            @forelse($types as $type)
                                <p class="beer-information">Type: </p>
                                <a class="option" href="{{ route('beertypes.show', [$type->id]) }}">
                                    <p>{{ $type->type }}</p>
                                </a>

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

                            <p class="beer-information">Vol: {{ $beer->alc_percent }}%</p>

                            @if($beer->ibu == null)
                                <p class="beer-information">IBU: N/A</p>
                            @else
                                <p class="beer-information">IBU: {{ $beer->ibu }}</p>
                            @endif

                            <p class="beer-information">Størrelse: {{ $beer->size }}ml</p>

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
    @include('standard.footer')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
