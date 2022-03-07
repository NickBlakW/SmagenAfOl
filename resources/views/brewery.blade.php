<!DOCTYPE html>
@include('standard.head')

<body>
@include('standard.modal')

<div class="total-view">
    @include('standard.header')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            <h1 class="brewery-name">{{ $brewery->name }}</h1>
            <div class="brewery-box">
                <div class="">
{{--                    <div class="beer-image">--}}
{{--                        <img class="beer-image" src="{{ url('css/images/'.$beer->filename) }}"  alt=" ">--}}
{{--                    </div>--}}

                    <div class="">
                        <div class="description">
                            <p>{{ $brewery->description }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="product-box with-border">
            @include('standard.product')
        </div>
    </div>
    @include('standard.footer')
</div>
</body>
