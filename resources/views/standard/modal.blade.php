{{--@if($popup)--}}
{{--    @if(session()->has('modal'))--}}
    <div class="overlay {{-- @if(session()->has('ageCheck')) open @else closed @endif --}}" id="overlay">
        <div class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="popup-title">Bekræft alder</h1>
                    </div>
                    <div>
                        <h4 class="beer-title popup">{{ $popup }}</h4>
                    </div>
                    <div class="modal-body text-center">
                        <div class=" centered extra-top">
                            <button class="link-button" id="confirm">Ja, jeg er over 18.</button>
                        </div>

                        <div class="extra-top">
                            <a href="http://google.com" class="option">
                                <p class="center-link">FORLAD HJEMMESIDE</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let overlay = document.getElementById('overlay');
            let confirm = document.getElementById('confirm');

            confirm.onclick = function () {
                overlay.style.display = 'none';
            }
        </script>
    </div>
{{--    @endif--}}
{{--@endif--}}
