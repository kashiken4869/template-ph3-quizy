<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('list');

// });

// Route::get('hello', function () {
//     return view('hello.index');

// });

use App\Http\Middleware\HelloMiddleware;

Route::get('quiz', 'QuizController@index_links');
Route::get('quiz/{id?}', 'QuizController@index_questions');
// Route::get('hello', 'HelloController@index');
// Route::post('hello', 'HelloController@post'); 
// Route::get('quiz/1', 'QuizController@index1'); 
// Route::get('quiz/2', 'QuizController@index2'); 
// Route::get('hello/add', 'HelloController@add');
// Route::post('hello/add', 'HelloController@create');
// Route::get('hello/edit', 'HelloController@edit');
// Route::post('hello/edit', 'HelloController@update');
// Route::get('hello/del', 'HelloController@del');
// Route::post('hello/del', 'HelloController@remove');
// Route::get('hello/show', 'HelloController@show');


