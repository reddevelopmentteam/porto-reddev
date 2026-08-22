<section>
    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-y-2 md:px-20 text-xs md:text-sm text-gray-400 inter">
        @if ( $setting?->copyright)
            <p>{{ $setting->copyright }}</p>
            @endif
        <section class="flex items-center gap-2 md:gap-4" >
            <p>Terms & Conditions</p>
            <p>Privacy Policy</p>
        </section>
    </div>
    <img src="{{ asset('images/red-footer.svg') }}" class="w-full mt-4" alt="" loading="lazy" decoding="async">
</section>
