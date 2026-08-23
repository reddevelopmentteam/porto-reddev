<section
    class="rounded-2xl border border-card bg-card/20 p-2 glass"
    data-aos="fade-up"
    data-aos-duration="800"
    data-aos-delay="250"
>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
        @foreach ($this->contacts as $contact)
            <div
                class="p-5"
                data-aos="fade-up"
                data-aos-duration="700"
                data-aos-delay="{{ 350 + (($loop->index % 3) * 150) }}"
                data-aos-easing="ease-out-cubic"
            >
                {{-- Icon --}}
                <div
                    class="text-5xl text-primary"
                    data-aos="zoom-in"
                    data-aos-duration="500"
                    data-aos-delay="{{ 450 + (($loop->index % 3) * 150) }}"
                >
                    <iconify-icon
                        icon="{{ $contact->icon }}"
                    ></iconify-icon>
                </div>

                {{-- Information --}}
                <div
                    class="border-b border-gray-500/40 pb-4
                           sm:border-r sm:border-b-0 sm:pr-5
                           {{ $loop->last ? 'sm:border-r-0' : '' }}"
                >
                    <h3 class="text-xl font-semibold text-white">
                        {{ $contact->title }}
                    </h3>

                    <p class="mt-2 h-12 w-40 break-all text-sm text-gray-300">
                        {{ $contact->name }}
                    </p>
                </div>

                {{-- Contact link --}}
                <a
                    href="{{ $contact->link }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Open {{ $contact->title }}"
                    class="group mt-2 inline-flex"
                >
                    <iconify-icon
                        icon="material-symbols:arrow-forward-rounded"
                        width="28"
                        height="28"
                        class="text-primary transition-all duration-200
                                group-hover:translate-x-1
                                group-hover:scale-110
                                group-hover:text-white
                                group-active:scale-95"
                    ></iconify-icon>
                </a>
            </div>
        @endforeach
    </div>
</section>