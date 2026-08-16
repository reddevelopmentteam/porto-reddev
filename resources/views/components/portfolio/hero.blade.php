<section class="center-layout h-[48rem]">
    <div class="mt-10 flex flex-col gap-5" >
        <!-- text hero -->
        <div class="text-center font-display font-bold text-6xl flex flex-col space-y-5" >
            <h1>We Build</h1>
            <div class="flex justify-center">
                {{-- Rotating Text --}}
                <div class="flex justify-center">
                    <div class="h-[4.5rem] min-w-[20rem] overflow-hidden rounded-lg bg-white text-black">
                        <div
                            id="heroWords"
                            class="flex flex-col"
                        >
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
                            @foreach ($heroWords as $word)
                                <h1 class="flex h-[4.5rem] shrink-0 items-center justify-center whitespace-nowrap px-2">
                                    {{ $word }}
                                </h1>
                            @endforeach

                            {{-- Duplicate words untuk infinite loop --}}
                            @foreach ($heroWords as $word)
                                <h1 class="flex h-[4.5rem] shrink-0 items-center justify-center whitespace-nowrap px-2">
                                    {{ $word }}
                                </h1>
                            @endforeach
                        </div>
                    </div>
                </div>

            <h1>
            </div>
            <h1>that move businesses forward<span class="text-primary" >.</span></h1>
            <div class="flex justify-center font-inter">
                <p class="font-normal text-sm w-[60%]" >We design and develop websites, digital products, and software that are built to perform and grow.</p>
            </div>
        </div>
        <!-- feature -->
        <div class="center-layout mt-10">
            <section class="grid grid-cols-3 w-[70%] gap-10 ">
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
                    <div class="pr-5 border-r border-gray-500/40 last:border-0">
                        <div class="mb-1 text-4xl text-primary">
                            {{-- icon --}}
                            <iconify-icon icon="{{$feature['icon']}}" />
                        </div>

                        <h3 class="text-lg font-semibold text-white">
                            {{ $feature['title'] }}
                        </h3>

                        <p class="mt-2 text-sm w-48 text-gray-300">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const heroWords = document.getElementById('heroWords');

        if (!heroWords) return;

        const wordHeight = 4.5; // rem
        const wordCount = 5;
        const interval = 2500; // 1.5 detik
        const transitionDuration = 700; // 0.7 detik

        let currentIndex = 0;

        const moveNext = () => {
            currentIndex++;

            heroWords.style.transition = `
                transform ${transitionDuration}ms
                cubic-bezier(0.77, 0, 0.175, 1)
            `;

            heroWords.style.transform = `
                translateY(-${currentIndex * wordHeight}rem)
            `;

            /*
             * Ketika sudah sampai:
             *
             * Creative Technology
             * ↓
             * Digital Product (duplicate)
             *
             * kita reset secara instant ke Digital Product pertama.
             *
             * Tidak ada animasi naik yang terlihat.
             */
            if (currentIndex === wordCount) {
                setTimeout(() => {
                    heroWords.style.transition = 'none';

                    heroWords.style.transform = `
                        translateY(-${wordCount * wordHeight}rem)
                    `;

                    currentIndex = 0;

                    /*
                     * Force browser untuk menerapkan posisi.
                     */
                    heroWords.offsetHeight;

                    /*
                     * Set kembali transform ke awal secara instant.
                     * Karena posisi visualnya sama-sama Digital Product,
                     * user tidak akan melihat lompatan.
                     */
                    heroWords.style.transform = `
                        translateY(0)
                    `;
                }, transitionDuration);
            }
        };

        setInterval(moveNext, interval);
    });
</script>
