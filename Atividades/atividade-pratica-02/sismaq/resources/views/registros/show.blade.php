@extends('principal')

@section ('conteudo')

<h1>Dados do registro</h1>

<p>Data Limite: {{$registro->datalimite}}</p>
<p>Equipamento {{$registro->equipamento->nome}}</p>
<p>Usuário: {{$registro->user->name}}</p>
<p>Descrição: {{$registro->descricao}}</p>
<p>Tipo: @if ($registro->tipo =="1")
    Preventiva
@elseif ($registro->tipo =="2")
    Corretiva
@elseif ($registro->tipo =="3")
    Urgente
@endif</p>


<div style="text-align: center">
    <a href="{{route('registros.edit', $registro->id)}}">Editar</a>

    <a href= "{{route('registros.index')}}">Voltar</a>
</div>


<form name="frmDelete"
    action="{{ route('registros.destroy', $registro->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do registro?');">


    @csrf
    @method('DELETE')
<input type="submit" value="Excluir">


</form>
@endsection