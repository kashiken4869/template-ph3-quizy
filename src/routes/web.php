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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('list');

});

Route::get('hello', function () {
    return view('hello.index');

});



Route::get('hello', 'HelloController@index'); 
Route::post('hello', 'HelloController@post'); 
Route::get('quiz/1', 'QuizController@index1'); 
Route::get('quiz/2', 'QuizController@index2'); 
// Route::get('hello/other', 'HelloController@other'); 
