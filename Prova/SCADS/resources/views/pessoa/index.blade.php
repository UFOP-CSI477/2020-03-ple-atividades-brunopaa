@extends('principal')

@section('conteudo')

     <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tabela de pessoas</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo Sanguíneo</th>
            <th scope="col">Exibir</th>

        </tr>
    </thead>
    <tbody>

        @foreach($pessoas as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nome }} </td>
                <td>{{ $p->tipo }} </td>
                <td><a href="{{route('pessoa.show', $p->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

