<h1>Listagem dos chamados</h1>

<a href="{{route('support.create')}}">Criar Chamado</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
    </thead>

    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
