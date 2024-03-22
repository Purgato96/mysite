<script>
    // phone-mask.js
    function maskPhoneNumber(input) {
        var cleaned = ('' + input.value).replace(/\D/g, '');

        if (cleaned.length === 0) {
            input.value = '';
        } else if (cleaned.length <= 2) {
            input.value = '(' + cleaned;
        } else if (cleaned.length <= 7) {
            input.value = '(' + cleaned.slice(0, 2) + ')' + cleaned.slice(2);
        } else if (cleaned.length <= 10) {
            input.value = '(' + cleaned.slice(0, 2) + ')' + cleaned.slice(2, 6) + '-' + cleaned.slice(6);
        } else {
            input.value = '(' + cleaned.slice(0, 2) + ')' + cleaned.slice(2, 7) + '-' + cleaned.slice(7, 11);
        }
    }
</script>

<form action="{{ route('web.store') }}" method="post" id="contactForm">
    @csrf
    <h2>Formulário de Contato</h2>
    <div id="contactFormName">
        <lab for="name">Nome</lab>
        <input id="name" name="name" type="text" value="{{ old('name') }}">
    </div>
    <div>
        <lab for="email">E-mail</lab>
        <input id="email" name="email" type="email" value="{{ old('email') }}">
    </div>
    <div>
        <lab for="phone">Telefone</lab>
        <input id="phone" name="phone" type="text" placeholder="(XX)XXXXX-XXXX" maxlength="15" oninput="maskPhoneNumber(this)" value="{{ old('phone') }}">
    </div>
    <div>
        <lab for="message">Mensagem</lab>
        <textarea id="message" name="message" value="{{ old('message') }}"></textarea>
    </div>
    <button type="submit">Enviar</button>
</form>
