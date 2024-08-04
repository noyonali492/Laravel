<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
class DeshboardController extends Controller
{
    public function listofwebsitedata(){
        
       // $grade = DB::select('select * from grade');

       //$insertgrade= DB::insert("INSERT into grade(name,basic)VALUES('noyonCEO','50000')");
       // $updategrade = DB::update("UPDATE grade SET name='noeo' WHERE id=0");

        $deletegrade= DB::delete("DELETE FROM `grade` WHERE id=0 ");

       dd($deletegrade);

    }
}
