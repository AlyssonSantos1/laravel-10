<h1>Listagem dos Suportes</h1>
{{--
{{ $xss }} --}}

<a href="{{  route('support.create')  }}">Criar Duvida</a>


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
                <a href="{{ route('support.show', $support->id) }}">ir</a>
                <a href="{{ route('support.edit', $support->id) }}">Editar</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@foreach($supports as $support)
{{ $support->subject }}
@endforeach
