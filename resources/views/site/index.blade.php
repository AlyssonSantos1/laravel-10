<h1>Listagem dos Suportes</h1>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descricao</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
        <tr>
            <td>{{  $support->subject  }}</td>
            <td>{{  $support->status  }}</td>
            <td>{{  $support->body  }}</td>
            <td>
                >
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
