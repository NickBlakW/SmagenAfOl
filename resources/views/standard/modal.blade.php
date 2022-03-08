<div class="modal-container
    @if (\Illuminate\Support\Facades\Cookie::get('age_check') == 'valid') closed @else open @endif"
     id="modal">
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
    <script type="text/javascript">
        // create cookie
        function createCookie(name, value, days) {
            console.log('WRITECOOKIE');
            let expires = "";
            let modal = document.getElementById("modal");
            let storage = window.localStorage;

            /**
            *   ## IMPORTANT! ##
            *   Cookie set to expire after 10 seconds
            *   for debugging.
            *   # NEEDS TO BE CHANGED #
            **/
            if (days) {
                let date = new Date();
                date.setTime(date.getTime() + (10 * 1000));
                console.log(date);
                expires = "; expires=" + date.toUTCString();
            }

            document.cookie = name + "=" + value + expires + "; path=/";
            storage.setItem('age_check', document.cookie);

            modal.classList.add('closed');
        }

        // read from cookie * return null if not present *
        function requestCookie(name) {
            console.log('READCOOKIE');

            let ageCookie = localStorage.getItem(name);

            if (ageCookie == null) {
                console.log('No such cookie...');
            } else {
                console.log(ageCookie);
            }
        }

        /**
         *** ONLY FOR DEBUGGING PURPOSES ***
         *      Delete cookie
         */
        function deleteLocalStorage() {
            localStorage.clear();
        }

        function deleteCookie(name) {
            let ageCookie = localStorage.getItem(name);

            if (ageCookie == null) {
                console.log('No cookie saved');
            }

            localStorage.removeItem(ageCookie);
        }
    </script>
</div>
