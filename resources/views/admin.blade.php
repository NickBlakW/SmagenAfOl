<!DOCTYPE html>
<head>
    <title>Smagen af Øl</title>

    <link rel="icon" href="{{ url('images/leaf.jpg') }}" type="image/icon-x">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        <div class="flex-item column admin">
            <div class="grid-item">
                <form action="{{ route('admin.delete') }}" method="POST">
                    @csrf
                    <button class="delete" type="submit">Slet al data</button>
                </form>
            </div>
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
                                    <label for="brewery" class="uploadable"></label>
                                    <input type="file" id="brewery" name="file"><br>
                                    <input class="submission" type="submit">
                                </form>
                            </div>

                            <div class="upload">
                                <h3 class="small-margin">Opdater øltyper</h3>
                                <form class="admin-form" action="{{ route('admin.upload.type') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <label for="types" class="uploadable"></label>
                                    <input type="file" id="types" name="file"><br>
                                    <input class="submission" type="submit">
                                </form>
                            </div>
                        </div>

                        <div class="upload">
                            <h3 class="small-margin">Opdater øl</h3>
                            <form class="admin-form" action="{{ route('admin.upload.beer') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <label for="beer" class="uploadable"></label>
                                <input type="file" id="beer" name="file"><br>
                                <input class="submission" type="submit" value="Opdater øl">
                            </form>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div>
                            <div class="upload">
                                <h3 class="small-margin">Upload billede</h3>
                                <form class="admin-form" action="{{ route('admin.image') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="image" class="uploadable"></label>
                                    <input type="file" id="image" name="image"><br>
                                    <input class="submission" type="submit" value="Gem billede">
                                </form>
                            </div>
                        </div>
                        <div>
                            <div class="upload">
                                <h3 class="small-margin">Sæt dagens øl</h3>
                                <form class="admin-form" action="{{ route('admin.botd') }}" method="POST">
                                    @csrf
                                    <label for="botd"></label>
                                    <input class="textfield" id=botd type="text" name="botd" placeholder="Navn på øl"><br>
                                    <input class="submission" type="submit" value="Dagens øl">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div>
                            <div class="upload">
                                <h3 class="small-margin">Opret nyhed</h3>
                                <form class="admin-form" action="{{ route('admin.announcement') }}" method="POST">
                                    @csrf
                                    <label for="announcement"></label>
                                    <input class="textfield" id="announcement" type="text" name="announcement" placeholder="Nyheder"><br>
                                    <input class="submission" type="submit" value="Opret nyhed">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
