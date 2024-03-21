@extends('master')
@section('title', 'Home | Purgato Technology')
@section('content')
    <!-- Banner -->
    <section class="banner">
        <h1>Bem-vindo à Nossa Empresa</h1>
    </section>

    <!-- CTAs -->
    <section class="cta">
        <a href="{{ route('web.blog') }}">Visite nosso Blog</a>
        <a href="{{ route('web.about-us') }}">Saiba Mais Sobre Nós</a>
        <a href="{{ route('web.contact') }}">Entre em Contato</a>
    </section>

    <section class="banner">
        <h1>Nosso</h1>
        <br/>
        <section class="cta">
        <a href="{{ route('web.blog') }}">Blog</a>
        </section>
    </section>
@endsection
