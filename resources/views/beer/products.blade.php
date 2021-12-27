@extends('master')

@section('products')
    @forelse($beers as $beer)
        <div class="grid-item">
            <div class="card">
                <div class="beer">
                    <img class="ratio" src="{{ url('css/images/'.$beer->filename) }}" alt=" ">
                </div>
                <div class="card-body">
                    <h5 class="beer-name">Crossing the streams in the dark #297</h5>
                    <p class="beer-text">Test</p>
                </div>
            </div>
            @empty
                <h2>Der er ingen øl endnu :(</h2>
        </div>
    @endforelse
@endsection
