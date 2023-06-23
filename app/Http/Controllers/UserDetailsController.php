<?php
namespace App\Http\Controllers;
use App\Models\UserDetailsStudent;
use App\Models\User;
use App\Models\UserSubjects;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;

Class UserDetailsController extends Controller {

    use ApiResponser;
    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }
    
    public function index(){
        $userdetails = UserDetailsStudent::all();
        return $this->successResponse($userdetails);
    }
    
    public function show($id){
        $userdetails = UserDetailsStudent::findOrFail($id);
        return $this->successResponse($userdetails);
    }

    public function add(Request $request ){
        $rules = [
            'student_subject_details_id' => 'numeric|min:1|not_in:0',
            'subject_id' => 'required|numeric|min:1|not_in:0',
            'student_id' => 'required|numeric|min:1|not_in:0',
        ];
        $this->validate($request,$rules);
        $user = User::findOrFail($request->student_id);
        $userdetails = UserDetailsStudent::create($request->all());
        return $this->successResponse($userdetails, Response::HTTP_CREATED);
        return $this->successResponse($user);
    }
}