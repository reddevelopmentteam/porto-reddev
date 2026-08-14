@php
    $setting = \App\Models\Setting::first();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="RED Development adalah studio web yang menyediakan jasa pembuatan website modern, portfolio profesional, dan template berkualitas menggunakan Laravel, Livewire, Filament, React, dan Tailwind CSS.">
        @if ($setting?->logo)
            <link
                rel="shortcut icon"
                href="{{ Storage::url($setting->logo) }}"
                type="image/x-icon"
            >
        @endif
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
    <body
        class="bg-img min-h-screen bg-cover text-white antialiased selection:bg-red-500/40">        

        <header>
            <x-portfolio.navbar />
        </header>
        <div>
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
