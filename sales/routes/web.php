<?php
 use App\Http\Controllers\DeshboardController;


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



Route::get('Operator/', function () {
    return view('Operator');
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



Route::get('/class', function () {
    return view('class');
});

Route::get('/Inheritance', function () {
    return view('Inheritance');
});
Route::get('/constantclass', function () {
    return view('constantclass');
});
 
Route::get('/abstractclass', function () {
    return view('abstractclass');
});
  
Route::get('/oop',function(){
        return view('/oop');
});

Route::get('/allwebsitedata',[DeshboardController::class,'listofwebsitedata']);