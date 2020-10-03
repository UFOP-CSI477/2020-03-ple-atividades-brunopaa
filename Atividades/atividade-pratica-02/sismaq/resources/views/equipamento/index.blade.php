@extends('principal')

@section('conteudo')

    <a href="{{ route('equipamentos.create')}}">Cadastrar</a>

    <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tabela de equipamentos</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Exibir</th>
    
        </tr>
    </thead>
    <tbody>

        @foreach($equipamentos as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->nome }} </td>
                <td><a href="{{route('equipamentos.show', $e->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

