<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    public function view()
    {
        $project=Project::all();
        return view('ongoing_major_minor_research_projects_at_the_department_details')->with('project',$project);
    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());
        $title=$request->input('title');
       $project=$request->input('project');
       $funding=$request->input('funding');
       $amount=$request->input('amount');
        $year=$request->input('year');
       $investigator=$request->input('investigator');
       $Sanctioned=$request->input('Sanctioned');
       $submit=$request->input('submit');
    
       $isInserSuccress=Project::insert(['title'=>$title,'project'=>$project,'funding'=>$funding,'amount'=>$amount,'year'=>$year,'investigator'=>$investigator,'Sanctioned'=>$Sanctioned,'submit'=>$submit]);
       if($isInserSuccress) echo '<h1>Insert Success</h1>';
       else echo '<h1> Insert Falied<h1>';
   }
    }

