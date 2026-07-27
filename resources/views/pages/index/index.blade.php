@php
    use Illuminate\Support\Facades\Storage;

    $roleConfig = [
        'frontend' => ['label' => 'Frontend Developer', 'class' => 'bg-sky-50 text-sky-700 ring-sky-200'],
        'backend' => ['label' => 'Backend Developer', 'class' => 'bg-emerald-50 text-emerald-700 ring-emerald-200'],
        'fullstack' => ['label' => 'Full Stack Developer', 'class' => 'bg-indigo-50 text-indigo-700 ring-indigo-200'],
        'uiux' => ['label' => 'UI/UX Designer', 'class' => 'bg-fuchsia-50 text-fuchsia-700 ring-fuchsia-200'],
        'designer' => ['label' => 'Designer', 'class' => 'bg-purple-50 text-purple-700 ring-purple-200'],
        'leader' => ['label' => 'Team Leader', 'class' => 'bg-amber-50 text-amber-700 ring-amber-200'],
        'qa' => ['label' => 'Quality Assurance', 'class' => 'bg-rose-50 text-rose-700 ring-rose-200'],
        'devops' => ['label' => 'DevOps Engineer', 'class' => 'bg-slate-100 text-slate-700 ring-slate-200'],
        'pm' => ['label' => 'Project Manager', 'class' => 'bg-violet-50 text-violet-700 ring-violet-200'],
    ];
@endphp

