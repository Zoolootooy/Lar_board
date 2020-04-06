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

Route::get('/', 'PostController@index')->name('main');
Route::get('/123', 'PostController@MAP');
Route::get('/new', 'PostController@showCreateForm');
Route::get('/post/{id}', 'PostController@showPost');
Route::get('/edit/{id}', 'PostController@showEditForm');
Route::post('/saveNew', 'PostController@saveNew')->name('saveNew');
Route::post('/saveEdited', 'PostController@saveEdited')->name('saveEdited');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
