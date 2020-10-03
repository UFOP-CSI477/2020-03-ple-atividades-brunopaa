<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\User;
use App\Models\Registro;


class AController extends Controller
{

        public function index()
        {

                $users = User::orderBy('id')->get();
                $equipamentos = Equipamento::orderBy('nome')->get();
                $registros = Registro::orderBy('datalimite')->get();
                return view('registros.relatorio', ['registros' => $registros, 'equipamentos' => $equipamentos, 'users' => $users]);
        }
}
