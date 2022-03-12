<div class="modal-container @if(Cookie::get('age_check') == 'valid') closed @else open @endif" id="modal">
    <div class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="popup-title">Bekræft alder</h1>
                </div>
                <div>
                    <h4 class="beer-title popup">Du skal være over 18 for at besøge.</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="centered extra-top">
                        <button class="link-button" id="confirm" onclick="createCookie('age_check', 'valid', true)">
                            Ja, jeg er over 18.
                        </button>
                    </div>

                    <div class="extra-top">
                        <a href="https://github.com/NickBlakW" class="option">
                            <p class="center-link">FORLAD HJEMMESIDE</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/cookie.js') }}"></script>