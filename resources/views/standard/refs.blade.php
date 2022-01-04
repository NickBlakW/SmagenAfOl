<div class="flex-item column">
    <div class="option-box">
        <div class="option-link">
            <a href="{{ url()->previous() }}" class="option">Tilbage</a>
        </div>

        <div class="option-link">
            <a href="{{ route('home') }}" class="option">Forside</a>
        </div>

        <div class="option-link">
            <a href="{{ route('udforsk') }}" class="option">Udforsk</a>
        </div>

        <div class="option-link">
            <a href="{{ route('bryggeri') }}" class="option">Bryggerier</a>
        </div>

        <div class="option-link">
            <a href="{{ route('beertypes') }}" class="option">Øltyper</a>
        </div>
    </div>
</div>
