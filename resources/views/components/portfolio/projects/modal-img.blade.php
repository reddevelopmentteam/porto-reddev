<!-- Modal -->
<div
    x-show="open"
    x-cloak
    @keydown.escape.window="close()"
    class="fixed inset-0 z-[999] bg-black/70 backdrop-blur-sm
            flex items-center justify-center p-4"
>
    <!-- Modal Container -->
    <div
        @click.outside="close()"
        class="relative w-full max-w-5xl
                bg-[#1c1c1f]
                border border-white/10
                rounded-2xl
                p-4 md:p-6 md:pt-20
                shadow-2xl"
    >

        <!-- Close -->
        <button
            type="button"
            @click="close()"
            class="absolute top-5 right-7 z-30
                    w-10 h-10
                    rounded-full
                    text-white
                    flex items-center justify-center
                    transition"
        >
            <iconify-icon
                icon="material-symbols:close"
                width="24"
                height="24"
            />
        </button>

        <!-- Image -->
        <div class="relative flex items-center justify-center">

            <img
                :src="images[current]"
                alt="Project preview"
                class="max-h-[75vh] w-full
                        object-contain
                        rounded-xl"
            >

        </div>

        <!-- Navigation -->
        <div class="flex items-center justify-center gap-6 mt-5">

            <!-- Previous -->
            <button
                type="button"
                @click="prev()"
                class="text-white/70 hover:text-white
                        transition"
            >
                <iconify-icon
                    icon="material-symbols:arrow-back"
                    width="24"
                    height="24"
                />
            </button>

            <!-- Counter -->
            <div
                class="bg-primary
                    text-white
                    px-5 py-3
                    rounded-xl
                    min-w-16
                    text-center"
            >
                <span x-text="current + 1"></span>
                <span>/</span>
                <span x-text="images.length"></span>
            </div>

            <!-- Next -->
            <button
                type="button"
                @click="next()"
                class="text-white/70 hover:text-white
                        transition"
            >
                <iconify-icon
                    icon="material-symbols:arrow-forward"
                    width="24"
                    height="24"
                />
            </button>
        </div>
    </div>
</div>