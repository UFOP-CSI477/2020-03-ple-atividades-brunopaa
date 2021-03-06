<?php

use Illuminate\Support\Facades\Route;

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
use App\Models\Estado;
use App\Models\Produto;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\CompraController;

Route::get('/', function () {
    return view('principal');

})->name('principal');

Route::resource('/estados', EstadoController::class);
Route::resource('/produtos', ProdutoController::class);
Route::resource('/cidades', CidadeController::class);
Route::resource('/pessoas', PessoaController::class);
Route::resource('/compras', CompraController::class);


/*
Route::get('/ola', function () {
    return 'Olá,mundo!';
});

Route::get('/estados/todos', function () {
    $estados = Estado::all();
    return view('lista', ['dados' => $estados]);
});

Route::get('/produtos/todos', function () {
    $produtos = Produto::all();
    return view('lista', ['dados' => $produtos]);
});

Route::get('/estados/{id}', function ($id) {

    $estado = Estado::findOrFail($id);

    if ($estado == null) {
        return 'ID Inválido';
    }

    return view('lista',['dados'=>$estado]);
});

Route::get('/produtos/{id}', function ($id) {

    $produto = Produto::findOrFail($id);

    if ($produto == null) {
        return 'ID Inválido';
    }

    return view('lista',['dados'=>$produto]);
});
*/
