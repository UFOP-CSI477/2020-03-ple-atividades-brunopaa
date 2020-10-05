@extends('principal')

@section ('conteudo')

<h1>Dados do local de coleta</h1>

<p>Id: {{$coleta->id}}</p>
<p>Nome: {{$coleta->nome}}</p>
<p>Cidade: {{$coleta->cidade}}</p>





        {{-- <a href="{{route('coleta.edit', $coleta->id)}}">Editar</a> --}}

        <a href= "{{route('coleta.index')}}">Voltar</a>

        <form name="frmDelete"
            action="{{ route('coleta.destroy', $coleta->id)}}"
            method="post"
            onsubmit="return confirm('Confirma a exclusão do ponto de coleta?');">


            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">


        </form>




@endsection