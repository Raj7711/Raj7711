<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guestlecturer;


class DGLreportController extends Controller
{



    public  function index(){

        return view('Details_of_guest_lectures_year_of_report-input');
    }


    public function store(Request $request){
        echo"<pre>";
        print_r($request->all());


        $guestlecturer=New Guestlecturer;
        $guestlecturer->department_id=$request['department_id']; 
        $guestlecturer->department_name=$request['department_name'];
        $guestlecturer->research_degrees=$request['research_degrees'];
        $guestlecturer->subject_specification=$request['subject_specification'];
        $guestlecturer->save();

    
    }
    public function gfview(){
        $guestlecturers=Guestlecturer::all();
        $data=compact('guestlecturers');
        return view('guestlecturer-view')->with($data);

    
    }
    
}
