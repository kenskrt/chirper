<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-bg text-text font-sans antialiased">

    <!-- NAVBAR -->
    <nav class="sticky top-0 z-50 backdrop-blur bg-bg/80 border-b border-border">
        <div class="max-w-6xl mx-auto px-6 h-14 flex items-center justify-between">

            <a href="#hero" class="font-semibold tracking-tight">
                my<span class="text-accent">.</span>portfolio
            </a>

            <div class="hidden md:flex items-center gap-6 text-sm">
                <a href="#about" class="text-muted hover:text-text transition">About</a>
                <a href="#skills" class="text-muted hover:text-text transition">Skills</a>
                <a href="#projects" class="text-muted hover:text-text transition">Projects</a>
                <a href="#contact" class="text-muted hover:text-text transition">Contact</a>

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main>
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <footer class="border-t border-border text-center text-sm text-muted py-8 px-6">
        <p>© {{ date('Y') }} Kenjie G. Mañego. All rights reserved.</p>
    </footer>

</body>
</html>