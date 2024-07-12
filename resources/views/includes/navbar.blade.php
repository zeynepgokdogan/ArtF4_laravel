<nav class="navbar">
    <a href="{{ route('homepage') }}" class="navbar-logo">
        <img src="/images/logo.svg" alt="Logo">
    </a>
    <div class="navbar-toggle" onclick="toggleNavbar()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <ul class="navbar-links">
        <li><a href="{{ route('homepage') }}">Ana Sayfa</a></li>
        <li><a href="{{ route('aboutme') }}">Hakkımızda</a></li>
        <li><a href="{{ route('services') }}">Yeteneklerimiz</a></li>
        <li><a href="{{ route('projects') }}">Projelerimiz</a></li>
        <li><a href="{{ route('contact') }}">İletişim</a></li>
    </ul>
</nav>
