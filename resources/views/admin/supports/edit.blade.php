<h1>Editar Chamado</h1>

<x-alert />

<form action="{{ route('support.update', $support->id) }}" method="POST">
    @method('PUT')
    @include('admin.supports.partials.form')
</form>
