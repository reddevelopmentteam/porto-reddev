<section
    class="center-layout px-5 md:px-10"
    id="tech-stack"
>
    <div class="flex w-full max-w-7xl flex-col">

        {{-- Container heading --}}
        <div>
            {{-- Small title --}}
            <section class="flex justify-start">
                <div
                    class="flex items-center justify-start gap-3"
                    data-aos="fade-right"
                    data-aos-duration="700"
                    data-aos-delay="100"
                >
                    <p class="font-inter text-xs font-bold text-primary">
                        OUR TECH STACK
                    </p>

                    <div class="w-24 border-[0.5px] border-primary"></div>
                </div>
            </section>

            {{-- Main heading and description --}}
            <section class="mt-2 flex flex-col gap-4 md:flex-row md:gap-8">
                <h1
                    class="w-full max-w-xs font-display text-3xl font-bold
                            leading-tight md:text-5xl"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="200"
                >
                    What we build

                    <span
                        class="inline-block text-primary"
                        data-aos="zoom-in"
                        data-aos-duration="600"
                        data-aos-delay="400"
                    >
                        with
                    </span>.
                </h1>

                <div class="flex items-end">
                    <p
                        class="max-w-sm text-sm text-gray-300 md:w-[335px]"
                        data-aos="fade-left"
                        data-aos-duration="800"
                        data-aos-delay="350"
                    >
                        We use modern tools and technologies to design and
                        develop digital products.
                    </p>
                </div>
            </section>
        </div>

        {{-- Tech stack content --}}
        <div
            data-aos="fade-up"
            data-aos-duration="900"
            data-aos-delay="450"
        >
            <x-portfolio.teches.content />
        </div>
    </div>
</section>