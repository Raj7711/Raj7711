<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\practice;

class PracticeController extends Controller
{
    public function view()
    {
        $practices=Practice::all();
        
    
        $data=compact('practices');
        return view('practice1')->with($data);
    
     
    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());

        $practice = New Practice;
        $practice->S_name=$request['S_name'];
        $practice->S_Reg_no=$request['S_Reg_no'];
        $practice->Gender=$request["Gender"];
        $practice->Semester=$request["Semester"];
        $practice->Stat=$request["Stat"];
        $practice->Category=$request["Category"];
        $practice->DOB=$request["DOB"];
        $practice->save();
    

        
    }
    public function ptview()
    {   
        $practices=Practice::all();
        
    
        $data=compact('practices');
        return view('pracitce1')->with($data);
    }
}
