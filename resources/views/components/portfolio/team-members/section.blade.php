<section class="center-layout px-5 md:px-10" id="team" >
    <div class="flex w-full max-w-7xl flex-col">
        <!-- container brand -->
        <div>
            <!-- title -->
            <section class="flex justify start" >
                <div class="flex justify-start items-center gap-3" >
                    <p class="text-primary text-xs font-bold font-inter">OUR TEAM</p>
                    <div class="border-[0.5px] border-primary w-24"></div>
                </div>
            </section>
            <!-- kata kata -->
            <section class="mt-2 flex flex-col gap-4 md:flex-row md:gap-8">
                <h1 class="w-full max-w-md text-3xl font-bold font-display leading-tight md:text-5xl">
                    People behind the <span class="text-primary" >work</span>.
                </h1>
                <div class="flex items-end"> 
                    <p class="max-w-sm text-sm text-gray-300 md:w-[335px]" >
                        A small team of designers and developers building digital products with purpose.
                    </p>
                </div>
            </section>
        </div>
        
        <!-- content -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <x-portfolio.team-members.card/>
        </div>
    </div>
</section>
