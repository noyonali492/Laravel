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

/*
Route::get('/home', function () {
    return view('home');
});
*/

Route::view('/home','home');

//Route::view('post','/post/post');
// Route::get('/post/post', function () {
//     return view('post');
// });

Route::get('/post/{id?}', function (string $id = null ) {
    return "<h1>Post Id ". $id ."</h1>";
});
