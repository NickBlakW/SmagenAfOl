<!DOCTYPE html>
<html lang="en">
@include('standard.head')

<body>
    <div class="total-view">
        @include('standard.spiritheader')

        <div class="container">
            @include('standard.refs')

            <div class="flex-item column">
                <h1 class="brewery-name">{{ $destillery->name }}</h1>
                <div class="brewery-box">
                    <div class="">

                        <div class="">
                            <div class="description">
                                <p>{{ $destillery->description }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="product-box with-border">
                @include('standard.spirits')
            </div>
        </div>
        @include('standard.footer')
    </div>
</body>
</html>
