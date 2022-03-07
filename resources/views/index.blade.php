<!DOCTYPE html>
@include('standard.head')

<body>
@include('standard.modal')

<div class="total-view">
    @include('standard.header')

    <div class="container">
        <div class="flex-item column">
            <div class="welcome-box">
                <div class="welcome-sub">
                    <div class="daily-beer">
                        <h2 class="small-margin-left">Dagens Øl</h2>
                        @forelse($botds as $botd)
                        <div class="card">
                            <div class="beer">
                                @if($botd->image == null)
                                    <a href="{{ route('beer.show', [$botd->id]) }}">
                                        <img class="beer" src="{{ url('images/standin.jpg') }}" alt=" ">
                                    </a>
                                @else
                                    <a href="{{ route('beer.show', [$botd->id]) }}">
                                        <img class="beer" src="{{ url('images/'.$botd->image) }}" alt=" ">
                                    </a>
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="beer-name">{{ $botd->name }}</h5>
                                <p class="beer-text">{{ $botd->description }}</p>
                            </div>
                            <div>
                                <a href="{{ route('beer.show', [$botd->id]) }}">
                                    <button class="types-button">Detaljer</button>
                                </a>
                            </div>
                        </div>

                        @empty
                        <div>
                            <h5>Dagens øl er ikke blevet valgt endnu.</h5>
                        </div>

                        @endforelse
                    </div>

                    <div class="explore-button">
                        <h2 class="small-margin-left">Udforsk</h2>
                        <div class="card">
                            <div class="beer">
                                @if($beer ?? '' != null)
                                    @if($beer ?? ''->image == null)
                                        <a href="{{ route('udforsk') }}">
                                            <img class="ratio" src="{{ url('images/standin.jpg') }}" alt=" ">
                                        </a>
                                    @else
                                        <a href="{{ route('udforsk') }}">
                                            <img class="beer" src="{{ url('images/'.$beer ?? ''->image) }}" alt=" ">
                                        </a>
                                    @endif
                                @endif
                            </div>
                            <div class="card-body">
                                <a href="{{ route('udforsk') }}">
                                    <button class="link-button">Se Øl I Butikken</button>
                                </a>
                            </div>

                            <div class="card-body">
                                <a href="{{ route('bryggeri') }}">
                                    <button class="link-button">Se Bryggerier</button>
                                </a>
                            </div>

                            <div class="card-body">
                                <a href="{{ route('beertypes') }}">
                                    <button class="link-button">Se Øltyper</button>
                                </a>
                            </div>

                            <div class="card-body">
                                <a href="{{ route('spirit_home') }}">
                                    <button class="link-button">Se Spiritus</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="small-margin-left">Sidste nyt</h2>
                        <div class="card announcement">
                            <div class="announcement-text">
                                @forelse($announcements as $announcement)
                                    <div class="news">
                                        <label class="created"><em> {{ $announcement->created_at }}</em></label><br>
                                        <label>{{ $announcement->announcement }}</label>
                                    </div>
                                @empty
                                    <h2>Intet nyt</h2>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('standard.footer')
</div>
</body>
