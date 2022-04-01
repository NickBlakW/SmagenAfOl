<!DOCTYPE html>
<html lang="en">
    @include('standard.head')

    <body>
        <div class="total-view">
            @include('standard.spiritheader')

            <div class="container">
                @include('standard.refs')

                <div class="flex-item column">
                    <div class="product-box">
                        <div class="product-sub">
                            @forelse($destilleries as $destillery)
                                <div class="grid-item">
                                    <div class="card card-bg">
                                        <div class="card-body">
                                            <a class="option-link option" href="{{ route('destilleries.show', [$destillery->id]) }}">
                                                <h5 class="beer-name">{{ $destillery->name }}</h5>
                                            </a>
                                            <p class="beer-text">{{ $destillery->description }}</p>
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
    @include('standard.modal')
    </body>
</html>
