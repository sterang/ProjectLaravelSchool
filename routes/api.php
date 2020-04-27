<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', 'RegisterController@register');
Route::post('/registerMateria', 'SubjectController@store');
Route::post('/datasMateria', 'SubjectController@loadMaterias');
Route::post('/datasMateriaAll', 'SubjectController@loadMateriasAll');
Route::post('/datasMateriaEspecific', 'SubjectController@loadMateriasEspecifica');
Route::post('/registerMateriaEst', 'SubjectEstudianteController@storeEst');
Route::post('/datasMateriaEstDoc', 'SubjectEstudianteController@loadMateriasDoc');
Route::post('/datasMateriaEst', 'SubjectEstudianteController@loadMateriasEst');
Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout');