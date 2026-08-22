@foreach ($this->projects as $project)
    <section class="mt-6 w-full max-w-sm rounded-2xl border border-card bg-card/20 p-4 shadow-md md:mt-10 md:w-sm">

        <!-- Image Wrapper -->
        <div class="relative group overflow-hidden rounded-2xl">

            <div class="relative group overflow-hidden rounded-2xl">

                <!-- Image -->
                <img
                    src="{{ Storage::url($project->img[0]) }}"
                    alt="{{ $project->name }}"
                    width="1920"
                    height="930"
                    loading="lazy"
                    decoding="async"
                    class="rounded-2xl border-2 border-card w-full h-72 object-cover
                            transition-transform duration-500
                            group-hover:scale-105"
                >

                <!-- Hover Overlay -->
                <button
                    type="button"
                    @click="show(@js(
                        collect($project->img)
                            ->map(fn ($img) => Storage::url($img))
                            ->values()
                    ))"
                    class="absolute inset-0
                            bg-black/65
                            backdrop-blur-xs
                            center-layout
                            opacity-0 group-hover:opacity-100
                            transition-all duration-500 ease-in-out
                            cursor-pointer"
                        >
                    <span class="text-white font-medium center-layout gap-2">
                        View Image

                        <iconify-icon
                            icon="material-symbols:visibility-outline"
                            width="16"
                            height="16"
                        />
                    </span>
                </button>
            </div>
        </div>

        <!-- Content -->
        <div class="flex-col space-y-2 mt-4">

            <h1 class="text-xl font-bold text-white capitalize">
                {{ $project->name }}
            </h1>

            <div class="text-gray-300 text-sm line-clamp-2 h-10">
                {{ $project->desc }}
            </div>

            <!-- Badge -->
            <section class="flex justify-start items-center gap-2 mt-2 mb-4">
                @foreach ($project->skills as $tech)
                    <div class="relative group/tech">

                        <div class="bg-card/40 border border-gray-700 w-10 h-8 rounded-full center-layout">
                            <iconify-icon
                                icon="{{ $tech->icon }}"
                                width="16"
                                height="16"
                            />
                        </div>

                        <!-- Tooltip -->
                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full mt-2
                                px-2 py-1 rounded-md
                                bg-black/90 border border-gray-700
                                text-white text-xs whitespace-nowrap
                                opacity-0 invisible
                                group-hover/tech:opacity-100
                                group-hover/tech:visible
                                transition-all duration-200
                                z-50"
                        >
                            {{ $tech->name }}
                        </div>

                    </div>
                @endforeach
            </section>
            <!-- view project -->
            @if ($project->link)
                <div class="flex justify-start" >
                    <a href="{{ $project->link }}" target="_blank" class="text-primary text-sm flex items-center gap-1 transition-all duration-150 hover:text-white hover:scale-[1.01] active:scale-95" >View project <iconify-icon icon="material-symbols:arrow-outward" width="20" height="20" /></a>                
                </div>
            @endif
        </div>
    </section>
@endforeach
