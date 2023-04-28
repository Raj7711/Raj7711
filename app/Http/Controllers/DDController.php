<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cbcsdept;

class DDController extends Controller
{
    public function view()
    {
        $cbcsdept=Cbcsdept::all();
        
        return view("Details_of_the_Courses(cbscs)_conducted_by_the_department")->with('cbcsdept',$cbcsdept);
    }
    function Value(Request $request)
    { 
          

          $no=$request->input('no');
          $Semester =$request->input('Semester');
          $Code =$request->input('Code');
          $Course_Title =$request->input('Course_Title'); 
          $Credit   =$request->input('Credit');          
          
          $isInserSuccress=Cbcsdept::insert(['no'=>$no,'Semester'=>$Semester,'Code'=>$Code,'Course_Title'=>$Course_Title,'Credit'=>$Course_Title]);

          if($isInserSuccress) echo '<h1> Insert Successful </h1>';
        else echo '<h1> Insert Falied<h1>';

    }
}
