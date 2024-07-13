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




Route::get('/about', function () {
    return view('pages.about');
});

