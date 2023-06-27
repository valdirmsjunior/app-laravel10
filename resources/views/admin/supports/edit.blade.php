<h1>Editar Chamado</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('support.update', $support->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Assunto" name="subject" id="subject" value="{{ $support->subject }}">
    <textarea name="body" id="body" cols="30" rows="10">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>
