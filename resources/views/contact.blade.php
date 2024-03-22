@extends('master')
@section('title', 'Contato | Purgato Technology')
@section('content')
    <div>
        <h1 class="content">Entre em Contato</h1>
        <div class="content">
            <p>Entre em contato conosco se tiver alguma dúvida ou se precisar de mais informações. Estamos aqui para
                ajudar!</p>

            <!-- Informações de Contato -->
            <div class="contact-info">
                <p><strong>Endereço:</strong> Rua Venceslau Brás Pereria Gomes, 769 - Vila Becker, Pirassununga</p>
                <p><strong>E-mail:</strong> contato@purgatotechnology.com</p>
                <p><strong>Telefone:</strong> (19) 99349-2828</p>
                <p><strong>Horário de Funcionamento:</strong> Segunda a Sexta, das 9h às 18h</p>
            </div>

            @include('form')

            <!-- Mapa -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462.4556117886771!2d-47.41613812585298!3d-21.986587914377406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c80168fb550733%3A0x6f6282c4c39318db!2sPurgato%20Technology!5e0!3m2!1spt-BR!2sbr!4v1710784151396!5m2!1spt-BR!2sbr"
                width="850" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
@endsection
