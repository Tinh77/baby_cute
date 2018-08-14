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

<<<<<<< HEAD
Route::get('/', function () {
    return view('masterLayout.layout.masterLayout');
});

Route::get('/login', function () {
    return view('masterLayout.content.login');
=======
Route::get('/gift', function () {
    return view('masterLayout.content.list');
>>>>>>> 59912c54dc2a5cd4f73fed0e184f9a5d25cbc019
});

