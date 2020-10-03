@extends('principal')

@section('conteudo')

    <a href="{{ route('registros.create')}}">Cadastrar</a>
    
    <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tabela de manutenções cadastradas para os equipamentos</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">Data Limite</th>
            <th scope="col">Nome do Equipamento</th>
            <th scope="col">Nome do Usuário</th>
            <th scope="col">Tipo da Manutenção</th>
            <th scope="col">Descrição da Manutenção</th>
            <th scope="col">Exibir</th>
    
        </tr>
    </thead>
    <tbody>

        @foreach($registros as $r)
            <tr>
                <td>{{ $r->datalimite }}</td>
                <td>{{ $r->equipamento->nome }} </td>
                <td>{{ $r->user->name }} </td>
                <td>
                    @if ($r->tipo =="1")
                        Preventiva
                    @elseif ($r->tipo =="2")
                        Corretiva
                    @elseif ($r->tipo =="3")
                        Urgente
                    @endif
                
                </td>
                <td>{{ $r->descricao }} </td>
                <td><a href="{{route('registros.show', $r->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

