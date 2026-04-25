<x-layout>

<!-- HERO -->
<section id="hero" class="relative min-h-screen flex items-center px-6 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 via-transparent to-blue-500/10"></div>
    <div class="absolute top-24 left-10 w-72 h-72 bg-accent/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

        <div class="space-y-6">
            <div class="inline-flex items-center gap-2 text-accent bg-bg-card/60 backdrop-blur border border-accent/30 px-4 py-1.5 rounded-full text-xs font-medium shadow">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Available for work
            </div>

            <h1 class="text-4xl md:text-6xl font-bold tracking-tight leading-tight">
                Hi, I'm 
                <span class="text-accent">Kenjie G.</span><br>
                Mañego
            </h1>

            <p class="text-muted text-lg max-w-lg">
                To obtain an entry-level IT position where I can utilize my academic knowledge in programming, develop my technical skills, and contribute to the success of the organization.
            </p>

            <div class="flex gap-4 flex-wrap">
                <a href="#projects"
                   class="bg-accent text-white px-6 py-3 rounded-xl text-sm font-semibold shadow-lg hover:-translate-y-1 hover:shadow-xl transition">
                    View Projects
                </a>

                <a href="#contact"
                   class="border border-border bg-bg-card/70 backdrop-blur px-6 py-3 rounded-xl text-sm font-semibold hover:border-accent hover:text-accent transition">
                    Contact Me
                </a>
            </div>
        </div>

        <div class="flex justify-center md:justify-end">
            <div class="relative animate-[float_4s_ease-in-out_infinite]">
                <div class="absolute inset-0 bg-accent/30 rounded-full blur-3xl"></div>

                <div class="relative w-72 h-72 md:w-80 md:h-80 rounded-full border border-border bg-bg-card overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/Profile.JPG') }}" 
                         alt="Profile Image"
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ABOUT -->
<section id="about" class="px-6 py-20 border-t border-border">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-xs font-bold tracking-[0.25em] uppercase text-accent mb-3">
                About Me
            </p>

            <h2 class="text-3xl md:text-4xl font-bold mb-5">
                I build practical web systems.
            </h2>

            <p class="text-muted leading-relaxed mb-4">
                I am passionate about creating web applications that solve real problems. I focus on clean design, organized code, and secure system features.
            </p>

            <p class="text-muted leading-relaxed">
                My goal is to become a job-ready web developer with strong skills in programming, database management, and modern front-end design.
            </p>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div class="bg-bg-card/70 backdrop-blur border border-border rounded-2xl p-5 text-center shadow hover:-translate-y-1 transition">
                <div class="text-3xl font-bold text-accent">3+</div>
                <div class="text-xs text-muted">Skills</div>
            </div>

            <div class="bg-bg-card/70 backdrop-blur border border-border rounded-2xl p-5 text-center shadow hover:-translate-y-1 transition">
                <div class="text-3xl font-bold text-accent">1</div>
                <div class="text-xs text-muted">Capstone</div>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section id="skills" class="px-6 py-20">
    <div class="max-w-6xl mx-auto">
        <p class="text-xs font-bold tracking-[0.25em] uppercase text-accent mb-3">
            Skills
        </p>

        <h2 class="text-3xl md:text-4xl font-bold mb-10">
            Technologies I Work With
        </h2>
<div class="grid md:grid-cols-3 gap-6">

    <!-- FRONTEND -->
    <div class="bg-bg-card/70 backdrop-blur border border-border rounded-2xl p-6 shadow hover:-translate-y-2 hover:shadow-xl transition">
        <h3 class="text-xl font-bold text-accent mb-4">Front-End</h3>

        <ul class="space-y-2 text-muted text-sm">
            <li>🌐 HTML</li>
            <li>🎨 CSS / Tailwind CSS</li>
            <li>⚡ JavaScript</li>
        </ul>
    </div>

    <!-- BACKEND -->
    <div class="bg-bg-card/70 backdrop-blur border border-border rounded-2xl p-6 shadow hover:-translate-y-2 hover:shadow-xl transition">
        <h3 class="text-xl font-bold text-accent mb-4">Back-End</h3>

        <ul class="space-y-2 text-muted text-sm">
            <li>🐘 PHP</li>
            <li>🧩 Laravel</li>
            <li>🔥 CodeIgniter4</li>
        </ul>
    </div>

    <!-- DATABASE -->
    <div class="bg-bg-card/70 backdrop-blur border border-border rounded-2xl p-6 shadow hover:-translate-y-2 hover:shadow-xl transition">
        <h3 class="text-xl font-bold text-accent mb-4">Database</h3>

        <ul class="space-y-2 text-muted text-sm">
            <li>⚙️ MySQL</li>
        </ul>
    </div>

