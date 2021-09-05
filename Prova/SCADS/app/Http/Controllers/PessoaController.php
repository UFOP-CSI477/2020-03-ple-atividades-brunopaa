<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PessoaController extends Controller
{
 
    public function index()
    {
        if (Auth::check()) {

            $pessoas = Pessoa::orderBy('nome')->get();
            return view('pessoa.index', ['pessoas' => $pessoas]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function create()
    {
        if (Auth::check()) {

            return view('pessoa.create');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function store(Request $request)
    {
        //dd($request);

        if (Auth::check()) {
            Pessoa::create($request->all());
            session()->flash('mensagem', 'Pessoa cadastrada com sucesso!');
            return redirect()->route('pessoa.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

  
    public function show(Pessoa $pessoa)
    {
        if (Auth::check()) {
            return view('pessoa.show', ['pessoa' => $pessoa]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

 
    public function edit(Pessoa $pessoa)
    {
        if (Auth::check()) {
            return view('pessoa.edit', ['pessoa' => $pessoa]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function update(Request $request, Pessoa $pessoa)
    {
        if (Auth::check()) {
            $pessoa->fill($request->all());
            $pessoa->save();
            session()->flash('mensagem', 'Pessoa atualizada com sucesso!');
            return redirect()->route('pessoa.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    public function destroy(Pessoa $pessoa)
    {
        if (Auth::check()) {
            //Validação
            $agendamento = Agendamento::orderBy('id')->where('pessoa_id', $pessoa->id)->get();
            //dd($registros);
            if ($agendamento->count() > 0) {
                session()->flash('mensagem', 'Pessoa não pode ser excluida! Ela está cadastrado em algum agendamento!');
            } else {

                $pessoa->delete();
                session()->flash('mensagem', 'Pessoa excluído com sucesso!');
            }
            return redirect()->route('pessoa.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
}
