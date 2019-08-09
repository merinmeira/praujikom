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


Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'user','middleware' => ['auth','role:superadmin']], function(){
    Route::get('/', function(){
        return 'ini halaman Backend';
    });
    Route::resource('user','UserController');
}); 