<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class SPController extends Controller
{
    public function view()
    {
      $student=Student::all();
      return view('Student_particulars_specify_the_semester')->with('student',$student);
    }
     function Value(Request $request)
    {
        
        $no=$request->input('no');
        $department_id=$request->input('department_id');

        $UG=$request->input('UG');
        $Sc=$request->input('Sc');
        $St=$request->input('St');
        $Obc=$request->input('Obc');
        $Gen=$request->input('Gen');
        $total=$request->input('total');

        $isInserSuccress=Student::insert(['no'=>$no,'department_id'=>$department_id, 'UG'=>$UG,'Sc'=>$Sc,'St'=>$St,'Obc'=>$Obc,'Gen'=>$Gen,'total'=>$total]);

        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
        }
}
