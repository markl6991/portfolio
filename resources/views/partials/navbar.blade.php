<nav
    x-data="{ mobileMenu:false }"
    class="fixed top-0 left-0 w-full z-50"
>

    <div class="max-w-7xl mx-auto px-6 pt-6">

        <div class="backdrop-blur-xl
                    bg-white/70 dark:bg-white/5
                    border border-black/10 dark:border-white/10
                    rounded-2xl
                    px-6 py-4
                    shadow-2xl">

            <!-- Top Navbar -->
            <div class="flex items-center justify-between">

                <!-- Logo -->
                <h1 class="text-xl font-bold tracking-wide">
                    MARK<span class="text-cyan-400">.</span>
                </h1>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8 text-sm">

                    <a href="#about" class="hover:text-cyan-400 transition">
                        About
                    </a>

                    <a href="#skills" class="hover:text-cyan-400 transition">
                        Skills
                    </a>

                    <a href="#experience" class="hover:text-cyan-400 transition">
                        Experience
                    </a>

                    <a href="#projects" class="hover:text-cyan-400 transition">
                        API Integration
                    </a>

                    <a href="#contact" class="hover:text-cyan-400 transition">
                        Contact
                    </a>

                    <!-- Theme Toggle -->
                    <button
                        @click="toggleTheme()"
                        class="w-11 h-11 rounded-2xl
                               bg-black/5 dark:bg-white/5
                               border border-black/10 dark:border-white/10
                               flex items-center justify-center
                               hover:border-cyan-400 transition"
                    >
                        <span x-show="darkMode">☀</span>
                        <span x-show="!darkMode">🌙</span>
                    </button>

                </div>

                <!-- Mobile Buttons -->
                <div class="md:hidden flex items-center gap-3">

                    <!-- Theme Toggle -->
                    <button
                        @click="toggleTheme()"
                        class="w-10 h-10 rounded-xl
                               bg-black/5 dark:bg-white/5
                               border border-black/10 dark:border-white/10
                               flex items-center justify-center"
                    >
                        <span x-show="darkMode">☀</span>
                        <span x-show="!darkMode">🌙</span>
                    </button>

                    <!-- Hamburger -->
                    <button
                        @click="mobileMenu=!mobileMenu"
                        class="w-10 h-10 rounded-xl
                               bg-black/5 dark:bg-white/5
                               border border-black/10 dark:border-white/10
                               flex flex-col items-center justify-center gap-1.5"
                    >

                        <span
                            :class="mobileMenu
                                ? 'rotate-45 translate-y-2'
                                : ''"
                            class="w-5 h-0.5 bg-current transition duration-300"
                        ></span>

                        <span
                            :class="mobileMenu
                                ? 'opacity-0'
                                : ''"
                            class="w-5 h-0.5 bg-current transition duration-300"
                        ></span>

                        <span
                            :class="mobileMenu
                                ? '-rotate-45 -translate-y-2'
                                : ''"
                            class="w-5 h-0.5 bg-current transition duration-300"
                        ></span>

                    </button>

                </div>

            </div>

            <!-- Mobile Menu -->
            <div
                x-show="mobileMenu"
                x-transition
                x-cloak
                class="md:hidden mt-6 pt-6
                       border-t border-black/10 dark:border-white/10"
            >

                <div class="flex flex-col gap-5 text-sm">

                    <a
                        @click="mobileMenu=false"
                        href="#about"
                        class="hover:text-cyan-400 transition"
                    >
                        About
                    </a>

                    <a
                        @click="mobileMenu=false"
                        href="#skills"
                        class="hover:text-cyan-400 transition"
                    >
                        Skills
                    </a>

                    <a
                        @click="mobileMenu=false"
                        href="#experience"
                        class="hover:text-cyan-400 transition"
                    >
                        Experience
                    </a>

                    <a
                        @click="mobileMenu=false"
                        href="#projects"
                        class="hover:text-cyan-400 transition"
                    >
                        API Integration
                    </a>

                    <a
                        @click="mobileMenu=false"
                        href="#contact"
                        class="hover:text-cyan-400 transition"
                    >
                        Contact
                    </a>

                </div>

            </div>

        </div>

    </div>

</nav>