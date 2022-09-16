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

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('show/{id}', 'App\Http\Controllers\UserController@show')->name('users.show');
    Route::get('edit/{id}', 'App\Http\Controllers\UserController@edit')->name('users.edit');
    Route::post('update/{id}', 'App\Http\Controllers\UserController@update')->name('users.update'); 
});

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/matching', 'App\Http\Controllers\MatchingController@index')->name('matching');

Route::group(['prefix' => 'chat', 'middleware' => 'auth'], function () {
    Route::post('show', 'App\Http\Controllers\ChatController@show')->name('chat.show');
    Route::post('chat', 'App\Http\Controllers\ChatController@chat')->name('chat.chat');
});