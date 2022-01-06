<!DOCTYPE html>
<head lang="en">
    <title>Smagen af Øl</title>

    <link rel="icon" href="{{ url('images/leaf.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

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
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
