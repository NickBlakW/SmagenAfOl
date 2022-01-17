<!DOCTYPE html>
@include('standard.head')

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            @forelse($types as $type)
                <a href="{{ route('beertypes.show', [$type->id]) }}">
                    <button class="types-button" href="{{ route('beertypes.show', [$type->id]) }}">
                        {{ $type->type }}
                    </button><br>
                </a>
            @empty

            @endforelse
        </div>
    </div>
    @include('standard.footer')
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
