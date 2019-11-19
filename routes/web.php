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
//     return view('home');
// });



Auth::routes();

Route::get('/', 'LandingController@index')->name('landingPage');
Route::get('/home', 'LandingController@index')->name('landingPage');
Route::get('/logout', 'HomeController@logout');


Route::get('/profile', function () {
    return view('user.profileEdit');
});
