<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses=Course::all();

        return view('Course_distribution')->with('courses',$courses);
    }
    function Value(Request $request){
        $title = $request->input('title');
        $total = $request->input('total');
        $dis= $request->input('dis');
        $first= $request->input('first');
        $second= $request->input('second');
        $pass= $request->input('pass');

        $isInserSuccress = Course::insert(['title'=>$title , 'total'=>$total , 'dis'=>$dis, 'first'=>$first, 'second'=>$second, 'pass'=>$pass]);
     
        if($isInserSuccress) echo '<h1> Insert Successful </h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
