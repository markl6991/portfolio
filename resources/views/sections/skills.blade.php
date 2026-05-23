<section id="skills" class="py-32" data-aos="fade-up">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-20">

            <p class="uppercase tracking-[0.3em] text-cyan-400 text-sm mb-5">
                Skills
            </p>

            <h2 class="text-4xl md:text-5xl font-bold">
                Technologies I Work With
            </h2>

        </div>

        <div class="grid md:grid-cols-4 gap-6">

            @php

                $skills = [
                    'Laravel',
                    'PHP',
                    'CodeIgniter',
                    'MySQL',
                    'PostgreSQL',
                    'Javascript',
                    'Typescript',
                    'Vue.js',
                    'React',
                    'Nuxt.js',
                    'Next.js',
                    'Tailwind CSS',
                    'REST API',
                    'Linux Server',
                    'SEO',
                    'Cocos Creator'
                ];

            @endphp

            @foreach($skills as $skill)

                <div class="p-6 rounded-2xl border border-black/10 dark:border-white/10 hover:border-cyan-400 hover:-translate-y-1 transition duration-300">

                    <h3 class="text-lg font-semibold">
                        {{ $skill }}
                    </h3>

                </div>

            @endforeach

        </div>

    </div>

</section>