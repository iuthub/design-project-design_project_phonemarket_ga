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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PhonesController@welcome');


Route::get('/home', function () {
    return view('home');
});


Route::post('/insert', 'PhonesController@add');
Route::get('/delete/{id}', 'PhonesController@delete');

Auth::routes();

Route::get('/home', 'PhonesController@home')->name('home');

Route::get('/create', function(){
	return view('create');
});

Route::post('/insert', 'PhonesController@add');

Auth::routes();

