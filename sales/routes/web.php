<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('about/', function () {
    return view('about');
});

// name Route
Route::get('posttt/', function () {
    return view('post');
})->name('post');


// route group .. Prefix Route
route::prefix('page')->group(function(){

            route::get('/gellary', function(){
                    return "<h1>Gellary Page</h1>";
            });

            route::get('/vedio', function(){
                return "<h1>vedio Page</h1>";
              });

        route::get('/audio', function(){
            return "<h1>audio Page</h1>";
         });


});