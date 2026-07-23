@php
use Illuminate\Support\Facades\Storage;

$roleColors = [
    'frontend' => 'bg-blue-100 text-blue-700 ring-blue-200',
    'backend' => 'bg-green-100 text-green-700 ring-green-200',
    'designer' => 'bg-purple-100 text-purple-700 ring-purple-200',
    'leader' => 'bg-yellow-100 text-yellow-700 ring-yellow-200',
    'quality assurance' => 'bg-red-100 text-red-700 ring-red-200',
    'project manager' => 'bg-violet-100 text-violet-700 ring-violet-200',
];
@endphp

<section class="min-h-screen bg-gradient-to-br from-red-50 via-white to-red-100 py-20">
    <div class="mx-auto max-w-7xl px-6">

        {{-- Header --}}
        <div class="mb-16 text-center">
            <span class="rounded-full bg-red-100 px-4 py-2 text-sm font-semibold text-red-600">
                OUR AMAZING TEAM
            </span>

            <h1 class="mt-5 text-5xl font-black tracking-tight text-gray-900">
                Meet Our Team
            </h1>

            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-500">
                Talented people behind every great product. Designers,
                Developers, Leaders and Problem Solvers.
            </p>
        </div>

        {{-- Team --}}
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @foreach ($this->teamMembers as $member)

                <div
                    class="group relative overflow-hidden rounded-3xl border border-gray-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-2xl">

                    {{-- Background Decoration --}}
                    <div
                        class="absolute inset-x-0 top-0 h-32 bg-gradient-to-r from-red-500 to-red-600">
                    </div>

                    {{-- Avatar --}}
                    <div class="relative flex justify-center">
                        <img
                            src="{{ Storage::url($member->photo) }}"
                            alt="{{ $member->name }}"
                            class="mt-8 h-36 w-36 rounded-full border-4 border-white object-cover shadow-xl transition duration-300 group-hover:scale-105">
                    </div>

                    {{-- Content --}}
                    <div class="mt-6 text-center">

                        <h3 class="text-2xl font-bold text-gray-900">
                            {{ $member->name }}
                        </h3>

                        @if($member->description)
                            <p class="mt-3 text-sm leading-6 text-gray-500">
                                {{ $member->description }}
                            </p>
                        @endif

                        {{-- Roles --}}
                        <div class="mt-5 flex flex-wrap justify-center gap-2">

                            @foreach(array_filter(array_map('trim', explode(',', $member->role))) as $role)

                                <span
                                    class="rounded-full px-3 py-1 text-xs font-semibold ring-1 {{ $roleColors[strtolower($role)] ?? 'bg-gray-100 text-gray-700 ring-gray-300' }}">
                                    {{ $role }}
                                </span>

                            @endforeach

                        </div>
                        
                        
                    </div>
                    
                    <a href="{{ $member->link }}">
                        <div class="bg-rose-500 px-4 py-2 rounded-lg text-white mt-5 text-center font-semibold" >
                            View
                        </div>
                    </a>
                </div>

            @endforeach

        </div>
    </div>
</section>