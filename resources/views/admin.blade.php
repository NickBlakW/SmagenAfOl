<!DOCTYPE html>
@include('standard.head')

<body>
<div class="total-view">
    @include('standard.header')

    <div class="container">
        <div class="flex-item column admin">
            <h1 class="beer-title">{{ Auth::user()->name }}</h1>
            <div class="product-sub">
                <div class="grid-item" id="delete-toggle">
                    <form action="{{ route('admin.delete') }}" method="POST">
                        @csrf
                        <button class="delete" type="submit">Slet al Data</button>
                    </form>
                </div>
                <div class="grid-item">
                    <button class="submission" id="pass-toggler">Skift Password</button>

                    <button class="submission" id="admin-toggler">Opret Admin</button>
                    <div class="show-hide" id="pass-toggle">
                        <form action="{{ route('change_password') }}" method="POST">
                            @method('PUT')
                            @csrf
                            <label for="new-password">Nyt Password:</label><br>
                            <input type="text" name="new-password" id="new-password">
                            <button type="submit">Skift Password</button>
                        </form>
                    </div>
                    <div class="show-hide" id="admin-toggle">
                        <form action="{{ route('admin.create') }}" method="POST">
                            @csrf
                            <div>
                                <label for="admin-name">Brugernavn:</label><br>
                                <input type="text" name="admin-name" id="admin-name">
                            </div>
                            <div>
                                <label for="admin-pass">Password:</label><br>
                                <input type="password" name="admin-pass" id="admin-pass">
                            </div>
                            <div>
                                <label for="admin-confirm">Bekræft Password:</label><br>
                                <input type="password" name="admin-confirm" id="admin-confirm">
                            </div>
                            <div>
                                <button type="submit" class="submission">Opret Admin</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="grid-item">
                    <a href="{{ route('logout') }}">
                        <button class="submission">Log ud</button>
                    </a>
                </div>
            </div>

            @if(session()->has('success'))
                <p class="success">{{ session()->get('success') }}</p>
            @endif
            <div class="product-box">
                <div class="product-sub">
                    <div class="grid-item">
                        <div class="upload">
                            <h3 class="small-margin">Opdater alt</h3>
                            <form class="admin-form" action="{{ route('upload_data') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <label for="test" class="uploadable"></label>
                                <input type="file" id="test" name="file"><br>
                                <input class="submission" type="submit" value="Opdater alt">
                            </form>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div>
                            <div class="upload">
                                <h3 class="small-margin">Sæt dagens øl</h3>
                                <form class="admin-form" action="{{ route('admin.set.botd') }}" method="POST">
                                    @csrf
                                    <label for="drop"></label>
                                    <select id="drop" name="drop" class="selection">
                                        @forelse($beers as $beer)
                                            <option value="{{ $beer->name }}"
                                                    @if ($beer == old('drop', $beer->name))
                                                    selected="selected"
                                                @endif
                                            > {{ $beer->name }}
                                            </option>
                                        @empty
                                            <option>Ingen øl</option>
                                        @endforelse
                                    </select><br>
                                    <input class="submission" type="submit" value="Dagens øl">
                                </form>
                                <form class="admin-form" action="{{ route('admin.reset.botd') }}" method="POST">
                                    @csrf
                                    <input class="delete" type="submit" value="Fjern dagens øl">
                                </form>
                            </div>
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
<script type="text/javascript">
    $(document).ready(function() {
        $("#pass-toggler").click(function(event) {
            $("#pass-toggle").toggle();
        });

        $("#admin-toggler").click(function(event) {
            $("#admin-toggle").toggle();
        })
    });
</script>
</body>
