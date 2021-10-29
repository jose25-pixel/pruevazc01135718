<?php

use Illuminate\Support\Facades\Route;

/*ROUTES*/Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','HomeController@index')->name('home');

Route::get('/administrador','UsuariosController@index')->name('admin.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**** ***********************Vistas del adminitrador*******************************/
Route::get('/usuario', 'UserController@index')->name('user.index');
Route::get('/usuario/nue', 'UserController@create')->name('user.create');
Route::post('/usuario', 'UserController@store')->name('user.store');
Route::get('/usuario/edit/{user}', 'UserController@edit')->name('user.edit');
Route::put('/usuario/{user}', 'UserController@update')->name('user.update');
Route::delete('/usuario/{user}', 'UserController@destroy')->name('user.destroy');


/**** ***********************Vistas de cursos*******************************/
Route::get('/cursos', 'CursoController@index')->name('curso.index');
Route::get('/cursos/nue', 'CursoController@create')->name('curso.create');
Route::post('/cursos', 'CursoController@store')->name('curso.store');
Route::get('/cursos/edit/{curso}', 'CursoController@edit')->name('curso.edit');

Route::put('/cursos/{curso}', 'CursoController@update')->name('curso.update');

Route::delete('/cursos/{curso}', 'CursoController@destroy')->name('curso.destroy');


/**** ***********************Vistas del docente*******************************/

Route::get('/docente', 'DocenteController@index')->name('docente.index');
Route::post('/docente', 'DocenteController@store')->name('docente.store');
Route::get('/docente/edit/{curso}', 'DocenteController@edit')->name('docente.edit');

Route::put('/docente/{curso}', 'DocenteController@update')->name('docente.update');

Route::delete('/docente/{curso}', 'DocenteController@destroy')->name('docente.destroy');

/***
 * NOTA
 * 
 */
Route::get('/notas/{curso}', 'NotaController@index')->name('nota.index');
Route::get('/notas/edit/{nota}', 'NotaController@edit')->name('nota.edit');
Route::put('/notas/{nota}/{curso}', 'NotaController@update')->name('nota.update');

/***
 * 
 * ESTUDIANTE
 */
Route::get('/estudiante', 'EstudianteController@index')->name('estudiante.index');
Route::post('/estudiante', 'EstudianteController@store')->name('estudiante.store');
Route::get('/estudiante/mis-notas', 'EstudianteController@notas')->name('estudiante.show');
