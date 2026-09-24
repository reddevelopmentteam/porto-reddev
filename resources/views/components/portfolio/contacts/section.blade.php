<section
    class="center-layout px-5 md:px-10"
    id="contact"
>
    <div class="grid w-full max-w-7xl grid-cols-1 gap-8 md:grid-cols-2 md:gap-10">

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
                        OUR CONTACT
                    </p>

                    <div class="w-24 border-[0.5px] border-primary"></div>
                </div>
            </section>

            {{-- Main text --}}
            <section class="mt-2 flex flex-col gap-8">
                <h1
                    class="w-full max-w-md font-display text-3xl font-bold
                           leading-tight md:w-[30rem] md:text-5xl"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="200"
                >
                    Let's build something

                    <span
                        class="inline-block text-primary"
                        data-aos="zoom-in"
                        data-aos-duration="600"
                        data-aos-delay="400"
                    >
                        together
                    </span>.
                </h1>

                <div class="flex items-end">
                    <p
                        class="max-w-xs text-sm text-gray-300 md:w-[15rem]"
                        data-aos="fade-up"
                        data-aos-duration="800"
                        data-aos-delay="350"
                    >
                        Have an idea, project, or something you'd like to
                        build? Let's talk.
                    </p>
                </div>
            </section>
        </div>

        {{-- Contact content --}}
        <div
            data-aos="fade-left"
            data-aos-duration="900"
            data-aos-delay="300"
        >
            <x-portfolio.contacts.content />
        </div>
    </div>
</section>