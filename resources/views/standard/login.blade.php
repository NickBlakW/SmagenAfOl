<!DOCTYPE html>
<html lang="en">
@include('standard.head')

<body>
    <div class="total-view">
        @include('standard.header')

        <div class="container">
            <div class="flex-item column admin">
                <div class="login-pg">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="beer-name">Brugernavn:</label><br>
                            <input type="text" name="name" id="name" value="{{ old('name') }}">
                        </div>

                        <div>
                            <label for="password" class="beer-name">Password:</label><br>
                            <input type="password" name="password" id="password" value="{{ old('password') }}">
                        </div>

                        <div class="margin-top">
                            <button type="submit" class="types-button">Login</button>
                        </div>
                    </form>
                </div>
                <div class="login-error margin-top">
                    @if(Session()->has('login-error'))
                        <div class="error-box">
                            <p class="error">{{ session()->get('login-error') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>
