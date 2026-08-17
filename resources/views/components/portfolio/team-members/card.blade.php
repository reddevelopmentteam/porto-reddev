@foreach ($this->teamMembers as $team)
    <section
        class="group relative overflow-hidden
                bg-card/20 border glass border-card
                rounded-2xl p-4 mt-10 shadow-md"
    >

        <!-- FOTO -->
        <div class="relative z-0 overflow-hidden rounded-2xl">
            <img
                src="{{ Storage::url($team->img) }}"
                alt="team foto"
                class="rounded-2xl border-2 border-card w-full h-72 object-cover"
            >
        </div>

        <!-- NAMA + ROLE -->
        <div
            class="relative z-20 mt-4
                    flex flex-col space-y-2
                    transition-transform duration-700
                    ease-in
                    group-hover:-translate-y-72"
        >
            <h1 class="text-xl font-bold text-white capitalize h-16">
                {{ $team->name }}
            </h1>

            <div class="flex items-center gap-2">
                @foreach ($team->roles as $role)
                    <p
                        class="text-gray-300 text-sm line-clamp-2
                                px-2 border-r last:border-0
                                transition-colors duration-700
                                group-hover:text-white"
                    >
                        {{ $role->name }}
                    </p>
                @endforeach
            </div>
        </div>

        <!-- OVERLAY MERAH -->
        <div
            class="absolute inset-0 z-10 overflow-hidden
                    bg-[linear-gradient(40deg,var(--color-primary),var(--color-primary)_99%,var(--color-primary))]
                    rounded-2xl
                    translate-y-full
                    transition-transform duration-700
                    ease-in
                    group-hover:translate-y-0"
        >

            <!-- GRID -->
            <div
                class="pointer-events-none absolute inset-x-0 bottom-0 h-1/2
                        opacity-70
                        [background-image:linear-gradient(to_right,rgba(255,255,255,0.12)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.12)_1px,transparent_1px)]
                        [background-size:20px_20px]
                        [mask-image:linear-gradient(to_bottom,transparent,black_35%,black_100%)]"
            ></div>

            <!-- PRIMARY SOLID BAWAH -->
            <div
                class="pointer-events-none absolute inset-x-0 -left-10 -top-7
                        size-36 rounded-full bg-red-400 blur-3xl"
            ></div>

            <!-- DESCRIPTION + PORTFOLIO -->
            <div
                class="absolute inset-x-0 bottom-0 z-20
                        p-6
                        translate-y-8
                        opacity-0
                        transition-all duration-500
                        ease-out
                        group-hover:translate-y-0
                        group-hover:opacity-100
                        group-hover:delay-[700ms]"
            >

                <p class="text-sm leading-relaxed text-white/80">
                    {{ $team->desc }}
                </p>

                @if ($team->link)
                    <a
                        href="{{ $team->link }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-4 inline-flex items-center gap-2
                                text-sm font-semibold text-white
                                transition-all duration-300
                                hover:gap-3"
                    >
                        View Portfolio

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 5h6m0 0v6m0-6L10 14"
                            />
                        </svg>
                    </a>
                @endif

            </div>

        </div>

    </section>
@endforeach