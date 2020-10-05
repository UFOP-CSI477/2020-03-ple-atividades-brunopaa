@extends('principal')

@section('conteudo')

<form action="{{ route('pessoa.store')}}" method="post">
     @csrf
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo Sanguíneo</label>
            <select name="tipo" id="tipo">
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">B+</option>
                <option value="AB-">B-</option>
            </select>           
     
    </div>
    <div class="text-right">
    <input type="submit" value="Cadastrar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection('conteudo')