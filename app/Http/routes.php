<?php

Route::get('/', 'LoginController@logueo');
Route::get('/registro', 'LoginController@registro');

Route::group(['middleware' =>['auth','roles']], function() {
    //funcinalidades de la sala
    Route::get('/sala', 'ReservaController@verPuestos');

    Route::post('/ocupadas', 'ReservaController@ocupados');

    Route::post('/rojo', 'ReservaController@despegar');

    Route::post('/azul', 'ReservaController@pegar');
    
    Route::post('/cerrar', 'LoginController@cerrar');
    
    Route::get('/configurar', 'TransController@mostrar');
    
    Route::get('/pagar','TransController@total');
    
    Route::post('/actualizarCosto', 'TransController@Costo');
});



// Authentication routes...
Route::post('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



