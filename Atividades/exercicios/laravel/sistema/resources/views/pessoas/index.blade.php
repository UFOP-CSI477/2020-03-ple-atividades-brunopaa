@extends('principal')

@section('conteudo')

    <a href="{{ route('pessoas.create')}}">Cadastrar</a>

    <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Exibir</th>
        </tr>
    </thead>
    <tbody>

        @foreach($pessoas as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nome }} </td>
                <td>{{ $p->cidade->nome }}</td>
                <td><a href="{{route('pessoas.show', $p->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

