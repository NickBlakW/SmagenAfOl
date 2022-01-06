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

            @if(session()->has('success'))
                <p>{{ session()->get('success') }}</p>
            @endif
            <div class="product-box">
                <div class="product-sub">
                    <div class="grid-item">
                        <div>
                            <div class="upload">
                                <h3 class="small-margin">Opdater bryggerier</h3>
                                <form class="admin-form" action="{{ route('admin.upload.brewery') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <input type="file" name="file"><br>
                                    <input type="submit">
                                </form>
                            </div>

                            <div class="upload">
                                <h3 class="small-margin">Opdater øltyper</h3>
                                <form class="admin-form" action="{{ route('admin.upload.type') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <input type="file" name="file"><br>
                                    <input type="submit">
                                </form>
                            </div>
                        </div>

                        <div class="upload">
                            <h3 class="small-margin">Opdater øl</h3>
                            <form class="admin-form" action="{{ route('admin.upload.beer') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <input type="file" name="file"><br>
                                <input type="submit">
                            </form>
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('delete') }}" method="POST">
                            @csrf
                            <button type="submit">Slet al data</button>
                        </form>
                    </div>
{{--                    <div class="grid-item">--}}
{{--                        <div class="card">--}}
{{--                            <div class="beer">--}}
{{--                                <form class="admin-form" action="{{ route('admin.store') }}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    <input type="file" name="filename"><br>--}}
{{--                                    <input type="submit">--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="grid-item">--}}
{{--                        <div class="card">--}}
{{--                            <div class="beer">--}}
{{--                                <form class="admin-form" action="{{ route('admin.store') }}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    <input type="file" name="filename"><br>--}}
{{--                                    <input type="submit">--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
