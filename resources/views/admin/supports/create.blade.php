<h1>Cadastro de Solicitações</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('support.store') }}" method="POST">
    @csrf
    <input type="text" placeholder="Assunto" name="subject" id="subject" value="{{old('subject')}}" />
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>
