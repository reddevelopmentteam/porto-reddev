@php
    $heroWords = [
        'Digital Product',
        'Software Solution',
        'Web Experience',
        'Digital Platform',
        'Creative Technology',
    ];

    $features = [
        [
            'icon' => 'material-symbols:code-xml-rounded',
            'title' => 'Clean Code',
            'description' => 'Scalable, maintainable, and future-ready.',
        ],
        [
            'icon' => 'material-symbols:check-circle-outline-rounded',
            'title' => 'Quality Focused',
            'description' => 'Pixel-perfect, tested, and reliable.',
        ],
        [
            'icon' => 'material-symbols:show-chart-outline-rounded',
            'title' => 'Business Driven',
            'description' => 'Solutions that solve problems and drive growth.',
        ],
    ];
@endphp

<section class="center-layout min-h-screen px-5 py-36 md:h-[48rem] md:px-10 md:py-0">
    <div class="flex flex-col gap-5 md:mt-10">

        {{-- Hero text --}}
        <div class="flex flex-col space-y-5 text-center font-display text-3xl font-bold md:text-6xl">

            <h1
                data-aos="fade-down"
                data-aos-duration="900"
                data-aos-delay="100"
            >
                We Build
            </h1>

            {{-- Rotating text --}}
            <div
                class="md:flex md:justify-center"
                data-aos="fade-up"
                data-aos-duration="900"
                data-aos-delay="250"
            >
                <div
                    id="text-scroll-wrapper"
                    class="relative h-[4.5rem] w-full overflow-hidden rounded-lg
                            md:min-w-[40rem] md:max-w-[40rem]"
                >
                    <div id="heroWords">

                        {{-- Original words --}}
                        @foreach ($heroWords as $index => $word)
                            <div
                                class="hero-word"
                                data-index="{{ $index }}"
                            >
                                <div class="hero-word-bg"></div>
                            </div>
                        @endforeach

                        {{-- Duplicate words untuk infinite loop --}}
                        @foreach ($heroWords as $index => $word)
                            <div
                                class="hero-word"
                                data-index="{{ $index }}"
                                aria-hidden="true"
                            >
                                <div class="hero-word-bg"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div
                class="flex justify-center"
                data-aos="fade-up"
                data-aos-duration="900"
                data-aos-delay="400"
            >
                <h1 class="max-w-sm px-2 text-center md:w-auto md:max-w-none">
                    that move businesses forward<span class="text-primary">.</span>
                </h1>
            </div>

            <div
                class="flex justify-center font-inter"
                data-aos="fade-up"
                data-aos-duration="900"
                data-aos-delay="550"
            >
                <p class="max-w-sm px-2 text-sm font-normal md:w-[60%] md:max-w-none">
                    We design and develop websites, digital products, and
                    software that are built to perform and grow.
                </p>
            </div>
        </div>

        {{-- Features --}}
        <div class="center-layout mt-10">
            <section class="grid w-full max-w-sm grid-cols-2 gap-6 md:w-[70%] md:max-w-none md:grid-cols-3 md:gap-10">
                @foreach ($features as $feature)
                    <div
                        class="border-b border-gray-500/40 pb-6 last:border-0
                               md:border-r md:border-b-0 md:pb-0 md:pr-5
                               md:last:border-r-0"
                        data-aos="fade-up"
                        data-aos-duration="800"
                        data-aos-delay="{{ 650 + ($loop->index * 150) }}"
                    >
                        <div class="mb-1 text-4xl text-primary">
                            <iconify-icon
                                icon="{{ $feature['icon'] }}"
                            ></iconify-icon>
                        </div>

                        <h3 class="text-lg font-semibold text-white">
                            {{ $feature['title'] }}
                        </h3>

                        <p class="mt-2 text-sm text-gray-300 md:w-48">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</section>

{{-- SVG masks --}}
<svg
    width="0"
    height="0"
    class="pointer-events-none absolute"
    aria-hidden="true"
>
    <defs>
        @foreach ($heroWords as $index => $word)
            <mask
                id="heroMask{{ $index }}"
                maskUnits="userSpaceOnUse"
                maskContentUnits="userSpaceOnUse"
                x="-2"
                y="-2"
                width="644"
                height="76"
            >
                <rect
                    class="hero-mask-rect"
                    x="-2"
                    y="-2"
                    width="644"
                    height="76"
                    fill="white"
                />

                <text
                    class="hero-mask-text"
                    x="320"
                    y="57"
                    text-anchor="middle"
                    dominant-baseline="auto"
                    font-family="Space Grotesk, sans-serif"
                    font-size="60"
                    font-weight="700"
                    fill="black"
                >
                    {{ $word }}
                </text>
            </mask>
        @endforeach
    </defs>
</svg>

