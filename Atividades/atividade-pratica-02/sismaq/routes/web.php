<?php

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;
use App\Models\Registro;
use App\Http\Controllers\AController;

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/equipamentos', EquipamentoController::class);
Route::resource('/registros', RegistroController::class);
Route::resource('/users', UserController::class);
Route::resource('/control', AController::class);

Route::get('/admin', function(){

    return view('../admin/index');
})->name('adm')->middleware('auth'); 

Route::get('/suporte', function(){

    return view('../suporte/index');
})->name('suporte');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
