<h1>Listagem dos suportes</h1>

<a href="{{ route('supports.create') }}">Cria Dúvida</a>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support['subject'] }}</td>
                <td>{{ $support['status'] }}</td>
                <td>{{ $support['body'] }}</td>
                <td>
                    <a href="{{ route('supports.show', $support['id']) }}">ir</a>
                    <a href="{{ route('supports.edit', $support['id']) }}">editar</a>
                    <form action="{{ route('supports.destroy', $support['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>