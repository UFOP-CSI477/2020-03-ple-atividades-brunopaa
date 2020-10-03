@extends('principal')

@section('conteudo')

       
        <div class="col">
           <p> <h1> Relatório de Manutenção</h1></p>
        </div>
        

    @foreach ($equipamentos as $e)

    <h1>{{$e->nome}}</h1>

    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">

       

        <thead>

            <tr class="thead-dark">
                <th>#</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Descrição</th>
                <th>Data Limite</th>
                <th>Tipo</th>
               
                
               
            </tr>
        </thead>

        <tbody>

            @php $aux = 0

            @endphp
            @foreach ($registros as $r)
                @if($e->id == $r->equipamento_id)  
                <tr>
                    @php  $aux = $aux + 1 @endphp
                <td> {{$r->id}}</td>  

                <td> {{$r->equipamento->nome}}</td>

                <td> {{$r->user->name}} - ({{$r->user->email}})</td> 

                <td> {{$r->descricao}}</td> 

                <td> {{$r->datalimite}}</td> 
                <td> @if( $r->tipo == 1)
                    Preventiva
                    @elseif($r->tipo == 2)
                        Corretiva                                    
                    @elseif($r->tipo == 3)
                        Urgente
                    @endif
                </td> 
                
                
                </tr>
                @endif
            @endforeach
         
        </tbody>
        <tfoot>
            
            <p>Quantidade de Registros: {{$aux}}</p>    
        </tfoot>

       

    </table>
</div>



@endforeach 

@endsection