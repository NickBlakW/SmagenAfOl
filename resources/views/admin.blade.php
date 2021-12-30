<!DOCTYPE html>
<head>
    <title>Smagen af Øl</title>

    <link rel="icon" href="{{ url('css/images/leaf.jpg') }}" type="image/icon-x">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        <div class="flex-item column">
            <h1 class="beer-title">Admin</h1>
            <div class="admin">
                <form class="admin-form" action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    <input type="file" name="filename">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
