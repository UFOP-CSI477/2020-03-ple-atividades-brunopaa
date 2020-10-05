<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Coleta;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $agendamentos = Agendamento::orderBy('nome')->get();
            return view('agendamento.index', ['agendamentos' => $agendamentos]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $pessoas = Pessoa::orderBy('nome')->get();
            $coletas = Coleta::orderBy('id')->get();
            return view('agendamento.create', ['pessoas' => $pessoas, 'coletas' => $coletas]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            Agendamento::create($request->all());
            session()->flash('mensagem', 'Agendamento cadastrado com sucesso!');
            return redirect()->route('agendamento.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        return view('agendamento.show', ['agendamento' => $agendamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        if (Auth::check()) {
            $pessoas = Pessoa::orderBy('nome')->get();
            $coletas = Coleta::orderBy('id')->get();
            return view('agendamento.edit', ['agendamento' => $agendamento, 'pessoas' => $pessoas, 'coletas' => $coletas]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        if (Auth::check()) {
            $agendamento->fill($request->all());
            //dd($registro->datalimite->format('Y-m-d'));
            $agendamento->save();

            session()->flash('mensagem', 'Agendamento atualizado com sucesso!');
            return redirect()->route('agendamento.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {

        if (Auth::check()) {
            $agendamento->delete();
            session()->flash('mensagem', 'Agendamento excluído com sucesso!');
            return redirect()->route('agendamento.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
}
