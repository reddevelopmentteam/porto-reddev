<nav
    x-data="{ mobileMenu: false }"
    class="w-full max-w-[90rem] relative z-50"
>
    <!-- LEFT NAV -->
    <section
        class="p-2 md:rounded-l-4xl md:max-w-[79rem]
                right-diagonal glass md:bg-glass/40"
    >
        <div class="flex items-center justify-between gap-3 px-3 md:px-6">

            <!-- LOGO -->
            <a href="#">
                @if ($setting?->logo)
                    <img
                        src="{{ Storage::url($setting->logo) }}"
                        width="36"
                        height="36"
                        alt="logo red dev"
                    >
                @endif
            </a>

            <!-- DESKTOP MENU -->
            <div
                class="hidden w-full md:flex
                        items-center justify-center
                        gap-8 font-semibold"
            >
                @foreach (['work', 'tech stack', 'team'] as $menu)
                    <a
                        href="#{{ $menu }}"
                        class="rounded-xl px-4 py-2
                                hover:bg-gray-800/50
                                active:scale-95
                                font-inter capitalize
                                transition-all"
                    >
                        {{ $menu }}
                    </a>
                @endforeach
            </div>

            <!-- MOBILE HAMBURGER -->
            <button
                type="button"
                @click="mobileMenu = true"
                class="md:hidden
                        flex items-center justify-center
                        w-10 h-10
                        rounded-xl
                        border border-white/10
                        bg-card/40
                        active:scale-95
                        transition"
                aria-label="Open menu"
            >
                <iconify-icon
                    icon="lucide:menu"
                    width="26"
                    height="26"
                ></iconify-icon>
            </button>
        </div>
    </section>

    <!-- RIGHT NAV DESKTOP -->
    <a
        href="#contact"
        class="group hidden md:block"
    >
        <section
            class="absolute right-3 top-0
                    rounded-r-4xl w-52
                    left-diagonal bg-primary
                    transition-all duration-200
                    group-hover:scale-[1.05]
                    active:scale-95
                    group-hover:bg-white
                    p-4"
        >
            <div class="center-layout">
                <p
                    class="text-white
                            group-hover:text-primary
                            transition-all duration-200
                            font-bold font-inter"
                >
                    Let’s Talk
                </p>
            </div>
        </section>
    </a>


    <!-- =============================== -->
    <!-- MOBILE SIDEBAR -->
    <!-- =============================== -->

    <!-- DARK OVERLAY -->
    <div
        x-show="mobileMenu"
        x-cloak
        @click="mobileMenu = false"
        x-transition.opacity.duration.300ms
        class="fixed inset-0 z-[60]
                bg-black/60
                backdrop-blur-sm
                md:hidden"
    ></div>


    <!-- SIDEBAR -->
    <aside
        x-show="mobileMenu"
        x-cloak
        @keydown.escape.window="mobileMenu = false"

        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"

        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"

        class="fixed top-0 right-0
                z-[70]
                w-[80%] max-w-xs
                h-dvh
                bg-glass/60
                backdrop-blur-2xl
                border-l border-white/10
                shadow-2xl
                p-5
                md:hidden"
    >
        <!-- SIDEBAR HEADER -->
        <div class="flex items-center justify-between">

            <!-- LOGO -->
            <div class="flex items-center gap-3">
                @if ($setting?->logo)
                    <img
                        src="{{ Storage::url($setting->logo) }}"
                        width="36"
                        height="36"
                        alt="logo red dev"
                    >
                @endif

                <p class="font-bold font-inter">
                    RED Development
                </p>
            </div>

            <!-- CLOSE BUTTON -->
            <button
                type="button"
                @click="mobileMenu = false"
                class="flex items-center justify-center
                        w-10 h-10
                        rounded-xl
                        bg-white/5
                        border border-white/10
                        hover:bg-white/10
                        active:scale-95
                        transition"
            >
                <iconify-icon
                    icon="lucide:x"
                    width="24"
                    height="24"
                ></iconify-icon>
            </button>

        </div>


        <!-- MENU -->
        <div
            class="flex flex-col gap-2 mt-10
                    font-inter font-semibold"    
        >
            @foreach (['work', 'tech stack', 'team'] as $menu)
                <a
                    href="#{{ $menu }}"
                    @click="mobileMenu = false"
                    class="flex items-center
                            px-4 py-3
                            rounded-xl
                            capitalize
                            hover:bg-white/5
                            active:scale-[0.98]
                            transition"
                >
                    {{ $menu }}
                </a>
            @endforeach
        </div>


        <!-- LET'S TALK -->
        <a
            href="#contact"
            @click="mobileMenu = false"
            class="absolute bottom-6 left-5 right-5
                    flex items-center justify-center
                    gap-2
                    bg-primary
                    rounded-xl
                    px-5 py-3
                    font-inter font-bold
                    text-white
                    active:scale-95
                    transition"
        >
            <span>Let’s Talk</span>

            <iconify-icon
                icon="lucide:arrow-up-right"
                width="20"
                height="20"
            ></iconify-icon>
        </a>
    </aside>
</nav>
