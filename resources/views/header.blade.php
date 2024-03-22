<header>
    <div class="container">
        <!-- Logo no canto esquerdo -->
        <a href="{{ route('site.home') }}" class="logo"><img class="img" src="{{ Vite::asset('resources/images/logo-completa.png') }}">
        </a>
        <!-- Links no canto direito -->
        <nav>
            <ul class="menu">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><a href="{{ route('site.about-us') }}">Quem Somos</a></li>
                <li><a href="{{ route('site.services') }}">Serviços</a></li>
                <li><a href="{{ route('site.case') }}">Estudo de Caso</a></li>
                <li><a href="{{ route('site.blog') }}">Blog</a></li>
                <li><a href="{{ route('site.contact') }}">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>
