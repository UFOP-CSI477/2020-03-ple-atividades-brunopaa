@extends('principal')

@section ('conteudo')

<h1>Dados da pessoa</h1>

<p>ID: {{ $pessoa->id}}</p>
<p>Nome: {{$pessoa->nome}}</p>
<p>Nome: {{$pessoa->tipo}}</p>


<div style="text-align: center">
    <a href="{{route('pessoa.edit', $pessoa->id)}}">Editar</a>

<a href= "{{route('pessoa.index')}}">Voltar</a>

<form name="frmDelete"
    action="{{ route('pessoa.destroy', $pessoa->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão da pessoa?');">


    @csrf
    @method('DELETE')
<input type="submit" value="Excluir">


</form>
</div>



@endsection