<section class="relative isolate overflow-hidden bg-stone-50 py-16 sm:py-24">
    <div class="absolute inset-x-0 top-0 -z-10 h-[34rem] bg-[radial-gradient(circle_at_top_right,_rgba(239,68,68,0.18),_transparent_35%),radial-gradient(circle_at_15%_15%,_rgba(127,29,29,0.10),_transparent_30%)]"></div>
    <div class="absolute -left-32 top-72 -z-10 h-80 w-80 rounded-full bg-red-200/30 blur-3xl"></div>
    <div class="absolute -right-32 top-[38rem] -z-10 h-96 w-96 rounded-full bg-orange-200/30 blur-3xl"></div>

    <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
        <header class="mx-auto max-w-3xl text-center">
            <div class="inline-flex items-center gap-2 rounded-full border border-red-200 bg-white/80 px-4 py-2 text-xs font-bold tracking-[0.16em] text-red-700 shadow-sm backdrop-blur sm:text-sm">
                <span class="h-2 w-2 rounded-full bg-red-500"></span>
                RED DEVELOPMENT COLLECTIVE
            </div>

            <h1 class="mt-6 text-4xl font-black tracking-tight text-stone-950 sm:text-6xl">
                People who turn bold ideas
                <span class="block text-red-600">into great products.</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-stone-600 sm:text-lg">
                A multidisciplinary team of designers, engineers, and problem solvers building digital experiences that matter.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-3 text-sm font-medium text-stone-600">
                <span class="rounded-full bg-white px-4 py-2 shadow-sm ring-1 ring-stone-200">{{ count($this->teamMembers) }} team members</span>
                <span class="rounded-full bg-white px-4 py-2 shadow-sm ring-1 ring-stone-200">{{ count($this->skills) }} technologies</span>
            </div>
        </header>

        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->teamMembers as $member)
                @php
                    $roles = $member->role ?? [];
                    $visibleRoles = array_slice($roles, 0, 2);
                    $remainingRoles = array_slice($roles, 2);
                @endphp

                <article class="group relative flex min-h-[29rem] flex-col overflow-hidden rounded-3xl border border-stone-200 bg-white shadow-[0_12px_35px_-18px_rgba(28,25,23,0.35)] transition duration-300 hover:-translate-y-1 hover:border-red-200 hover:shadow-[0_24px_45px_-22px_rgba(185,28,28,0.38)]">
                    <div class="absolute inset-x-0 top-0 h-28 bg-gradient-to-br from-red-700 via-red-600 to-orange-500"></div>
                    <div class="absolute -right-10 top-3 h-28 w-28 rounded-full border-[18px] border-white/15"></div>
                    <div class="absolute left-6 top-5 text-xs font-bold tracking-[0.18em] text-white/85">TEAM / {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>

                    <div class="relative px-6 pt-14">
                        <div class="relative mx-auto h-28 w-28 rounded-[1.8rem] bg-white p-1.5 shadow-lg ring-1 ring-stone-900/5">
                            <img
                                src="{{ Storage::url($member->photo) }}"
                                alt="{{ $member->name }}"
                                class="h-full w-full rounded-[1.45rem] object-cover transition duration-500 group-hover:scale-[1.03]"
                            >
                        </div>
                    </div>

                    <div class="flex flex-1 flex-col px-6 pb-6 pt-5 text-center">
                        <h2 class="text-xl font-extrabold tracking-tight text-stone-900">{{ $member->name }}</h2>

                        @if ($member->description)
                            <p class="mt-2 min-h-12 text-sm leading-6 text-stone-500">{{ $member->description }}</p>
                        @endif

                        <div class="mt-5 flex flex-wrap justify-center gap-2">
                            @foreach ($visibleRoles as $role)
                                @php
                                    $config = $roleConfig[$role] ?? ['label' => ucfirst($role), 'class' => 'bg-stone-100 text-stone-700 ring-stone-200'];
                                @endphp

                                <span class="rounded-full px-3 py-1.5 text-[11px] font-bold ring-1 {{ $config['class'] }}">
                                    {{ $config['label'] }}
                                </span>
                            @endforeach

                            @if (count($remainingRoles))
                                <details class="group/roles relative">
                                    <summary class="list-none cursor-pointer rounded-full bg-stone-100 px-3 py-1.5 text-[11px] font-bold text-stone-700 ring-1 ring-stone-200 transition hover:bg-stone-200 [&::-webkit-details-marker]:hidden">
                                        +{{ count($remainingRoles) }} more
                                    </summary>
                                    <div class="absolute left-1/2 z-20 mt-3 w-64 -translate-x-1/2 rounded-2xl border border-stone-200 bg-white p-3 text-left shadow-xl">
                                        <div class="flex flex-wrap gap-2">
                                            @foreach ($remainingRoles as $role)
                                                @php
                                                    $config = $roleConfig[$role] ?? ['label' => ucfirst($role), 'class' => 'bg-stone-100 text-stone-700 ring-stone-200'];
                                                @endphp
                                                <span class="rounded-full px-3 py-1.5 text-[11px] font-bold ring-1 {{ $config['class'] }}">{{ $config['label'] }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </details>
                            @endif
                        </div>

                        @if ($member->link)
                            <a href="{{ $member->link }}" target="_blank" rel="noopener noreferrer" class="mt-auto inline-flex items-center justify-center gap-2 pt-7 text-sm font-bold text-red-700 transition hover:text-red-900">
                                Explore profile
                                <svg class="h-4 w-4 transition group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3.75 10a.75.75 0 0 1 .75-.75h9.19L10.22 5.78a.75.75 0 0 1 1.06-1.06l4.75 4.75a.75.75 0 0 1 0 1.06l-4.75 4.75a.75.75 0 1 1-1.06-1.06l3.47-3.47H4.5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" /></svg>
                            </a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-24 border-t border-stone-200 pt-20 sm:mt-32">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_auto]">
                <div class="max-w-2xl">
                    <p class="text-sm font-bold tracking-[0.18em] text-red-600">OUR TOOLKIT</p>
                    <h2 class="mt-3 text-3xl font-black tracking-tight text-stone-950 sm:text-5xl">Technology with purpose.</h2>
                    <p class="mt-5 text-base leading-7 text-stone-600 sm:text-lg">The tools we trust to design, ship, and scale thoughtful digital products.</p>
                </div>
                <div class="rounded-2xl bg-stone-900 px-5 py-4 text-sm text-stone-300 shadow-lg">
                    <span class="font-bold text-white">{{ count($this->skills) }}</span> technologies in our stack
                </div>
            </div>

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($this->skills as $skill)
                    <article class="group flex items-center gap-4 rounded-2xl border border-stone-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-red-200 hover:shadow-lg">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-red-50 text-red-600 ring-1 ring-red-100 transition duration-300 group-hover:bg-red-600 group-hover:text-white">
                            <iconify-icon icon="{{ $skill->icon }}" class="text-3xl"></iconify-icon>
                        </div>
                        <div class="min-w-0">
                            <h3 class="truncate text-base font-extrabold capitalize text-stone-900">{{ $skill->name }}</h3>
                            <p class="mt-1 truncate text-sm text-stone-500">{{ $skill->category }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
