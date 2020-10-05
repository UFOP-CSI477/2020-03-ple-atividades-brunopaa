@extends('principal')

@section ('conteudo')

<h1>Dados do agendamento</h1>

<p>Data Agendamento(AAAA-MM-DD): {{$agendamento->data}}</p>
<p>Local de Coleta: {{$agendamento->coleta->nome}}</p>
<p>Cidade: {{$agendamento->coleta->cidade}}</p>
<p>Nome: {{$agendamento->pessoa->nome }}</p>
<p>Tipo Sanguíneo: {{$agendamento->pessoa->tipo }}</p>


<div style="text-align: center">
    <a href="{{route('agendamento.edit', $agendamento->id)}}">Editar</a>

    <a href= "{{route('agendamento.index')}}">Voltar</a>
    <form name="frmDelete"
    action="{{ route('agendamento.destroy', $agendamento->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do agendamento?');">


    @csrf
    @method('DELETE')
<input type="submit" value="Excluir">


</form>
</div>



@endsection