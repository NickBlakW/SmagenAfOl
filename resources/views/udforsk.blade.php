<!DOCTYPE html>
<html lang="en">
    @include('standard.head')
    <body>
        <div class="total-view">
            @include('standard.header')

            <div class="container">
                @include('standard.refs')

                <div class="flex-item column scrollable">
                    @include('standard.product')
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>
