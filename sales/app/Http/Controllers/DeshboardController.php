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
    // $alldata = DB::table('grade')->where('id',9)->delete();

      // dd($alldata);


    }

    public function mydashboard(){
        return view('dashboard.dashboard');
    }

    public function form(){
        return view('dashboard.pages.form');
    }
    public function register(){
        return view('dashboard.pages.register');
    }

    public function gradetable(){
        
        $alldata = DB::table('grade')->paginate(5);


           // dd($alldata);
         return view('dashboard.pages.table',['alldatas'=>$alldata]);
    }

    public function addgrade(){
        return view('dashboard.pages.addgrade');
    }

    public function savegrad(Request $request){
        $name = $request->name;
        $basic = $request->basic;
        DB::table('grade')->insert(
            [
                'name' => $name,
                'basic' => $basic

            ]
        );
        return redirect('/gradetable')->with('msg','Grade Add successfully');
    }

    public function editgrade($id){
        
        $gradeid = DB::table('grade')->where('id',$id)->first();

        return view('dashboard.pages.editgrade',['gradeid'=>$gradeid]);
        //dd($gradeid);
    }

    public function updategrade(Request $request){
         $name = $request->name;
         $basic = $request->basic;
         $id = $request->id;
         DB::table('grade')->where('id',$id)->update([
                'name' => $name,
                'basic' => $basic
         ]);
         return redirect('/gradetable')->with('msg','Grade update successfully');
        
       // dd($request->id);
    }

    public function deletegrade($id){
        
         DB::table('grade')->where('id',$id)->delete();

        return redirect('/gradetable')->with('msg','Grade Delete successfully');
        //dd($gradeid);
    }

}
 