</div>
        
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="px-6 py-20 border-t border-border">
    <div class="max-w-6xl mx-auto">
        <p class="text-xs font-bold tracking-[0.25em] uppercase text-accent mb-3">
            Projects
        </p>

        <h2 class="text-3xl md:text-4xl font-bold mb-10">
            Featured Work
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="group bg-bg-card/70 backdrop-blur border border-border rounded-2xl overflow-hidden shadow hover:-translate-y-2 hover:shadow-xl transition">
                <div class="h-40 bg-gradient-to-br from-orange-300 to-orange-100 flex items-center justify-center text-5xl">
                    🎓
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">
                        Scholarship Management System
                    </h3>

                    <p class="text-sm text-muted mb-4 leading-relaxed">
                        A secured web-based system for managing scholar records, billing, monitoring, users, and reports.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 text-xs bg-accent-light text-orange-900 rounded-full">🌐 HTML</span>
                        <span class="px-3 py-1 text-xs bg-accent-light text-orange-900 rounded-full">⚙️ MySQL</span>
                        <span class="px-3 py-1 text-xs bg-accent-light text-orange-900 rounded-full">🎨 Tailwind</span>
                        <span class="px-3 py-1 text-xs bg-accent-light text-orange-900 rounded-full">🔥 CodeIgniter4</span>
                    </div>

                    <a href="https://github.com/wilmarcabigas/Cebu-ScholarHub" target="_blank" class="text-accent text-sm font-semibold hover:underline">
                        View Project →
                    </a>
                </div>
            </div>

            <div class="group bg-bg-card/70 backdrop-blur border border-border rounded-2xl overflow-hidden shadow hover:-translate-y-2 hover:shadow-xl transition">
                <div class="h-40 bg-gradient-to-br from-green-300 to-green-100 flex items-center justify-center text-5xl">
                    💼
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Portfolio Website</h3>

                    <p class="text-sm text-muted mb-4 leading-relaxed">
                        A responsive personal portfolio built with Laravel Blade and Tailwind CSS.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="px-3 py-1 text-xs bg-accent-light text-orange-900 rounded-full">🌐 HTML</span>
                        <span class="px-3 py-1 text-xs bg-accent-light text-orange-900 rounded-full">🎨 Tailwind</span>
                        <span class="px-3 py-1 text-xs bg-accent-light text-orange-900 rounded-full">🧩 Laravel</span>
                    </div>

                    <a href="#" class="text-accent text-sm font-semibold hover:underline">
                        View Project →
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- CONTACT -->
<section id="contact" class="px-6 py-20 border-t border-border">
    <div class="max-w-2xl mx-auto text-center bg-bg-card/70 backdrop-blur border border-border rounded-3xl p-10 shadow-xl">
        <p class="text-xs font-bold tracking-[0.25em] uppercase text-accent mb-3">
            Contact
        </p>

        <h2 class="text-3xl font-bold mb-4">
            Let's work together
        </h2>

        <p class="text-muted mb-8">
            Interested in working with me? You can contact me through email or view my work online.
        </p>

        <div class="flex justify-center gap-4 flex-wrap">
            <a href="mailto:kenjie.manego@gmail.com"
               class="bg-accent text-white px-6 py-3 rounded-xl text-sm font-semibold hover:-translate-y-1 hover:shadow-lg transition">
                Email Me
            </a>

            <a href="https://github.com/kenskrt"
               target="_blank"
               class="border border-border px-6 py-3 rounded-xl text-sm font-semibold hover:border-accent hover:text-accent transition">
                GitHub
            </a>

        </div>
    </div>
</section>

<style>
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-14px);
        }
    }
</style>

</x-layout>