<style>
    /*
     * Satu item memiliki tinggi yang sama dengan wrapper,
     * yaitu 4.5rem atau 72px pada ukuran font default.
     */
    .hero-word {
        position: relative;
        display: flex;
        width: 100%;
        height: 4.5rem;
        flex-shrink: 0;
        align-items: center;
        justify-content: center;

        /*
         * Jangan menggunakan overflow hidden di sini.
         * Background perlu keluar sedikit agar saling menutupi.
         */
        overflow: visible;
    }

    /*
     * Background dibuat lebih tinggi 4px.
     * Item sebelumnya dan berikutnya akan saling menutupi,
     * sehingga garis antarelemen tidak terlihat.
     */
    .hero-word-bg {
        position: absolute;
        top: -2px;
        right: 0;
        bottom: -2px;
        left: 0;

        background-color: white;

        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;

        -webkit-mask-position: center;
        mask-position: center;

        -webkit-mask-size: 100% calc(100% + 4px);
        mask-size: 100% calc(100% + 4px);

        /*
         * Membantu menghindari garis tipis akibat rendering GPU.
         */
        transform: translateZ(0);
        backface-visibility: hidden;
    }

    .hero-word[data-index="0"] .hero-word-bg {
        -webkit-mask-image: url("#heroMask0");
        mask-image: url("#heroMask0");
    }

    .hero-word[data-index="1"] .hero-word-bg {
        -webkit-mask-image: url("#heroMask1");
        mask-image: url("#heroMask1");
    }

    .hero-word[data-index="2"] .hero-word-bg {
        -webkit-mask-image: url("#heroMask2");
        mask-image: url("#heroMask2");
    }

    .hero-word[data-index="3"] .hero-word-bg {
        -webkit-mask-image: url("#heroMask3");
        mask-image: url("#heroMask3");
    }

    .hero-word[data-index="4"] .hero-word-bg {
        -webkit-mask-image: url("#heroMask4");
        mask-image: url("#heroMask4");
    }

    #heroWords {
        display: flex;
        flex-direction: column;
        flex-shrink: 0;

        transform: translate3d(0, 0, 0);
        will-change: transform;
        backface-visibility: hidden;
    }

    .hero-mask-text {
        font-size: 40px;
    }

    @media (min-width: 768px) {
        .hero-mask-text {
            font-size: 60px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        [data-aos] {
            transition-duration: 0ms !important;
        }

        #heroWords {
            transition: none !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        /*
         * Inisialisasi AOS
         */
        AOS.init({
            duration: 900,
            easing: 'ease-out-cubic',
            offset: 60,
            once: true,
            mirror: false,
        });

        const heroWordsElement = document.getElementById('heroWords');
        const wrapper = document.getElementById('text-scroll-wrapper');

        if (!heroWordsElement || !wrapper) {
            return;
        }

        const items = heroWordsElement.querySelectorAll('.hero-word');
        const wordCount = {{ count($heroWords) }};

        const intervalDuration = 2500;
        const transitionDuration = 700;

        let currentIndex = 0;
        let rotatingInterval = null;
        let resetTimeout = null;

        /*
         * Memperbarui ukuran SVG mask.
         *
         * clientWidth digunakan karena tidak terpengaruh
         * oleh transform milik AOS.
         */
        const updateMasks = () => {
            const width = wrapper.clientWidth;
            const height = wrapper.clientHeight;

            items.forEach((item) => {
                const index = item.dataset.index;
                const mask = document.getElementById(`heroMask${index}`);

                if (!mask) {
                    return;
                }

                const rect = mask.querySelector('.hero-mask-rect');
                const text = mask.querySelector('.hero-mask-text');

                /*
                 * Mask dan rect dibuat sedikit lebih besar
                 * untuk mencegah garis di bagian atas/bawah.
                 */
                mask.setAttribute('x', -2);
                mask.setAttribute('y', -2);
                mask.setAttribute('width', width + 4);
                mask.setAttribute('height', height + 4);

                rect.setAttribute('x', -2);
                rect.setAttribute('y', -2);
                rect.setAttribute('width', width + 4);
                rect.setAttribute('height', height + 4);

                text.setAttribute('x', width / 2);
                text.setAttribute('y', 57);
            });
        };

        /*
         * Mengambil tinggi aktual dalam pixel agar pergerakan
         * tidak menghasilkan posisi desimal dari rem.
         */
        const getItemHeight = () => {
            return wrapper.clientHeight;
        };

        const moveNext = () => {
            const itemHeight = getItemHeight();

            currentIndex++;

            heroWordsElement.style.transition = `
                transform ${transitionDuration}ms
                cubic-bezier(0.77, 0, 0.175, 1)
            `;

            heroWordsElement.style.transform = `
                translate3d(
                    0,
                    -${currentIndex * itemHeight}px,
                    0
                )
            `;

            /*
             * Ketika mencapai item duplicate pertama,
             * reset ke item original pertama tanpa animasi.
             */
            if (currentIndex === wordCount) {
                resetTimeout = window.setTimeout(() => {
                    heroWordsElement.style.transition = 'none';
                    heroWordsElement.style.transform =
                        'translate3d(0, 0, 0)';

                    currentIndex = 0;

                    /*
                     * Memaksa browser menyelesaikan reset
                     * sebelum animasi berikutnya.
                     */
                    heroWordsElement.offsetHeight;
                }, transitionDuration);
            }
        };

        const startRotation = () => {
            if (
                rotatingInterval ||
                window.matchMedia('(prefers-reduced-motion: reduce)').matches
            ) {
                return;
            }

            rotatingInterval = window.setInterval(
                moveNext,
                intervalDuration
            );
        };

        const stopRotation = () => {
            if (rotatingInterval) {
                window.clearInterval(rotatingInterval);
                rotatingInterval = null;
            }

            if (resetTimeout) {
                window.clearTimeout(resetTimeout);
                resetTimeout = null;
            }
        };

        updateMasks();
        startRotation();

        window.addEventListener('resize', () => {
            updateMasks();

            /*
             * Sesuaikan posisi setelah ukuran layar berubah.
             */
            const itemHeight = getItemHeight();

            heroWordsElement.style.transition = 'none';
            heroWordsElement.style.transform = `
                translate3d(
                    0,
                    -${currentIndex * itemHeight}px,
                    0
                )
            `;
        });

        /*
         * Hitung ulang setelah AOS selesai masuk.
         */
        document.addEventListener('aos:in', () => {
            window.requestAnimationFrame(updateMasks);
        });

        /*
         * Hentikan animasi ketika tab browser tidak aktif.
         */
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopRotation();
                return;
            }

            startRotation();
        });
    });
</script>