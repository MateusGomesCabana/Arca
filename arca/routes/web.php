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


Route::get('/', ['uses'=>'HomeController@menuInicial','as'=>'welcome']);
//Empresa 
Route::get('/Empresa', ['uses'=>'api\EmpresaController@index','as'=>'empresa.index']);
//Cadastrar empresa
Route::get('/home', 'HomeController@index')->name('home');
//salvar uma empresa
Route::post('/Empresa/save', ['uses'=>'HomeController@save','as'=>'home.save']);
//visualizar empresa especifica
Route::get('/Empresa/search/{id}', ['uses'=>'api\EmpresaController@search','as'=>'empresa.view']);
Auth::routes();
Route::put('/Empresa/search', ['uses'=>'api\EmpresaController@search','as'=>'empresa.search']);
