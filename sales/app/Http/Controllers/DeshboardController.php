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

       // $deletegrade= DB::delete("DELETE FROM `grade` WHERE id=0 ");

      // $alldata = DB::table('grade')->get();
      // $alldata =DB::table('grade')->first();
      // $alldata = DB::table('grade')->where('id','2')->get();
    //    $alldata = DB::table('grade')->insert(
    //     [
    //         'id' => 9,
    //         'name' => 'raju',
    //         'basic' => 20000
    //     ]
    //     );

    // $alldata = DB::table('grade')->where('id',9)->update(['name'=>'aul']);
    $alldata = DB::table('grade')->where('id',9)->delete();

       dd($alldata);


    }
}
