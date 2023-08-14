<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\EstabelecimentosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FuncionariosController::class, 'index']);


Route::get('/home', function (){
    return view ('home' , ['xuxu' => 'Xuxa', 'idade' => '99']);
});

Route::get('/index', [FuncionariosController::class, 'index']);

Route::get('/telacadastro', [FuncionariosController::class, 'telacadastro']);

Route::get('/telalogin', [FuncionariosController::class, 'telalogin']);

Route::get('/estabelecimentos', [EstabelecimentosController::class, 'estabelecimentos']);

Route::resource('lojas', EstabelecimentosController::class);


