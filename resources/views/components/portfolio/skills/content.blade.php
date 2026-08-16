<style>
    .bg-icon {
        background-color: #18181B;
    }

    .marquee-wrapper {
        overflow: hidden;
        width: 100%;
    }

    .marquee-track {
        display: flex;
        width: max-content;
        will-change: transform;
    }

    .marquee-group {
        display: flex;
        gap: 1.5rem;
        padding-right: 1.25rem;
        flex-shrink: 0;
    }
</style>

<section
    class="relative w-full overflow-hidden bg-card/20 border glass border-card rounded-2xl py-5 px-0 mt-10 shadow-md"
>
    <div class="flex flex-col gap-y-6">

        <!-- TOP -->
        <div class="marquee-wrapper">
            <div
                id="marquee-left"
                class="marquee-track"
                data-speed="0.5"
                data-direction="left"
            >
                <div class="marquee-group">
                    @foreach ($this->skills as $skill)
                        @if ($loop->index <= 14)
                            <div class="shadow-md w-20 h-20 shrink-0 center-layout rounded-2xl bg-icon">
                                <iconify-icon
                                    icon="{{ $skill->icon }}"
                                    width="36"
                                    height="36"
                                />
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <!-- BOTTOM -->
        <div class="marquee-wrapper">
            <div
                id="marquee-right"
                class="marquee-track"
                data-speed="0.5"
                data-direction="right"
            >
                <div class="marquee-group">
                    @foreach ($this->skills as $skill)
                        @if ($loop->index >= 15)
                            <div class="shadow-md w-20 h-20 shrink-0 center-layout rounded-2xl bg-icon">
                                <iconify-icon
                                    icon="{{ $skill->icon }}"
                                    width="36"
                                    height="36"
                                />
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <!-- DARK BLUR LEFT -->
    <div
        class="pointer-events-none absolute inset-y-0 left-0 z-10
            w-24
            backdrop-blur-md
            bg-gradient-to-r
            from-black/80
            via-black/40
            to-transparent
            [mask-image:linear-gradient(to_right,black_0%,black_60%,transparent_100%)]
            [-webkit-mask-image:linear-gradient(to_right,black_0%,black_60%,transparent_100%)]">
    </div>

    <!-- DARK BLUR RIGHT -->
    <div
        class="pointer-events-none absolute inset-y-0 right-0 z-10
            w-24
            backdrop-blur-md
            bg-gradient-to-l
            from-black/80
            via-black/40
            to-transparent
            [mask-image:linear-gradient(to_left,black_0%,black_60%,transparent_100%)]
            [-webkit-mask-image:linear-gradient(to_left,black_0%,black_60%,transparent_100%)]">
    </div>

</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {

        function createMarquee(id) {
            const track = document.getElementById(id);

            if (!track) return;

            const original = track.querySelector('.marquee-group');

            if (!original) return;

            const direction = track.dataset.direction;
            const speed = parseFloat(track.dataset.speed) || 0.5;

            // Hapus clone lama jika ada
            track.querySelectorAll('.marquee-clone').forEach(el => el.remove());

            // Clone sampai memenuhi layar
            const wrapperWidth = track.parentElement.offsetWidth;
            const originalWidth = original.offsetWidth;

            let totalWidth = originalWidth;

            while (totalWidth < wrapperWidth + originalWidth) {
                const clone = original.cloneNode(true);
                clone.classList.add('marquee-clone');

                track.appendChild(clone);

                totalWidth += originalWidth;
            }

            let position;

            if (direction === 'left') {
                position = 0;
            } else {
                position = -originalWidth;
            }

            let lastTime = performance.now();

            function animate(currentTime) {

                const delta = currentTime - lastTime;
                lastTime = currentTime;

                // Normalisasi supaya speed konsisten
                const movement = speed * delta / 16.67;

                if (direction === 'left') {

                    position -= movement;

                    // Kalau sudah melewati 1 group,
                    // langsung kembali sebesar lebar group
                    if (Math.abs(position) >= originalWidth) {
                        position += originalWidth;
                    }

                } else {

                    position += movement;

                    if (position >= 0) {
                        position -= originalWidth;
                    }
                }

                track.style.transform = `translate3d(${position}px, 0, 0)`;

                requestAnimationFrame(animate);
            }

            requestAnimationFrame(animate);
        }

        createMarquee('marquee-left');
        createMarquee('marquee-right');

        // Recalculate ketika ukuran layar berubah
        let resizeTimer;

        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);

            resizeTimer = setTimeout(() => {
                createMarquee('marquee-left');
                createMarquee('marquee-right');
            }, 200);
        });

    });
</script>
