<section class="center-layout min-h-screen px-5 py-36 md:h-[48rem] md:px-10 md:py-0">
    <div class="flex flex-col gap-5 md:mt-10">

        <!-- text hero -->
        <div class="flex flex-col space-y-5 text-center font-display text-3xl md:text-6xl font-bold">

            <h1>We Build</h1>

            <!-- Rotating Text -->
            <div class="md:flex justify-center">
                <div
                    id="text-scroll-wrapper"
                    class="relative h-[4.5rem] w-full md:max-w-[20rem] md:min-w-[40rem] overflow-hidden rounded-lg"
                >
                    <div id="heroWords">

                        @php
                            $heroWords = [
                                'Digital Product',
                                'Software Solution',
                                'Web Experience',
                                'Digital Platform',
                                'Creative Technology',
                            ];
                        @endphp

                        {{-- Original words --}}
                        @foreach ($heroWords as $index => $word)
                            <div
                                class="hero-word "
                                data-index="{{ $index }}"
                            >
                                <div class="hero-word-bg"></div>
                            </div>
                        @endforeach

                        {{-- Duplicate words --}}
                        @foreach ($heroWords as $index => $word)
                            <div
                                class="hero-word w-20  md:w-96 "
                                data-index="{{ $index }}"
                            >
                                <div class="hero-word-bg"></div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <h1 class="max-w-sm px-2 md:w-auto md:max-w-none text-center" >
                    that move businesses forward<span class="md:text-primary">.</span>
                </h1>
            </div>

            <div class="flex justify-center font-inter">
                <p class="max-w-sm px-2 text-sm font-normal md:w-[60%] md:max-w-none">
                    We design and develop websites, digital products, and
                    software that are built to perform and grow.
                </p>
            </div>

        </div>

        <!-- feature -->
        <div class="center-layout mt-10">

            <section class="grid w-full max-w-sm grid-cols-2 gap-6 md:w-[70%] md:max-w-none md:grid-cols-3 md:gap-10">

                @php
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

                @foreach ($features as $feature)
                    <div class="border-b border-gray-500/40 pb-6 last:border-0 md:border-r md:border-b-0 md:pb-0 md:pr-5">

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


<svg
    width="0"
    height="0"
    class="absolute"
    aria-hidden="true"
>
    <defs>

        @foreach ($heroWords as $index => $word)

            <mask
                id="heroMask{{ $index }}"
                maskUnits="userSpaceOnUse"
                maskContentUnits="userSpaceOnUse"
                x="0"
                y="0"
                width="320"
                height="74"
            >
                <rect
                    class="hero-mask-rect"
                    x="0"
                    y="0"
                    width="320"
                    height="74"
                    fill="white"
                />

                <text
                    class="hero-mask-text"
                    x="161"
                    y="57"
                    text-anchor="middle"
                    font-family="Space Grotesk, sans-serif"
                    font-size="60"
                    font-weight="700"
                    fill="black"
                >{{ $word }}</text>
            </mask>

        @endforeach

    </defs>
</svg>


<style>
    .hero-word {
        position: relative;

        width: 100%;
        height: 4.5rem;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;
        overflow: hidden;
    }

    .hero-word-bg {
        position: absolute;

        top: -1px;
        right: 0;
        bottom: -1px;
        left: 0;

        background: white;

        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;

        -webkit-mask-position: center;
        mask-position: center;

        -webkit-mask-size: 100% calc(100% + 2px);
        mask-size: 100% calc(100% + 2px);
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

        will-change: transform;

        flex-shrink: 0;
    }

    .hero-mask-text {
    font-size: 40px;
    }


    @media (min-width: 768px) {
        .hero-mask-text {
            font-size: 60px;
        }

    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', () => {

        const heroWords = document.getElementById('heroWords');
        const wrapper = document.getElementById('text-scroll-wrapper');

        if (!heroWords || !wrapper) return;

        const items = heroWords.querySelectorAll('.hero-word');

        const wordHeight = 4.5;
        const wordCount = 5;

        const interval = 2500;
        const transitionDuration = 700;

        let currentIndex = 0;


        const updateMasks = () => {
            const width = wrapper.getBoundingClientRect().width;

            items.forEach((item) => {
                const index = item.dataset.index;
                const mask = document.getElementById(`heroMask${index}`);

                if (!mask) return;

                const rect = mask.querySelector('.hero-mask-rect');
                const text = mask.querySelector('.hero-mask-text');

                mask.setAttribute('width', width);
                mask.setAttribute('height', 74);

                rect.setAttribute('width', width);
                rect.setAttribute('height', 74);

                text.setAttribute('x', width / 2);
            });
        };


        updateMasks();

        window.addEventListener(
            'resize',
            updateMasks
        );


        const moveNext = () => {

            currentIndex++;

            heroWords.style.transition = `
                transform ${transitionDuration}ms
                cubic-bezier(0.77, 0, 0.175, 1)
            `;

            heroWords.style.transform = `
                translateY(-${currentIndex * wordHeight}rem)
            `;


            if (currentIndex === wordCount) {

                setTimeout(() => {

                    heroWords.style.transition = 'none';

                    heroWords.style.transform = `
                        translateY(-${wordCount * wordHeight}rem)
                    `;

                    currentIndex = 0;

                    heroWords.offsetHeight;

                    heroWords.style.transform =
                        'translateY(0)';

                }, transitionDuration);

            }
        };


        setInterval(
            moveNext,
            interval
        );

    });
</script>
