<?php


Route::get('/', function(){
    return view('welcome');
});

//Route::get('/empleados', 'EmpleadosController@index');

//Route::get('/empleados/create', 'EmpleadosController@create');

Route::resource('empleados', 'EmpleadosController');
