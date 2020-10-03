@extends('principal')

@section('conteudo')

<form action="{{ route('registros.store')}}" method="post">
     @csrf
    <div class="form-group">
    <label for="datalimite">Data Limite</label>
    <input type="date" class="form-control" name="datalimite" id="datalimite" >
    </div>

    <div class="form-group">
    <label for="estado_id">Equipamento</label>
    <select name="equipamento_id" id="equipamento_id" class="form-control">

        @foreach ($equipamentos as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
            
        @endforeach

    </select>
    </div>

    <div class="form-group">
        <label for="user_id">Usuário</label>
        <select name="user_id" id="user_id" class="form-control">
    
            @foreach ($users as $u)
            <option value="{{$u->id}}">{{$u->email}}</option>
                
            @endforeach
    
        </select>
        </div>

        <div class="form-group">
            <label for="nome">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
         </div>


         <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" class="form-control">
                <option value="1">Preventiva</option>
                <option value="2">Corretiva</option>
                <option value="3">Urgente</option>               
            </select>
            </div>

    <div class="text-right">
    <input type="submit" value="Cadastrar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection('conteudo')