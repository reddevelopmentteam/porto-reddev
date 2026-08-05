@php
    use Illuminate\Support\Facades\Storage;

    $roleConfig = [
        'frontend' => ['label' => 'Frontend Developer'],
        'backend' => ['label' => 'Backend Developer'],
        'fullstack' => ['label' => 'Full Stack Developer'],
        'uiux' => ['label' => 'UI/UX Designer'],
        'designer' => ['label' => 'Designer'],
        'leader' => ['label' => 'Team Leader'],
        'qa' => ['label' => 'Quality Assurance'],
        'devops' => ['label' => 'DevOps Engineer'],
        'pm' => ['label' => 'Project Manager'],
    ];

    $contactIconConfig = [
        'email' => 'lucide:mail',
        'mail' => 'lucide:mail',
        'whatsapp' => 'logos:whatsapp-icon',
        'phone' => 'lucide:phone', 
        'telegram' => 'logos:telegram',
        'instagram' => 'skill-icons:instagram',
        'linkedin' => 'skill-icons:linkedin',
        'github' => 'skill-icons:github-dark',
        'discord' => 'logos:discord-icon',
    ];
@endphp

<main>
    {{-- ========================================================= --}}
    {{-- 1. HERO SECTION (includes Navigation + Hero content)      --}}
    {{-- ========================================================= --}}
    <header class="relative overflow-hidden">

        {{-- Animated background: gradient blur + floating glow circles --}}
        <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden" aria-hidden="true">
            <div class="absolute -top-32 -left-32 h-96 w-96 rounded-full bg-primary/30 blur-3xl"
                x-data="{}" x-init="$el.animate([{ transform: 'translate(0px,0px)' },{ transform: 'translate(30px,40px)' },{ transform: 'translate(0px,0px)' }], { duration: 9000, iterations: Infinity })">
            </div>
            <div class="absolute top-1/3 -right-24 h-[28rem] w-[28rem] rounded-full bg-accent/20 blur-3xl"
                x-data="{}" x-init="$el.animate([{ transform: 'translate(0px,0px)' },{ transform: 'translate(-40px,30px)' },{ transform: 'translate(0px,0px)' }], { duration: 11000, iterations: Infinity })">
            </div>
            <div class="absolute bottom-0 left-1/4 h-72 w-72 rounded-full bg-primary/20 blur-3xl"
                x-data="{}" x-init="$el.animate([{ transform: 'translate(0px,0px)' },{ transform: 'translate(20px,-30px)' },{ transform: 'translate(0px,0px)' }], { duration: 8000, iterations: Infinity })">
            </div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_0%,rgba(135,80,230,0.15),transparent_60%)]"></div>
        </div>

        {{-- Hero Content --}}
        <div id="home" class="relative mx-auto grid max-w-7xl grid-cols-1 items-center gap-16 px-6 py-20 lg:grid-cols-2 lg:gap-12 lg:px-8 lg:py-32">

            {{-- Left: text content --}}
            <div
                x-data="{ shown: false }"
                x-intersect.once="shown = true"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-6"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-show="true"
                class="text-center lg:text-left">
                {{-- Badge --}}
                <span class="glass inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs font-medium text-white/80">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                    </svg>
                    Software Development Agency
                </span>

                {{-- Heading --}}
                <h1 class="mt-6 text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Building Modern
                    <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Digital Experiences</span>
                </h1>

                {{-- Description --}}
                <p class="mx-auto mt-6 max-w-xl text-base leading-relaxed text-white/70 lg:mx-0 lg:text-lg">
                    We build scalable websites, web applications, dashboards, and REST APIs using modern technologies.
                </p>

                {{-- Buttons --}}
                <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row lg:justify-start lg:items-center">
                    <a href="#projects"
                        class="group inline-flex w-full items-center justify-center gap-2 rounded-full bg-gradient-to-r from-primary to-accent px-7 py-3.5 text-sm font-semibold shadow-glow transition hover:scale-105 hover:shadow-glow-blue sm:w-auto">
                        View Projects
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                    <a href="#contact"
                        class="glass inline-flex w-full items-center justify-center gap-2 rounded-full px-7 py-3.5 text-sm font-semibold text-white/90 transition hover:border-white/30 hover:bg-white/10 sm:w-auto">
                        Contact Us
                    </a>
                </div>

                {{-- Quick stats --}}
                <dl class="mt-14 grid grid-cols-3 gap-6 border-t border-white/10 pt-8 text-center lg:text-left">
                    <div>
                        <dt class="text-2xl font-bold text-white sm:text-3xl">40+</dt>
                        <dd class="mt-1 text-xs text-white/60">Projects Delivered</dd>
                    </div>
                    <div>
                        <dt class="text-2xl font-bold text-white sm:text-3xl">15+</dt>
                        <dd class="mt-1 text-xs text-white/60">Happy Clients</dd>
                    </div>
                    <div>
                        <dt class="text-2xl font-bold text-white sm:text-3xl">5+</dt>
                        <dd class="mt-1 text-xs text-white/60">Years Experience</dd>
                    </div>
                </dl>
            </div>

            {{-- Right: floating code window illustration --}}
            <div class="relative mx-auto w-full max-w-lg lg:mx-0">
                {{-- glow behind window --}}
                <div class="absolute inset-0 -z-10 rounded-3xl bg-gradient-to-br from-primary/40 to-accent/30 blur-3xl"></div>

                <div
                    x-data="{}"
                    x-init="$el.animate([{ transform: 'translateY(0px)' },{ transform: 'translateY(-14px)' },{ transform: 'translateY(0px)' }], { duration: 6000, iterations: Infinity, easing: 'ease-in-out' })"
                    class="glass relative rounded-2xl p-1 shadow-2xl shadow-black/40">
                    {{-- window chrome --}}
                    <div class="flex items-center gap-2 rounded-t-2xl border-b border-white/10 bg-white/5 px-4 py-3">
                        <span class="h-3 w-3 rounded-full bg-red-400/80"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-400/80"></span>
                        <span class="h-3 w-3 rounded-full bg-green-400/80"></span>
                        <span class="ml-3 text-xs text-white/50">app.blade.php</span>
                    </div>
                    {{-- code lines --}}
                    <div class="space-y-2 rounded-b-2xl bg-black/20 p-6 font-mono text-xs leading-relaxed sm:text-sm">
                        <p><span class="text-accent">Route</span><span class="text-white/60">::</span><span class="text-primary">get</span><span class="text-white/60">(</span><span class="text-green-400">'/projects'</span><span class="text-white/60">,</span></p>
                        <p class="pl-4"><span class="text-white/80">[ProjectController::class, </span><span class="text-green-400">'index'</span><span class="text-white/80">]);</span></p>
                        <p class="pt-2"><span class="text-accent">class</span> <span class="text-primary">ApiResource</span> <span class="text-white/60">{</span></p>
                        <p class="pl-4 text-white/80">public function <span class="text-primary">toArray</span>()</p>
                        <p class="pl-8 text-white/60">{ <span class="text-accent">return</span> [ <span class="text-green-400">'status'</span> =&gt; <span class="text-green-400">'ok'</span> ]; }</p>
                        <p class="text-white/60">}</p>
                        <p class="pt-2 text-white/40">// building scalable systems...</p>
                    </div>
                </div>

                {{-- floating badge chips --}}
                <div
                    x-data="{}"
                    x-init="$el.animate([{ transform: 'translateY(0px)' },{ transform: 'translateY(10px)' },{ transform: 'translateY(0px)' }], { duration: 5000, iterations: Infinity, easing: 'ease-in-out' })"
                    class="glass absolute -left-6 -top-6 hidden items-center gap-2 rounded-xl px-4 py-2 text-xs font-medium shadow-glow sm:flex">
                    <span class="h-2 w-2 rounded-full bg-accent"></span> REST API Ready
                </div>
                <div
                    x-data="{}"
                    x-init="$el.animate([{ transform: 'translateY(0px)' },{ transform: 'translateY(-10px)' },{ transform: 'translateY(0px)' }], { duration: 5500, iterations: Infinity, easing: 'ease-in-out' })"
                    class="glass absolute -bottom-6 -right-4 hidden items-center gap-2 rounded-xl px-4 py-2 text-xs font-medium shadow-glow-blue sm:flex">
                    <span class="h-2 w-2 rounded-full bg-primary"></span> 99.9% Uptime
                </div>
            </div>
        </div>
    </header>

    {{-- ========================================================= --}}
    {{-- 2. SKILLS SECTION                                          --}}
    {{-- ========================================================= --}}
    <section id="skills" class="relative py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            {{-- Section heading --}}
            <div
                x-data="{ shown: false }" x-intersect.once="shown = true"
                x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0"
                class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-accent">Our Stack</span>
                <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">Technologies We Use</h2>
                <p class="mt-4 text-white/60">A modern, battle-tested toolkit we rely on to ship reliable, scalable software.</p>
            </div>

            {{-- Skills grid --}}
            <div class="mt-16 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">

                @foreach ($this->skills as $skill)
                <div
                    x-data="{ shown: false }"
                    x-intersect.once="shown = true"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    style="transition-delay: 40ms"
                    class="glass group relative flex flex-col items-start gap-3 rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1.5 hover:scale-[1.02] hover:border-primary/50 hover:shadow-glow">
                    {{-- Icon --}}
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl border-white/20 border text-white transition group-hover:text-white">
                        <iconify-icon icon="{{ $skill->icon }}" class="text-3xl"></iconify-icon>
                    </span>
                    <h3 class="text-base font-semibold text-white">{{ $skill->name }}</h3>
                    <p class="text-sm leading-relaxed text-white/55">{{ $skill->category }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================================= --}}
    {{-- 3. CONTACT SECTION                                         --}}
    {{-- ========================================================= --}}
    <section id="contact" class="relative overflow-hidden py-20 sm:py-28">
        <div class="pointer-events-none absolute inset-0 -z-10" aria-hidden="true">
            <div class="absolute left-1/2 top-1/2 h-80 w-80 -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary/20 blur-3xl"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(200,16,46,0.12),transparent_65%)]"></div>
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                x-data="{ shown: false }" x-intersect.once="shown = true"
                x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0"
                class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-accent">Let's Talk</span>
                <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">Have a Project in Mind?</h2>
                <p class="mt-4 text-white/60">Tell us what you want to build. We are ready to turn your next idea into a reliable digital product.</p>
            </div>

            @if ($this->contacts->isNotEmpty())
                <div class="mx-auto mt-12 grid max-w-4xl grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($this->contacts as $contact)
                        @php
                            $contactKey = strtolower(trim($contact->name));
                            $contactIcon = $contactIconConfig[$contactKey] ?? 'lucide:message-circle';
                            $isExternalLink = str_starts_with($contact->link, 'http://') || str_starts_with($contact->link, 'https://');
                        @endphp
                        <a
                            href="{{ $contact->link }}"
                            @if ($isExternalLink) target="_blank" rel="noopener noreferrer" @endif
                            x-data="{ shown: false }" x-intersect.once="shown = true"
                            x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                            class="group glass flex items-center gap-4 rounded-2xl p-5 transition-all duration-300 hover:-translate-y-1 hover:border-primary/50 hover:shadow-glow">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/15 text-2xl transition group-hover:scale-110 group-hover:bg-primary/25">
                                <iconify-icon icon="{{ $contactIcon }}"></iconify-icon>
                            </span>
                            <span class="min-w-0 flex-1">
                                <span class="block text-xs font-medium uppercase tracking-wider text-white/45">Contact us via</span>
                                <span class="mt-1 block truncate text-base font-semibold text-white">{{ $contact->name }}</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 text-white/40 transition group-hover:translate-x-1 group-hover:text-accent" fill="none" viewBox="0 0 24 24" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="glass mx-auto mt-12 max-w-xl rounded-2xl p-8 text-center sm:p-10">
                    <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/15 text-accent">
                        <iconify-icon icon="lucide:message-circle" class="text-3xl"></iconify-icon>
                    </span>
                    <p class="mt-5 text-base font-medium text-white">Contact details are coming soon.</p>
                    <p class="mt-2 text-sm leading-relaxed text-white/55">Please check back shortly for the best way to reach our team.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ========================================================= --}}
    {{-- 4. TEAM SECTION                                            --}}
    {{-- ========================================================= --}}
    <section id="team" class="relative py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            {{-- Section heading --}}
            <div
                x-data="{ shown: false }" x-intersect.once="shown = true"
                x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0"
                class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-primary">The People Behind RED</span>
                <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">Meet Our Team</h2>
                <p class="mt-4 text-white/60">A small team of engineers and designers obsessed with clean, dependable software.</p>
            </div>

            {{-- Team grid --}}
            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">

                @foreach ($this->teamMembers as $member)
                    @php
                        $roles = $member->role ?? [];
                        $visibleRoles = array_slice($roles, 0, 2);
                        $remainingRoles = array_slice($roles, 2);
                    @endphp
                <div
                    x-data="{ shown: false }"
                    x-intersect.once="shown = true"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    style="transition-delay: 60ms"
                    class="group glass relative flex flex-col items-center rounded-2xl p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-glow">
                    {{-- Photo placeholder --}}
                    <div class="relative h-24 w-24 overflow-hidden rounded-full ring-2 ring-white/10 ring-offset-2 ring-offset-base transition group-hover:ring-primary">
                        <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-primary/40 to-accent/30 text-2xl font-bold text-white transition duration-500 group-hover:scale-110">
                            <img src="{{Storage::url($member->img)}}" alt="{{$member->name}} photo">
                        </div>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold text-white">{{ $member->name }}</h3>

                    {{-- Role badge --}}
                    @foreach ($visibleRoles as $role)
                        @php
                            $config = $roleConfig[$role] ?? ['label' => ucfirst($role)];
                        @endphp

                        <span class="mt-2 inline-block rounded-full bg-gradient-to-r from-primary/20 to-accent/20 px-3 py-1 text-xs font-medium text-accen">
                            {{ $config['label'] }}
                        </span>
                    @endforeach

                    {{-- Social buttons --}}
                    <div class="mt-6 flex items-center opacity-70 transition duration-300 group-hover:opacity-100">
                        <a href="{{$member->link}}" target="_blank"
                            class="glass inline-flex w-full items-center justify-center gap-2 rounded-full px-7 py-2 text-sm font-semibold text-white/90 transition hover:border-white/30 hover:bg-white/10 sm:w-auto">
                            View Detail
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================================= --}}
    {{-- 5. PROJECTS SECTION                                        --}}
    {{-- ========================================================= --}}
    <section id="projects" class="relative py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            {{-- Section heading --}}
            <div
                x-data="{ shown: false }" x-intersect.once="shown = true"
                x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0"
                class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-accent">Selected Work</span>
                <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">Featured Projects</h2>
                <p class="mt-4 text-white/60">A few of the products and platforms we've designed, built, and shipped.</p>
            </div>

            {{-- Projects grid --}}
            <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($this->projects as $project)
                <article
                    x-data="{ shown: false }"
                    x-intersect.once="shown = true"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    style="transition-delay: 60ms"
                    class="group glass flex flex-col overflow-hidden rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-glow">
                    {{-- Image placeholder --}}
                    <div class="relative h-48 w-full overflow-hidden bg-gradient-to-br from-primary/30 via-base to-accent/20">
                        <div class="flex h-full w-full items-center justify-center transition duration-500 group-hover:scale-110">
                            @php
                                $firstImage = $project->img[0] ?? null;
                            @endphp

                            @if ($firstImage)
                                <img
                                    src="{{ Storage::url($firstImage) }}"
                                    alt="{{ $project->name }}"
                                    class="h-full w-full object-cover">
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-white/30" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            @endif
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-base/80 to-transparent opacity-0 transition duration-300 group-hover:opacity-100"></div>
                    </div>

                    {{-- Content --}}
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-lg font-semibold text-white">{{ $project->name }}</h3>
                        <p class="mt-2 flex-1 text-sm leading-relaxed text-white/55">{{ strip_tags($project->desc) }}</p>

                        {{-- Tech badges --}}
                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach ($project->techs->take(2) as $tech)
                                <span class="rounded-2xl border border-white/20 p-1 w-10 h-10 flex justify-center items-center text-xs">
                                    <iconify-icon icon="{{ $tech->icon }}" class="text-xl"></iconify-icon>
                                </span>
                            @endforeach
                        </div>

                        {{-- Buttons --}}
                        <div class="mt-6 flex items-center gap-3">
                            <a href="#"
                                class="inline-flex flex-1 items-center justify-center gap-1.5 rounded-full bg-gradient-to-r from-primary to-accent px-4 py-2.5 text-xs font-semibold transition hover:scale-105 hover:shadow-glow-blue">
                                Live Demo
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>
                            </a>
                            <a href="#" aria-label="View source on GitHub"
                                class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-4 py-2.5 text-xs font-semibold text-white/80 transition hover:border-white/30 hover:bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.09 3.29 9.4 7.86 10.93.57.1.79-.25.79-.55v-2.15c-3.2.7-3.87-1.35-3.87-1.35-.53-1.34-1.29-1.7-1.29-1.7-1.06-.72.08-.71.08-.71 1.17.08 1.79 1.2 1.79 1.2 1.04 1.78 2.73 1.27 3.4.97.1-.75.4-1.27.72-1.56-2.56-.29-5.25-1.28-5.25-5.7 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.47.11-3.06 0 0 .97-.31 3.18 1.18a11.1 11.1 0 015.8 0c2.2-1.49 3.17-1.18 3.17-1.18.64 1.59.24 2.77.12 3.06.74.81 1.19 1.84 1.19 3.1 0 4.43-2.7 5.41-5.27 5.7.42.36.78 1.07.78 2.16v3.2c0 .3.21.66.79.55A10.52 10.52 0 0023.5 12C23.5 5.65 18.35.5 12 .5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================================= --}}
    {{-- FOOTER                                    --}}
    {{-- ========================================================= --}}
    <footer class="relative border-t border-white/10 py-10">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 text-center sm:flex-row sm:text-left lg:px-8">
            <p class="text-sm text-white/50">&copy; {{ date('Y') }} RED Development. All rights reserved.</p>
            <div class="flex items-center gap-2 text-sm text-white/50">
                <span class="h-1.5 w-1.5 rounded-full bg-accent"></span>
                Built with Laravel, Tailwind CSS &amp; Alpine.js
            </div>
        </div>
    </footer>
</main>
