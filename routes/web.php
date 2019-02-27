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

Route::get('/artists', 'ArtistsController@index');
Route::get('/artists/{id}/albums', 'ArtistsController@albums');
Route::get('/albums/{id}/reviews', 'AlbumsController@index');


Route::get('/albums/{id}/reviews/new', 'AlbumsController@create');
Route::post('/albums/{id}/reviews', 'AlbumsController@store');
