@extends('principal')

@section('conteudo')
   
    <table class="table table-bordered table-hover table-striped table-sm">
        <caption>Tabela locais de coleta</caption>
    <thead class="thead-dark">
       
        <tr>
            <th>#</th>
            <th scope="col">Nome</th>
            <th scope="col">Cidade</th>
        {{--     <th scope="col">Exibir</th> --}}
    
        </tr>
    </thead>
    <tbody>

        @foreach($coletas as $c)
            <tr>
                <td>{{ $c->id}}</td>
                <td>{{ $c->nome }}</td>
               

                <td>{{ $c->cidade }} </td>
          {{--       <td><a href="{{route('coleta.show', $c->id)}}">Exibir</a></td> --}}
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

