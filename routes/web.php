<?php

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
	return view('/auth/login');
});;

Auth::routes();

Route::prefix('admin')->group(function (){
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/contato', 'ContatoController@index')->name('contato');
	Route::resource('/curso', 'CursoController');
	Route::resource('/servico', 'ServicoController');
	Route::resource('/professor', 'ProfessorController');
});




