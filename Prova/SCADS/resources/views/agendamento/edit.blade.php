@extends('principal')

@section('conteudo')

<form action="{{ route('agendamento.update', $agendamento->id)}}" method="post">
     @csrf
     @method('PUT')

  
    <div class="form-group">
    <label for="data">Data</label>
    <input type="date" class="form-control" name="data" id="data" value="{{$agendamento->data}}">
    </div>


    <div class="form-group">
        <label for="coleta_id">Local de Coleta</label>
        <select name="coleta_id" id="coleta_id" class="form-control">
        
            @foreach ($coletas as $c)
            <option value="{{$c->id}}"
                
            @if($agendamento->coleta_id == $c->id) 
                selected
            @endif
                    
            >{{$c->nome}}</option>
            @endforeach

        </select>   
        </div>

        <div class="form-group">
            <label for="pessoa_id">Pessoa</label>
            <select name="pessoa_id" id="pessoa_id" class="form-control">
        
                @foreach ($pessoas as $p)
                <option value="{{$p->id}}"
                @if($agendamento->pessoa_id == $p->id)
                selected
                @endif
                >{{$p->nome}}</option>
                    
                @endforeach
        
            </select>
            </div>


    <div class="text-right">
    <input type="submit" value="Atualizar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection('conteudo')