@php
    $setting = \App\Models\Setting::first();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="RED Development adalah studio web yang menyediakan jasa pembuatan website modern, portfolio profesional, dan template berkualitas menggunakan Laravel, Livewire, Filament, React, dan Tailwind CSS.">
        <link rel="preload" href="{{ asset('images/portfolio.webp') }}" as="image" type="image/webp" fetchpriority="high">
        @if ($setting?->logo)
            <link
                rel="shortcut icon"
                href="{{ Storage::url($setting->logo) }}"
                type="image/x-icon"
            >
        @endif
        <title>{{ $setting->title ?? config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"></noscript>
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
        @livewireStyles
    </head>
    <body
        class="bg-img min-h-screen bg-cover text-white antialiased selection:bg-red-500/40">        

        <header class="center-layout fixed top-3 w-full px-4 md:top-5 md:px-10 z-50" >
            <x-portfolio.navbar :setting="$setting" />
        </header>
        <main class="pb-20 min-h-screen">
            {{ $slot }}
        </main>

        <footer class="mt-20" >
            <x-portfolio.footer :setting="$setting" />
        </footer>

        @livewireScripts
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
        <script src="https://code.iconify.design/iconify-icon/3.0.1/iconify-icon.min.js" defer></script>
    </body>
</html>
