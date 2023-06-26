<h1>Cadastro de Solicitações</h1>

<form action="{{ route('support.store') }}" method="POST">
    @csrf
    <input type="text" placeholder="Assunto" name="subject" id="subject">
    <textarea name="body" id="body" cols="30" rows="10"></textarea>
    <button type="submit">Enviar</button>
</form>
