@extends('master')
@section('title', 'Home | Purgato Technology')
@section('content')
    <!-- Banner -->
    <section class="banner">
        <h1>Bem-vindo à Nossa Empresa</h1>
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
        <h1>Nosso Blog</h1>
    </section>
@endsection
