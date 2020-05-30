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

Route::post('/register', 'RegisterController@register');
Route::post('/login', 'LoginController@authenticate');
Route::get('/gradebooks', 'GradebooksController@index');
Route::get('/gradebooks/single/{id}', 'GradebooksController@show');
Route::post('/gradebooks/add', 'GradebooksController@store');
Route::get('/professors', 'ProfessorsController@index');
Route::get('/professors/single/{id}', 'ProfessorsController@show');
Route::get('/gradebooks/search/{term}', 'GradebooksController@search');
Route::get('/professors/search/{term}', 'ProfessorsController@search');







