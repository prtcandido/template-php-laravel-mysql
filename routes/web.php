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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TesteController;
Route::get('/abc/{valor}',[TesteController::class,'f1']);
Route::get('/xyz',[TesteController::class,'f2']);

Route::get('/gravar',[TesteController::class,'gravar']);
Route::get('/ler',[TesteController::class,'ler']);

use App\Http\Controllers\FuncionarioController;
Route::get( '/funcionario/create' , [FuncionarioController::class,'create'] );
Route::post( '/funcionario' , [FuncionarioController::class,'store'] );
Route::get( '/funcionario' , [FuncionarioController::class,'index'] );
