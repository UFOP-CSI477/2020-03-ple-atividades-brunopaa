@extends('principal')

@section('conteudo')
        
        <a href="{{ route('pessoa.index')}}">
            <p>Relatório de pessoas</p>
        </a>

        <a href="{{ route('pessoa.create')}}">
            <p>Cadastro de pessoa</p>
        </a>

        <a href="{{ route('coleta.index')}}">
            <p>Relatório de locais de coleta</p>
        </a>

        <a href="{{ route('coleta.create')}}">
            <p>Cadastro de locais de coleta</p>
        </a>

        <a href="{{ route('agendamento.index')}}">
                <p>Controle de agendamentos</p>
        </a>

   
@endsection
