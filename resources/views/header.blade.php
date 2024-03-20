<header>
    <div class="container">
        <!-- Logo no canto esquerdo -->
        <a href="{{ route('web.home') }}" class="logo"><img class="img" src="{{ Vite::asset('resources/images/logo-completa.png') }}">
        </a>
        <!-- Links no canto direito -->
        <nav>
            <ul class="menu">
                <li><a href="{{ route('web.home') }}">Home</a></li>
                <li><a href="{{ route('web.about-us') }}">Quem Somos</a></li>
                <li><a href="{{ route('web.blog') }}">Blog</a></li>
                <li><a href="{{ route('web.contact') }}">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>
