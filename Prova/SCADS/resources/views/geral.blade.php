@extends('principal')

@section('conteudo')

    
    <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tabela de agendamentos</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">Data Agendamento (AAAA-MM-DD)</th> 
            <th scope="col">Local de Coleta</th> 
            <th scope="col">Cidade</th>
            <th scope="col">#</th> 
            <th scope="col">Nome</th>
            <th scope="col">Tipo Sanguíneo</th>
              
            
            
        </tr>
    </thead>
    <tbody>

        @foreach($agendamentos as $a)
            <tr>
                <td>{{ $a->data }}</td>                 
                <td>{{ $a->coleta->nome }} </td>
                <td>{{ $a->coleta->cidade }} </td>
                <td>{{ $a->pessoa->id }}</td>
                <td>{{ $a->pessoa->nome }} </td>
                <td>{{ $a->pessoa->tipo }} </td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

