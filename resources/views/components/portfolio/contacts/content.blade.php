<section class="bg-card/20 border glass border-card rounded-2xl p-2">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
        @foreach ( $this->contacts as $contact )
            <div class="p-5">
                
                <div class="text-5xl text-primary">
                    <iconify-icon
                        icon="{{ $contact->icon }}"
                    ></iconify-icon>
                </div>

                <div class="border-b border-gray-500/40 pb-4 sm:border-b-0 sm:border-r sm:pr-5 {{ $loop->last ? 'sm:border-r-0' : '' }}" >

                    <h3 class="text-xl font-semibold text-white">
                        {{$contact->title }}
                    </h3>
            
                    <p class="w-40 mt-2 break-all text-sm text-gray-300 h-12">
                        {{ $contact->name }}
                    </p>
                </div>
        
                <a href="{{ $contact->link }}" target="_blank">
                    <iconify-icon icon="material-symbols:arrow-forward-rounded" width="28" height="28" class="mt-2 text-primary transition-all duration-150 hover:text-white hover:scale-[1.10] active:scale-95" />
                </a>
                
            </div>
        @endforeach    
    </div>
</section>
