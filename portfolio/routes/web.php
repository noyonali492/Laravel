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


Route::get('/home', function () {

    $user= ['noyon','alim'];
    return view('home',compact('user'));

});

// {{-- 
//     Route::get('/home/{id}', function ($user) {

//         //$user= "noyon";
//         return view('home',compact('user'));
    
//     });
    
//     --}}


//Route::view('/home','home');

//Route::view('post','/post/post');
// Route::get('/post/post', function () {
//     return view('post');
// });

// Route::get('/post/{id?}/comment/{comment}', function (string $id , string $comment) {
//     return "<h1>Post Id ". $id ."</h1><h2> Comment". $comment ."</h2>";
// });
Route::get('/post/{id?}/{name}', function (string $id, string $name) {
    //return "<h1>Post Id ". $id ."</h1><h1>Post Id ". $n ."</h1>";
    return view('post',['id'=>$id, 'name'=>$name]);
});


//Route::get('/protfolio','UserController@show');


Route::get('array/', function () {

    $username= "Noyon";
    $email= "noyonahmed@gmail.com";
    $cell="01797445516";
    $salary= "35000";
    $brother="Naim";


//$personalinfo=array("Noyon","noyonahmed@gmail.com","01797445516","35000","naim");

$personalinfo=array(
    'key'=>"value",
    'email'=>"noyonahmed@gmail.com",
    'cell'=>"01797445516",
    'salary'=>"35000",
    'brother'=> array(
        'username'=>"molla",
        'class'=>"Inter",
        'village'=>"Dapunia"
    ),
);

return view('array',compact('personalinfo'));

// return view('array')->with('username',$username);
// return view('array')->with('username',$username)->with('email',$email);
});


Route::get('/protfolio', function () {
    return view('pages.portfolio');
});
Route::get('/about', function () {
    return view('pages.about');
});


