 <?php

namespace App\Http\Controllers;

use App\Models\Conduct;
use Illuminate\Http\Request;

class ConductController extends Controller
{
    public function index(){
        $conducts=Conduct::all();

        return view('Courses_conducted')->with('conducts',$conducts);
    }
    function Value(Request $request){
        $cou = $request->input('cou');
        $com = $request->input('com');
        $num = $request->input('num');
        $name = $request->input('name');

        $isInserSuccress = Conduct::insert(['cou'=>$cou , 'com'=>$com , 'num'=>$num, 'name'=>$name]);
     
        if($isInserSuccress) echo '<h1>Insert Success</h1>';
        else echo '<h1> Insert Falied<h1>';
    }
}
