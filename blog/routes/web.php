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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/hello',function(){
    return 'Hello World!';
});*/
//Route::get('hello', 'Hello@index');
Route::get('/hello/{name?}', 'Hello@show');
Route::get('user', 'User@index');
Route::get('blog/create', 'Blog@create');
Route::post('blog/store/{id?}', 'Blog@store')->name('store');
//->middleware('UserForm');
Route::get('user/delete/{id}', 'User@delete');
Route::resource('photos', 'photoController');
/*Route::get('/hello', function () {
	return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});*/
Route::post('changelocale', 'Translation@changeLocale')->name('changelocale');
Route::get('blog', 'Blog@index');
Route::get('blog/delete/{id}', 'Blog@delete');
Route::get('blog/edit/{id}', 'Blog@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
