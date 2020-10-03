@extends('principal')

@section('conteudo')


        <a href="{{ route('equipamentos.index')}}">
                <p>Tabela de Equipamentos</p>
        </a>

        <a href="{{ route('registros.index')}}">
                <p>Manutenções cadastradas para os equipamentos</p>
        </a>

        <a href="{{ route('users.index')}}">
                <p>Relatório de Usuários</p>
        </a>

        <a href="{{ route('control.index')}}">
                <p>Relatório de Manutenções</p>
        </a>

        <a href="{{ route('register')}}">
                <p>Cadastrar NOVO USUÁRIO</p>
        </a>



@endsection

