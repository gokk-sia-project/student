<?php
namespace App\Http\Controllers;
use App\Models\UserGrades;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;

Class UserGradesController extends Controller {

    use ApiResponser;
    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }
    
    public function index(){
        $usergrades = UserGrades::all();
        return $this->successResponse($usergrades);
    }
    
    public function show($id){
        $usergrades = UserGrades::where('student_id', $id)->get();
        return $this->successResponse($usergrades);
    }
}