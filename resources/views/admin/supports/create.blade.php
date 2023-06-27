<h1>Cadastro de Solicitações</h1>

<x-alert />

<form action="{{ route('support.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form>
