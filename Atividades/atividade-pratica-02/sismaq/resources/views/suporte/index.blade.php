@extends('principal')

@section('conteudo')


        <a href="{{ route('equipamentos.index')}}">
                <p>Tabela de Equipamentos</p>
        </a>

        <a href="{{ route('registros.index')}}">
                <p>Manutenções cadastradas para os equipamentos</p>
        </a>


@endsection

