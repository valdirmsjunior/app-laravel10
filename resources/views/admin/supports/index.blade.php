<h1>Listagem dos chamados</h1>

<a href="{{ route('support.create') }}">Criar Chamado</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Detalhes</th>
    </thead>

    <tbody>
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td> <a href="{{ route('support.show', $support->id) }}">Detalhes</a></td>
                <td> <a href="{{ route('support.edit', $support->id) }}">Editar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination :paginator="$supports" :appends="$filter" />
