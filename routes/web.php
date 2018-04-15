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

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// invokeのテスト
Route::get('invoke', 'SingleActionController');


Route::get('hello', 'HelloController@index')
	->middleware('helo');

//フォームのバリデーションを確認
Route::get('form_test', 'FormTestController@index');
Route::post('form_test', 'FormTestController@post');


Route::get('test', 'TestServiceController@index');
