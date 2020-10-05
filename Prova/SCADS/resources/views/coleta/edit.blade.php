@extends('principal')

@section('conteudo')

<form action="{{ route('coleta.update', $coleta->id)}}" method="post">
     @csrf
     @method('PUT')

  
     <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{$coleta->nome}}">
        </div>
    

        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" value="{{$coleta->cidade}}">
        </div>
        

    <div class="text-right">
    <input type="submit" value="Atualizar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection('conteudo')