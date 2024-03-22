@extends('master')
@section('title', 'Home | Purgato Technology')
@section('content')
    <!-- Banner -->
    <section class="banner">
        <h1>Bem-vindo à Nossa Empresa</h1>
    </section>

    <!-- CTAs -->
    <section class="cta">
        <a href="{{ route('site.blog') }}">Visite nosso Blog</a>
        <a href="{{ route('site.about-us') }}">Saiba Mais Sobre Nós</a>
        <a href="{{ route('site.contact') }}">Entre em Contato</a>
    </section>
@endsection
