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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'can:admin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/home', 'AdminController@index')->name('home');

    Route::group(['prefix' => 'alunos'], function () {
        Route::get('/', 'AlunosController@index')->name('alunos');
        Route::get('/criar-aluno', 'AlunosController@create')->name('novoAluno');
        Route::post('/salvar-aluno', 'AlunosController@save')->name('salvarAluno');
        Route::get('/apagar-aluno/{id}', 'AlunosController@delete')->name('apagarAluno');
        Route::get('/ver-aluno/{id}', 'AlunosController@view')->name('verAluno');

        Route::post('/atualizar-aluno', 'AlunosController@update')->name('atualizarAluno');
    });
});