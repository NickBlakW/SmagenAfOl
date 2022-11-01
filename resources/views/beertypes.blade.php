<!DOCTYPE html>
@include('standard.head')

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            <div class="type-grid">
                @forelse($types as $type)

                    <a href="{{ route('beertypes.show', [$type->type]) }}">
                        <button class="types-button" {{--href="{{ route('beertypes.show', [$type->type]) }}"--}}>
                            {{ $type->type }}
                        </button><br>
                    </a>
                @empty
                    <h2 class="beer-title">Ingen øltyper registreret</h2>
                @endforelse
            </div>
        </div>
    </div>
    @include('standard.footer')
</div>
@include('standard.modal')
<script src="{{ asset('js/app.js') }}"></script>
</body>
