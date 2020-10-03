<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::orderBy('datalimite')->get();
        return view('registros.index', ['registros' => $registros]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $equipamentos = Equipamento::orderBy('nome')->get();
            $users = User::orderBy('id')->get();
            return view('registros.create', ['equipamentos' => $equipamentos, 'users' => $users]);
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
        //dd($request);

        if (Auth::check()) {
            Registro::create($request->all());
            session()->flash('mensagem', 'Manutenção cadastrado com sucesso!');
            return redirect()->route('registros.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        return view('registros.show', ['registro' => $registro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        if (Auth::check()) {
            $equipamentos = Equipamento::orderBy('nome')->get();
            $users = User::orderBy('id')->get();
            return view('registros.edit', ['registro' => $registro, 'equipamentos' => $equipamentos, 'users' => $users]);
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        if (Auth::check()) {
            $registro->fill($request->all());
            //dd($registro->datalimite->format('Y-m-d'));
            $registro->save();

            session()->flash('mensagem', 'Registro atualizado com sucesso!');
            return redirect()->route('registros.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //dd($registro);
        //Validação
        if (Auth::check()) {
            $registro->delete();
            session()->flash('mensagem', 'Registro excluído com sucesso!');
            return redirect()->route('registros.index');
        } else {
            session()->flash('mensagem', 'Operação não permitida!');
            return redirect()->route('login');
        }
    }

  
}
