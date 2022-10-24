<section class="popup" id="response">
    <div class="response__wrapper">
        <h3>{!! $title !!}</h3>
        <div class="response__icon">
            <svg>
                <use xlink:href="../icons/svg/sprite.svg#{{ $icon }}"></use>
            </svg>
        </div>
        {!! $message !!}
    </div>
</section>
