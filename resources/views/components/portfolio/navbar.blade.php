<nav class="w-full max-w-[90rem] relative"
    x-data="{ active: window.location.hash || '#home' }"
    x-init="
        window.addEventListener('hashchange', () => {
            active = window.location.hash || '#home'
    }"
>
    <!-- left nav -->
    <section class="p-2 rounded-l-4xl max-w-[79rem] right-diagonal navbar-glass bg-glass/40">
        <!-- logo -->
        <div class="absolute top-4 left-8" >
            <a href="#" wire:navigate >
                <img src="{{ asset('images/logo.svg') }}" alt="">
            </a>
        </div>
        <!-- nav menu -->
        <div class="center-layout gap-8 font-semibold">
            @foreach (['work', 'services', 'about', 'process'] as $menu)
                <a href="#{{ $menu }}" wire:navigatez
                    class="rounded-xl px-4 py-2 active:scale-95 font-inter capitalize"
                    :class="active === '#{{ $menu }}'
                    ? 'bg-gray-800/50'
                    : 'hover:bg-gray-800/50'"
                    >
                    {{ $menu }}
                </a>
                
            @endforeach
        </div>
    </section>
    <!-- right nav -->
    <section class="absolute right-3 top-0 rounded-r-4xl w-52 left-diagonal bg-primary p-4">
        <div class="center-layout">
            <p class="text-white font-bold font-inter">Let’s Talk</p>
        </div>
    </section>
</nav>