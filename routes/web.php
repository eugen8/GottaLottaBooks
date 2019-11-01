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

Route::get('/login1', function(){
    return "<html> <body>hello</body> </html>";
});

Route::get('/login2', function(){
    return ['hello'=>'1234', 'abc'=>'abc' ];
});


