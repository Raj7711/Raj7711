<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ptfaculty;

class POTfacultyController extends Controller
{
    public function position(){
        return view('postion_of_teaching_faculty-input');
    }
    public function store(Request $request){
        echo"<pre>";
        $request->all();

       $ptfaculty=New PTfaculty;
     $ptfaculty->department_id=$request['department_id'];
     $ptfaculty->department_name=$request['department_name'];
     $ptfaculty->designation=$request['designation'];
     $ptfaculty->degree=$request['degree'];
     $ptfaculty->subject_specification=$request['subject_specification'];
     $ptfaculty->save();
    

       
       
        
    }
    public function ptview()
    {   
        $ptfacultys=PTfaculty::all();
        
    
        $data=compact('ptfacultys');
        return view('position_of_teaching_faculty')->with($data);
    }
    public function delete($id)
    {
       $ptfaculty= PTfaculty::find($id);
       if(!is_null($ptfaculty)){
         $ptfaculty->delete();
       }
    
        return redirect('position_of_teaching_faculty');
    }
}
