<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('about/', function () {
    return view('about');
});
Route::get('posttt/', function () {
    return view('post');
})->name('post');
