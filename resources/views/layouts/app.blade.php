<!DOCTYPE html>
<html lang="en"
      x-data="themeHandler()"
      x-init="initTheme()"
      :class="{ 'dark': darkMode }">

<head>
    @include('partials.head')
</head>

<body class="bg-white dark:bg-[#0B0F19] text-black dark:text-white overflow-x-hidden transition-colors duration-300">

    <!-- Floating Gradient -->
    <div class="fixed top-[-200px] left-[-200px] w-[500px] h-[500px] bg-cyan-500/20 rounded-full blur-3xl"></div>

    <div class="fixed bottom-[-200px] right-[-200px] w-[500px] h-[500px] bg-purple-500/20 rounded-full blur-3xl"></div>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>