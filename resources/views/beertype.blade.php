<!DOCTYPE html>
@include('standard.head')

<body>
@include('standard.modal')

<div class="total-view">
    @include('standard.header')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            <div class="product-box">
                @include('standard.product')
            </div>
        </div>
    </div>
    @include('standard.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
