@extends('principal')

@section('conteudo')

<form action="{{route('pessoa.update', $pessoa->id)}}" method="post">
     @csrf
     @method('PUT')
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{$pessoa->nome}}">
    </div>

    <div class="form-group">
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <option value="O+" @if($pessoa->tipo == 'O+')
                selected
                @endif>O+</option>
            <option value="O-" @if($pessoa->tipo == 'O-')
                selected
                @endif>O-</option>
            <option value="A+" @if($pessoa->tipo == 'A+')
                selected
                @endif>A+</option>
            <option value="A-" @if($pessoa->tipo == 'A-')
                selected
                @endif>A-</option>
            <option value="B+" @if($pessoa->tipo == 'B+')
                selected
                @endif>B+</option>
            <option value="B-" @if($pessoa->tipo == 'B-')
                selected
                @endif>B-</option>
            <option value="AB+" @if($pessoa->tipo == 'AB+')
                    selected
                    @endif>AB+</option>
            <option value="AB-" @if($pessoa->tipo == 'AB-')
                    selected
                    @endif>AB-</option>
        </select>    
    </div>

    <div class="text-right">
    <input type="submit" value="Atualizar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection('conteudo')