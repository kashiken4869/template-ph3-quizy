<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('list');

// });

// Route::get('hello', function () {
//     return view('hello.index');

// });

use App\Http\Middleware\HelloMiddleware;

Route::get('quiz', 'QuizController@index_links');
Route::get('quiz/{id?}', 'QuizController@index_questions');

Route::get('admin/big_questions', 'BigQuestionsController@index_links');
Route::get('admin/big_questions', 'BigQuestionsController@index_links')
    ->middleware('auth');
Route::post('admin/big_questions', 'BigQuestionsController@index_links');
Route::get('admin/big_questions/add', 'BigQuestionsController@add_title');
Route::post('admin/big_questions/add', 'BigQuestionsController@create_title');
Route::get('admin/big_questions/edit/{id?}', 'BigQuestionsController@edit_title');
Route::post('admin/big_questions/edit/{id?}', 'BigQuestionsController@update_title');
Route::get('admin/big_questions/delete/{id?}', 'BigQuestionsController@delete_title');
Route::post('admin/big_questions/delete/{id?}', 'BigQuestionsController@remove_title');

Route::post('admin/small_questions/{id?}', 'SmallQuestionsController@index_questions');
Route::get('admin/small_questions/{id?}', 'SmallQuestionsController@index_questions');
Route::get('admin/small_questions/{id?}/add', 'SmallQuestionsController@add_question');
Route::post('admin/small_questions/{id?}/add', 'SmallQuestionsController@create_question');
Route::get('admin/small_questions/delete/{id?}', 'SmallQuestionsController@delete_question');
Route::post('admin/small_questions/delete/{id?}', 'SmallQuestionsController@remove_question');

Route::post('admin/choices/{id?}', 'ChoicesController@index_choices');
Route::get('admin/choices/{id?}', 'ChoicesController@index_choices');

Route::get('admin/choices/{id?}/add', 'ChoicesController@add_choice');
Route::post('admin/choices/{id?}/add', 'ChoicesController@create_choice');

Route::get('admin/choices/delete/{id?}', 'ChoicesController@delete_choice');
Route::post('admin/choices/delete/{id?}', 'ChoicesController@remove_choice');

Route::get('admin/choices/edit/{id?}', 'ChoicesController@edit_choice');
Route::post('admin/choices/edit/{id?}', 'ChoicesController@update_choice');




Route::get('hello', 'HelloController@index');
Route::get('hello', 'HelloController@index')
    ->middleware('auth');
Route::post('hello', 'HelloController@post'); 
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');
Route::get('hello/show', 'HelloController@show');
Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');
Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
