<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
class DeshboardController extends Controller
{
    public function listofwebsitedata(){
        
       $grade = DB::select('select * from grade');


       dd($grade);

    }
}
