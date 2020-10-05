@extends('principal')

@section('conteudo')
    
    <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tabela de agendamentos</caption>
    <thead class="thead-dark">
       
        <tr>
            <th scope="col">Data Agendamento (AAAA-MM-DD)</th> 
            <th scope="col">Local de Coleta</th> 
            <th scope="col">Cidade</th>
          {{--   <th scope="col">#</th>  --}}
            <th scope="col">Nome</th>
            <th scope="col">Tipo Sanguíneo</th>
            <th>Exibir</th>

              
            
            
        </tr>
    </thead>
    <tbody>

        @foreach($agendamentos as $a)
            <tr>
                <td>{{ $a->data }}</td>                 
                <td>{{ $a->coleta->nome }} </td>
                <td>{{ $a->coleta->cidade }} </td>
         {{--        <td>{{ $a->pessoa->id }}</td> --}}
                <td>{{ $a->pessoa->nome }} </td>
                <td>{{ $a->pessoa->tipo }} </td>
                <td><a href="{{route('agendamento.show', $a->id)}}">Exibir</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>

    <div class="text-center">
    <a href="{{ route('agendamento.create')}}" class="btn btn-lg btn-primary">Cadastrar</a>
    </div>


@endsection

