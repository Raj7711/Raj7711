<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teaching;


class TNTSController extends Controller
{
    public function view()
    {
     $teaching=Teaching::all();
       
        
        return view("Teaching_and_non_teaching_staff_in_the_department_of_non_teaching_staff_may_denoted")->with('teaching',$teaching);
    }
    function Value(Request $request){
        $Designation=$request->input('Designation');
        $Sc_Reg = $request->input('Sc_Reg');
        $Sc_Cont = $request->input('Sc_Cont');
        $St_Reg = $request->input('St_Reg');
        $St_Cont = $request->input('St_Cont');
        $Obc_Reg = $request->input('Obc_Reg');
        $Obc_Cont = $request->input('Obc_Cont');
        $Gen_Reg = $request->input('Gen_Reg');
        $Gen_Cont = $request->input('Gen_Cont');



        

        $isInserSuccress = Teaching::insert(['Designation'=>$Designation,'Sc_Reg'=>$Sc_Reg , 'Sc_Cont'=>$Sc_Cont , 'St_Reg'=>$St_Reg , 'St_Cont'=>$St_Cont, 'Obc_Reg'=>$Obc_Reg, 'Obc_Cont'=>$Obc_Cont,'Gen_Reg'=>$Gen_Reg, 'Gen_Cont'=>$Gen_Cont]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
