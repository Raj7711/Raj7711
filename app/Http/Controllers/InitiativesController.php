<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\initiative;

class InitiativesController extends Controller
{
    public function view()
    {
        $initiative=Initiative::all();
        return view("initiatiatives_undertaken_towards_faculty_development");
    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());
        $Development=$request->input('Development');
        $faculty_benifite=$request->input('faculty_benifite');
 

        $isInserSuccress=Initiative::insert(['Development'=>$Development,'faculty_benifite'=>$faculty_benifite]);
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    
    }
}
