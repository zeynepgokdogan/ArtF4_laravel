<nav class="navbar">
    <a href="{{ route('home') }}" class="navbar-logo">
        <img src="/images/logo.svg" alt="Logo">
    </a>
    <div class="navbar-toggle" onclick="toggleNavbar()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <ul class="navbar-links">
        <li><a href="{{ route('home') }}">Ana Sayfa</a></li>
        <li><a href="{{ route('about') }}">Hakkımızda</a></li>
        <li><a href="{{ route('services') }}">Yeteneklerimiz</a></li>
        <li><a href="{{ route('projects') }}">Projelerimiz</a></li>
        <li><a href="{{ route('contact') }}">İletişim</a></li>
    </ul>
</nav>
