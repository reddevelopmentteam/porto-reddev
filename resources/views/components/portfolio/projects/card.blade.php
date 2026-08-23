@foreach ($this->projects as $project)
    <section
        class="mt-6 w-full max-w-sm rounded-2xl border border-card
                bg-card/20 p-4 shadow-md md:mt-10 md:w-sm"
        data-aos="fade-up"
        data-aos-duration="800"
        data-aos-delay="{{ ($loop->index % 3) * 150 }}"
        data-aos-easing="ease-out-cubic"
        data-aos-once="true"
    >
        {{-- Image wrapper --}}
        <div class="group relative overflow-hidden rounded-2xl">

            {{-- Image --}}
            <img
                src="{{ Storage::url($project->img[0]) }}"
                alt="{{ $project->name }}"
                width="1920"
                height="930"
                loading="lazy"
                decoding="async"
                class="h-72 w-full rounded-2xl border-2 border-card object-cover
                        transition-transform duration-500 ease-out
                        group-hover:scale-105"
            >

            {{-- Hover overlay --}}
            <button
                type="button"
                @click="show(@js(
                    collect($project->img)
                        ->map(fn ($img) => Storage::url($img))
                        ->values()
                ))"
                class="center-layout absolute inset-0 cursor-pointer
                        bg-black/65 opacity-0 backdrop-blur-xs
                        transition-all duration-500 ease-in-out
                        group-hover:opacity-100"
            >
                <span
                    class="center-layout translate-y-3 gap-2 font-medium
                            text-white opacity-0
                            transition-all duration-500
                            group-hover:translate-y-0
                            group-hover:opacity-100"
                >
                    View Image

                    <iconify-icon
                        icon="material-symbols:visibility-outline"
                        width="16"
                        height="16"
                    ></iconify-icon>
                </span>
            </button>
        </div>

        {{-- Content --}}
        <div class="mt-4 flex-col space-y-2">
            <h1 class="text-xl font-bold capitalize text-white">
                {{ $project->name }}
            </h1>

            <div class="line-clamp-2 h-10 text-sm text-gray-300">
                {{ $project->desc }}
            </div>

            {{-- Skills --}}
            <section class="mt-2 mb-4 flex items-center justify-start gap-2">
                @foreach ($project->skills as $tech)
                    <div class="group/tech relative">
                        <div
                            class="center-layout h-8 w-10 rounded-full
                                    border border-gray-700 bg-card/40
                                    transition-all duration-300
                                    hover:-translate-y-1
                                    hover:border-primary/60
                                    hover:bg-primary/10"
                        >
                            <iconify-icon
                                icon="{{ $tech->icon }}"
                                width="16"
                                height="16"
                            ></iconify-icon>
                        </div>

                        {{-- Tooltip --}}
                        <div
                            class="invisible absolute top-full left-1/2 z-50 mt-2
                                    -translate-x-1/2 translate-y-1
                                    whitespace-nowrap rounded-md border
                                    border-gray-700 bg-black/90 px-2 py-1
                                    text-xs text-white opacity-0
                                    transition-all duration-200
                                    group-hover/tech:visible
                                    group-hover/tech:translate-y-0
                                    group-hover/tech:opacity-100"
                        >
                            {{ $tech->name }}
                        </div>
                    </div>
                @endforeach
            </section>

            {{-- View project --}}
            @if ($project->link)
                <div class="flex justify-start">
                    <a
                        href="{{ $project->link }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex items-center gap-1 text-sm text-primary
                                transition-all duration-200
                                hover:translate-x-1 hover:text-white
                                active:scale-95"
                    >
                        View project

                        <iconify-icon
                            icon="material-symbols:arrow-outward"
                            width="20"
                            height="20"
                        ></iconify-icon>
                    </a>
                </div>
            @endif
        </div>
    </section>
@endforeach