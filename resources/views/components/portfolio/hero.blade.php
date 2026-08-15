<section class="center-layout h-[48rem]">
    <div class="mt-10 flex flex-col gap-5" >
        <!-- text hero -->
        <div class="text-center font-display font-bold text-6xl flex flex-col space-y-5" >
            <h1>We Build</h1>
            <div class="flex justify-center" >
                <h1 class="bg-white text-black">Digital Product</h1>
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