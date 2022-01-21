@if($popup)
    @if(session()->has('modal'))
        <div class="modal fade" tabindex="-1" id="popup">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-uppercase">{{ $popup }}</h4>
                    </div>
                    <div class="modal-body text-center">
                        <div>
                            <button class="link-button" id="confirm">Ja, jeg er over 18.</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let modal = document.getElementById('popup');
            let confirm = document.getElementById('confirm');

            confirm.onclick = function () {
                modal.style.display = 'none';
            }
        </script>
        {{ session()->forget('modal') }}
    @endif
@endif
