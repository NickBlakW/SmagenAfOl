<!DOCTYPE html>
@include('standard.head')

<body>
<div class="total-view">
    @include('standard.spiritheader')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            <div class="welcome-box">
                <div class="spirit-sub">
                    <div class="card">
                        <div class="beer">

                        </div>

                        <div class="card-body">
                            <a href="{{ route('spirits') }}">
                                <button class="link-button">Se Spiritus</button>
                            </a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="beer">

                        </div>

                        <div class="card-body">
                            <a href="{{ route('destilleries') }}">
                                <button class="link-button">Se Destillerier</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('standard.footer')
</div>
</body>
