<?php

use Illuminate\Support\Facades\Route;
use App\Models\Agendamento;
use App\Models\Coleta;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\Coleta1Controller;
use App\Http\Controllers\PessoaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/adm', function(){

    return view('adm');
})->name('adm')->middleware('auth');

Route::get('/geral', function(){

    $agendamentos = Agendamento::orderBy('data', 'desc')->orderBy('nome', 'asc')->get();
    return view('geral',['agendamentos'=> $agendamentos]);
});



Route::resource('/agendamento', AgendamentoController::class);
Route::resource('/coleta', Coleta1Controller::class);
Route::resource('/pessoa', PessoaController::class);







Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
