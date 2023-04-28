<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\POTfacultyController;
use App\Http\Controllers\DGLreportController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\DSR1Controller;
use App\Http\Controllers\DSR2Controller;
use App\Http\Controllers\DCQController;
use App\Http\Controllers\NPPController;
use App\Http\Controllers\NCSController;
use App\Http\Controllers\NCS1Controller;
use App\Http\Controllers\RFController;
use App\Http\Controllers\CCDController;
use App\Http\Controllers\CCD2Controller;
use App\Http\Controllers\DDController;
use App\Http\Controllers\TNTSController;
use App\Http\Controllers\CollaborationController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AlliedController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ScholarController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ConductController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SPController;
use App\Http\Controllers\SP1Controller;
use App\Http\Controllers\EMPController;
use App\Http\Controllers\FellowshipController;
use App\Http\Controllers\InitiativesController;
use App\Http\Controllers\NETController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SignupController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::group(['middleware'=>['web','admin']],function(){
    Route::get('/dashboard',function(){
        return view('admindashboard');
    });
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         

Route::get('/postion',[POTfacultyController::class,'position']);
Route::post('/store',[POTfacultyController::class,'store']);
Route::get('/ptview',[POTfacultyController::class,'ptview']);
Route::get('/delete',[POTfacultyController::class,'delete']);



 

//details of lecturers under year of report
Route::get('/guest',[DGLreportController::class,'index']);
Route::post('/gueststore',[DGLreportController::class,'store']);
Route::get('/gfview',[DGLreportController::class,'gfview']);

//data store of practice1
Route::get('/practice',[PracticeController::class,'view']);
Route::post('/pstore',[PracticeController::class,'store']);

//details of scholars Registered
Route::get('/dscholars',[DSR1Controller::class,'view']);
Route::post('/scholarsstore',[DSR1Controller::class,'store']);


Route::get('/1dscholars',[DSR2Controller::class,'view']);
Route::post('/1scholarsstore',[DSR2Controller::class,'store']);


Route::get('/Qulified',[DCQController::class,'view']);
Route::post('/storeQulified',[DCQController::class,'store']);

Route::get('/publication',[NPPController::class,'view']);
Route::post('/spublication',[NPPController::class,'store']);

Route::get('/confrence',[NCSController::class,'view']);
Route::post('/s_confrence',[NCSController::class,'store']);

Route::get('/collboration',[NCS1Controller::class,'view']);
Route::post('/s_collboration',[NCS1Controller::class,'store']);

Route::get('/research',[RFController::class,'view']);
Route::post('/s_research',[RFController::class,'store']);


Route::get('/mphil',[CCDController::class,'view']);
Route::post('/smphil',[CCDController::class,'store']);

Route::get('/phd',[DDController::class,'view']);
Route::post('sphd',[DDController::class,'Value']);


Route::get('/tnt',[TNTSController::class,'view']);
Route::post('sstore',[TNTSController::class,'Value']);
Route::get('/col', [CollaborationController::class,'index']);
Route::post('insert', [CollaborationController::class,'Insert']);
Route::get('/ref',[FundController::class,'index']);
Route::post('value',[FundController::class,'Value']);
Route::get('/name',[WorkController::class,'index']);
Route::post('value',[WorkController::class,'Value']);
Route::get('/a',[AlliedController::class,'index']);
Route::post('value',[AlliedController::class,'Value']);
Route::get('/cou',[CourseController::class,'index']);
Route::post('value',[CourseController::class,'Value']);
Route::get('/de',[ScholarController::class,'index']);
Route::post('value',[ScholarController::class,'Value']);
Route::get('/m',[ProgrammeController::class,'index']);
Route::post('value',[ProgrammeController::class,'Value']);
Route::get('/pos',[PositionController::class,'index']);
Route::post('value',[PositionController::class,'Value']);
Route::get('/Gue',[GuestController::class,'index']);
Route::post('value',[GuestController::class,'Value']);
Route::get('/cou',[ConductController::class,'index']);
Route::post('value',[ConductController::class,'Value']);
Route::get('/dep',[DepartController::class,'index']);
Route::post('sert',[DepartController::class,'Insertvalue']);
Route::get('/cand',[CandidateController::class,'index']);
Route::post('value',[CandidateController::class,'Value']);
Route::get('/fac',[FacultyController::class,'index']);
Route::post('value',[FacultyController::class,'Value']);
Route::get('/f_delete',[FacultyController::class,'delete']);

Route::get('/students',[SPController::class,'view']);
Route::post('sstudents',[SPController::class,'Value']);

Route::get('/student1',[SP1Controller::class,'view']);
Route::post('/sstudent1',[SP1Controller::class,'store']);

Route::get('/enrollphd',[EMPController::class,'view']);
Route::post('senrollphd',[EMPController::class,'store']);

Route::get('/fellowship',[FellowshipController::class,'view']);
Route::post('sfellowship',[FellowshipController::class,'store']);

Route::get('/initiatives',[InitiativesController::class,'view']);
Route::post('/sinitiatives',[InitiativesController::class,'store']);

Route::get('/net',[NETController::class,'view']);
Route::post('/snet',[NETController::class,'store']);

Route::get('/project',[ProjectController::class,'view']);
Route::post('/sproject',[ProjectController::class,'store']);

Route::get('/service',[ServiceController::class,'view']);
Route::post('/sservice',[ServiceController::class,'store']);

Route::get('/signup',[SignupController::class,'signup']);
Route::post('/ssignup',[SignupController::class,'store']);








