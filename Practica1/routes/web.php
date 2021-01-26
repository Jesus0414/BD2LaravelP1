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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('nota', function() {
    return 'Aqui se ven las notas.';
});

Route::get('nota/nombre/{id}', function($id) {
    return 'Aqui se le da nombre a las notas con el id: ' .$id;
});

Route::get('nota/crear', function() {
    return 'Aqui se crean las notas.';
});

Route::get('nota/listar', function() {
    return[
        'notas' =>[
            'Bañarme',
            'Hacer la tarea',
            'Dormir',
            ]
        ]; 
});

Route::get('nota/editar', function() {
    return 'Aqui se editan las notas.';
});