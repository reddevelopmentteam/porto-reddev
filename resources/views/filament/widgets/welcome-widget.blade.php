<x-filament-widgets::widget class="welcome-widget">
    <section class="welcome-card">
        <div class="welcome-copy">
            <span class="welcome-eyebrow">RED DEVELOPMENT · ADMIN PANEL</span>
            <h2 >Welcome Back, {{ $name }}.</h2>
            <p>Manage your portfolio content with ease.</p>
        </div>

        <div class="welcome-mark" aria-hidden="true">
            <img src="{{ asset('images/red-logo.svg') }}" alt="">
        </div>
    </section>
</x-filament-widgets::widget>
