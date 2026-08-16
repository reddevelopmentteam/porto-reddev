<section class="center-layout" id="work" >
    <div class="flex flex-col w-7xl">
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
            <section class="flex justify-start gap-8 mt-2">
                <h1 class="text-white font-bold text-5xl font-display w-96 leading-tight">
                    Digital products built to <span class="bg-white text-black" >perform</span><span class="text-primary">.</span>
                </h1>
                <div class="flex items-end"> 
                    <p class="text-gray-300 text-sm w-[330px] " >
                        We help businesses and startups transform ideas into powerful digital products. Here are some of our <span class="text-white" >selected projects.</span>
                    </p>
                </div>
            </section>
        </div>
        <!-- card -->
        
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
            class="grid grid-cols-3"
        >
            <x-portfolio.projects.card/>
            <x-portfolio.projects.modal-img/>
        </div>
    </div>
</section>