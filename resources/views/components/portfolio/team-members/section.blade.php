<section class="center-layout" id="team" >
    <div class="flex flex-col w-7xl">
        <!-- container brand -->
        <div>
            <!-- title -->
            <section class="flex justify start" >
                <div class="flex justify-start items-center gap-3" >
                    <p class="text-primary text-xs font-bold font-inter">OUR STACK</p>
                    <div class="border-[0.5px] border-primary w-24"></div>
                </div>
            </section>
            <!-- kata kata -->
            <section class="flex justify-start gap-8 mt-2">
                <h1 class="text-white font-bold text-5xl font-display w-96 leading-tight">
                    People behind the <span class="text-primary" >work</span>.
                </h1>
                <div class="flex items-end"> 
                    <p class="text-gray-300 text-sm w-[335px] " >                        
                        A small team of designers and developers building digital products with purpose.
                    </p>
                </div>
            </section>
        </div>
        
        <!-- content -->
        <div class="grid gap-5 grid-cols-1 md:grid-cols-4">
            <x-portfolio.team-members.card/>
        </div>
    </div>
</section>