<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="RED Development adalah studio web yang menyediakan jasa pembuatan website modern, portfolio profesional, dan template berkualitas menggunakan Laravel, Livewire, Filament, React, dan Tailwind CSS.">
        <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
        <title>{{ $title ?? config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- ioconify -->
        <script src="https://code.iconify.design/iconify-icon/3.0.1/iconify-icon.min.js"></script>
        {{-- Google Font: Poppins --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="style" >
        @livewireStyles
    </head>
    <body x-data="{ mobileOpen: false, scrolled: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
        class="bg-base text-white font-sans antialiased selection:bg-primary/40" >
                {{-- Navigation bar --}}
        <nav
            :class="scrolled ? 'bg-base/70 backdrop-blur-xl border-white/10 shadow-lg shadow-black/20' : 'bg-transparent border-transparent'"
            class="sticky top-0 z-50 w-full border-b transition-all duration-300">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
                {{-- Logo --}}
                <a href="#" class="flex items-center gap-2 text-xl font-bold tracking-tight">
                    <img src="{{ asset('favicon.svg') }}" class="w-10"  alt="">
                    <span>RED <span class="text-primary">Development</span></span>
                </a>

                {{-- Desktop Menu --}}
                <ul class="hidden items-center gap-10 text-sm font-medium text-white/80 md:flex">
                    <li><a href="#home" class="transition hover:text-white">Home</a></li>
                    <li><a href="#skills" class="transition hover:text-white">Skills</a></li>
                    <li><a href="#team" class="transition hover:text-white">Team</a></li>
                    <li><a href="#projects" class="transition hover:text-white">Projects</a></li>
                </ul>

                {{-- Desktop CTA --}}
                <a href="#projects"
                    class="hidden rounded-full bg-gradient-to-r from-primary to-accent px-5 py-2.5 text-sm font-semibold shadow-glow transition hover:scale-105 hover:shadow-glow-blue md:inline-block">
                    View Projects
                </a>

                {{-- Mobile menu toggle --}}
                <button
                    @click="mobileOpen = !mobileOpen"
                    type="button"
                    class="inline-flex items-center justify-center rounded-lg p-2 text-white/90 hover:bg-white/10 md:hidden"
                    aria-label="Toggle navigation menu"
                    :aria-expanded="mobileOpen">
                    <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="mobileOpen" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Mobile Menu --}}
            <div
                x-show="mobileOpen"
                x-cloak
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                @click.outside="mobileOpen = false"
                class="border-t border-white/10 bg-base/95 px-6 py-6 backdrop-blur-xl md:hidden">
                <ul class="flex flex-col gap-4 text-base font-medium text-white/85">
                    <li><a @click="mobileOpen = false" href="#home" class="block py-1">Home</a></li>
                    <li><a @click="mobileOpen = false" href="#skills" class="block py-1">Skills</a></li>
                    <li><a @click="mobileOpen = false" href="#team" class="block py-1">Team</a></li>
                    <li><a @click="mobileOpen = false" href="#projects" class="block py-1">Projects</a></li>
                </ul>
                <a @click="mobileOpen = false" href="#projects"
                    class="mt-6 block rounded-full bg-gradient-to-r from-primary to-accent px-5 py-3 text-center text-sm font-semibold shadow-glow">
                    View Projects
                </a>
            </div>
        </nav>
        <div>
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
