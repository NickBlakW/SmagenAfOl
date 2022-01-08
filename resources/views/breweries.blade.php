<!DOCTYPE html>
<html lang="en">
@include('standard.head')

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            <div class="product-box">
                <div class="product-sub">
                    @forelse($breweries as $brewery)
                        <div class="grid-item">
                            <div class="card">
                                <div class="beer">
{{--                                    <a href="{{ route('beer.show', [$brewery->id]) }}">--}}
{{--                                        @if($beer->filename == null)--}}
{{--                                            <img class="ratio" src="{{ url('css/images/logo.jpg') }}" alt=" ">--}}
{{--                                        @else--}}
{{--                                            <img class="ratio" src="{{ url('css/images/'.$beer->filename) }}" alt=" ">--}}
{{--                                        @endif--}}
{{--                                    </a>--}}
                                </div>
                                <div class="card-body">
                                    <a class="option-link option" href="{{ route('brewery.show', [$brewery->id]) }}">
                                        <h5 class="beer-name">{{ $brewery->name }}</h5>
                                    </a>
                                    <p class="beer-text">{{ $brewery->description }}</p>
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
    @include('standard.footer')
</div>
<!-- Scripts -->
<script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
