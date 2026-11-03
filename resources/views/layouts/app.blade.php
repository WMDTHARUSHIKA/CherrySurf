<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CherrySurf — stories, experiences and voices from the surfing community.">
    <title>@yield('title', 'CherrySurf') | CherrySurf</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('site-icon.svg') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ route('home') }}" aria-label="CherrySurf home">
            <span class="brand-mark">C</span>
            <span>Cherry<span class="brand-light">Surf</span></span>
        </a>

        <button class="menu-toggle" type="button" aria-label="Toggle navigation"
                aria-expanded="false" aria-controls="main-navigation">
            <span></span><span></span><span></span>
        </button>

        <nav class="navigation" id="main-navigation">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Surfing</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact & Feedback</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <a class="footer-brand" href="{{ route('home') }}">CherrySurf🫶</a>
        <p>Share the waves. Share your voice.</p>
        <small>&copy; {{ date('Y') }} CherrySurf. All rights reserved.</small>
    </footer>

    <script>
        const menuButton = document.querySelector('.menu-toggle');
        const navigation = document.querySelector('.navigation');

        menuButton.addEventListener('click', () => {
            const isOpen = navigation.classList.toggle('open');
            menuButton.setAttribute('aria-expanded', String(isOpen));
        });
    </script>
</body>
</html>
