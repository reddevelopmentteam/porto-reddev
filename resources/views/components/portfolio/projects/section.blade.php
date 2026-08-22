<section class="center-layout px-5 md:px-10" id="work" >
    <div class="flex w-full max-w-7xl flex-col">
        <!-- container brand -->
        <div>
            <!-- title -->
            <section class="flex justify start" >
                <div class="flex justify-start items-center gap-3" >
                    <p class="text-primary text-xs font-bold font-inter">OUR WORK</p>
                    <div class="border-[0.5px] border-primary w-24"></div>
                </div>
            </section>
            <!-- kata kata -->
            <section class="mt-2 flex flex-col gap-4 md:flex-row md:gap-8">
                <h1 class="w-full max-w-md text-3xl font-bold font-display leading-tight md:text-5xl">
                    Digital products built to <span class="bg-white text-black" >perform</span><span class="text-primary">.</span>
                </h1>
                <div class="flex items-end">
                    <p class="max-w-sm text-sm text-gray-300 md:w-[330px]" >
                        We help businesses and startups transform ideas into powerful digital products. Here are some of our <span class="text-white font-medium" >selected projects.</span>
                    </p>
                </div>
            </section>
        </div>
        <!-- card -->
        <div class="flex justify-center md:justify-start items-center">
            <div
                x-data="{
                    open: false,
                    images: [],
                    current: 0,
    
                    show(images) {
                        this.images = images;
                        this.current = 0;
                        this.open = true;
                        document.body.classList.add('overflow-hidden');
                    },
    
                    close() {
                        this.open = false;
                        document.body.classList.remove('overflow-hidden');
                    },
    
                    next() {
                        this.current = (this.current + 1) % this.images.length;
                    },
    
                    prev() {
                        this.current = (this.current - 1 + this.images.length) % this.images.length;
                    }
                }"
                class="grid w-full grid-cols-1 gap-5 md:grid-cols-3"
            >
                <x-portfolio.projects.card/>
                <x-portfolio.projects.modal-img/>
            </div>
        </div>
    </div>
</section>
