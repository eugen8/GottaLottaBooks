<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
    API Routes
*/
Route::get('books', 'BooksController@index');
Route::get('books/{book}', 'BooksController@show');
Route::post('books', 'BooksController@store');
Route::put('books/{book}', 'BooksController@update');
Route::delete('books/{book}', 'BooksController@delete');