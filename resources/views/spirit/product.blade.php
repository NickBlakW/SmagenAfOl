<!DOCTYPE html>
@include('standard.head')

<body>
<div class="total-view">
    @include('standard.spiritheader')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            <h1 class="beer-title">{{ $spirit->name }}</h1>
            <div class="beer-box">
                <div class="beer-sub">
                    @if($spirit->image == null)
                        <img class="ratio" src="{{ url('images/standin.jpg') }}" alt=" ">
                    @else
                        <img class="ratio" src="{{ url('images/'.$spirit->image) }}" alt=" ">
                    @endif

                    <div class="">
                        <div class="information">
                            @forelse($types as $type)
                                <p class="beer-information">Type: </p>
                                <p>{{ $type->type }}</p>

                            @empty
                                <p>Type: N/A</p>
                            @endforelse

                            @forelse($destilleries as $destillery)
                                <p class="beer-information">Destilleri: </p>
                                <a class="option" href="{{ route('destilleries.show', [$destillery->id]) }}">
                                    <p>{{ $destillery->name }}</p>
                                </a>
                            @empty
                                <p>Destilleri: N/A</p>
                            @endforelse

                            <p class="beer-information">Vol: {{ $spirit->alc_percent }}%</p>
                            <p class="beer-information">Størrelse: {{ $spirit->size }}ml</p>

                        </div>

                        <div class="description">
                            <p>Beskrivelse:</p>
                            <p class="beer-description">{{ $spirit->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('standard.footer')
</div>

</body>
