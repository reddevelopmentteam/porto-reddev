<section
    class="center-layout px-5 md:px-10"
    id="team"
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
                        OUR TEAM
                    </p>

                    <div class="w-24 border-[0.5px] border-primary"></div>
                </div>
            </section>

            {{-- Main heading and description --}}
            <section class="mt-2 flex flex-col gap-4 md:flex-row md:gap-8">
                <h1
                    class="w-full max-w-md font-display text-3xl font-bold
                           leading-tight md:text-5xl"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="200"
                >
                    People behind the

                    <span
                        class="inline-block text-primary"
                        data-aos="zoom-in"
                        data-aos-duration="600"
                        data-aos-delay="400"
                    >
                        work
                    </span>.
                </h1>

                <div class="flex items-end">
                    <p
                        class="max-w-sm text-sm text-gray-300 md:w-[335px]"
                        data-aos="fade-left"
                        data-aos-duration="800"
                        data-aos-delay="350"
                    >
                        A small team of designers and developers building
                        digital products with purpose.
                    </p>
                </div>
            </section>
        </div>

        {{-- Team cards --}}
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <x-portfolio.team-members.card />
        </div>
    </div>
</section>