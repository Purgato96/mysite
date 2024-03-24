@extends('master')
@section('title', 'Home | Purgato Technology')
@section('content')
    <!-- Banner -->
    <section class="banner">
        <h1>Carrosel de imagens com CTA</h1>
    </section>

    <!-- CTAs -->
    <section class="cta">
        <a href="{{ route('site.blog') }}">Blog</a>
        <a href="{{ route('site.about-us') }}">Quem Somos</a>
        <a href="{{ route('site.services') }}">Serviços</a>
        <a href="{{ route('site.case') }}">Estudo de Caso</a>
        <a href="{{ route('site.contact') }}">Contato</a>
    </section>

    <section class="banner">
        <h1>Carrossel de Serviços</h1>
    </section>

<section class="banner">
    <h1>Div com mais informações de serviços</h1>
</section>

<section class="banner">
    <h1>Blog com os 3 posts mais recentes</h1>
</section>

<section class="banner">
    <h1>Chamada para contato</h1>
</section>
@endsection
