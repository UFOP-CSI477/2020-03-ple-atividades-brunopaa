@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped table-sm">
    <caption>Tabela usuários</caption>
<thead class="thead-dark">
   
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>

    </tr>
</thead>
<tbody>

    @foreach($users as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }} </td>
            <td>{{ $u->email }} </td>
            <td>{{ $u->password }} </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection
