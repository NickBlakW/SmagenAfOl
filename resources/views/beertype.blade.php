<!DOCTYPE html>
<head lang="en">
    <title>Smagen af Øl</title>

    <link rel="icon" href="{{ url('css/images/leaf.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        @include('standard.refs')

        <div class="flex-item column">
            @include('standard.product')
        </div>
    </div>
</div>
</body>
