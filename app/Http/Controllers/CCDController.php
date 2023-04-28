<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mphil;

class CCDController extends Controller
{
    public function view()
    {
        return view("Courses_conducted_by_the_department_for_mphil_programme-input");
    }
    public function store(Request $request)
    { 
          echo"<pre>";
          print_r($request->all());

          $mphil=New Mphil;
          $mphil->courses = $request['courses'];
          $mphil->compulsory = $request['compulsory'];
          $mphil->credits = $request['credits'];
          $mphil->course_incharge = $request['course_incharge'];
          $mphil->save();
    }

    
    

}
