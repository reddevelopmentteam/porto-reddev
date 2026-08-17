@php
    $setting = \App\Models\Setting::first();
@endphp
<nav class="w-full max-w-[90rem] relative z-50">
    <!-- left nav -->
    <section class="p-2 rounded-l-4xl max-w-[79rem] right-diagonal glass bg-glass/40">
        <!-- logo -->
        <div class="absolute top-1/2 -translate-y-1/2 left-8" >
            <a href="#">
                @if ($setting?->logo)
                    <img src="{{ Storage::url($setting->logo) }}" width="36" height="36" alt="logo red dev">                    
                @endif
            </a>
        </div>
        <!-- nav menu -->
        <div class="center-layout gap-8 font-semibold">
            @foreach (['work', 'tech stack', 'team', 'process'] as $menu)
                <a href="#{{ $menu }}"
                    class="rounded-xl px-4 py-2 hover:bg-gray-800/50 active:scale-95 font-inter capitalize"
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