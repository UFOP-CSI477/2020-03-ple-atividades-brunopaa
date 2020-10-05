<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Coleta1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {

            $coletas = Coleta::orderBy('nome')->get();            
            return view('coleta.index', ['coletas' => $coletas]);
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

            return view('coleta.create');
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
            Coleta::create($request->all());
            session()->flash('mensagem', 'Local de coleta cadastrado com sucesso!');
            return redirect()->route('coleta.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(Coleta $coleta)
    {
        if (Auth::check()) {
            return view('coleta.show', ['coleta' => $coleta]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Coleta $coleta)
    {
        if (Auth::check()) {
            return view('coleta.edit', ['coleta' => $coleta]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coleta $coleta)
    {
        if (Auth::check()) {
            $coleta->fill($request->all());
            $coleta->save();
            session()->flash('mensagem', 'Coleta atualizada com sucesso!');
            return redirect()->route('coleta.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coleta $coleta)
    {
        if (Auth::check()) {
            //Validação
            $agendamento = Agendamento::orderBy('id')->where('coleta_id', $coleta->id)->get();
            //dd($registros);
            if ($agendamento->count() > 0) {
                session()->flash('mensagem', 'Local de coleta não pode ser excluido! Ele está cadastrado em algum agendamento!');
            } else {

                $coleta->delete();
                session()->flash('mensagem', 'Local de coleta excluído com sucesso!');
            }
            return redirect()->route('coleta.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }
}
