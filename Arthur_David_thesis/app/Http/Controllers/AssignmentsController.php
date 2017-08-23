<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;




class AssignmentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */



//Selected Course
    public function assignments($unitId)
    {

//course
      $unitInfo = DB::select("SELECT * FROM tbl_units WHERE units_id=".$unitId);


//units
        //$unit = DB::table('tbl_l_units_courses')
          //  ->join('tbl_courses', 'tbl_l_units_courses.course_id', '=', 'tbl_courses.courses_id')
            //->join('tbl_units', 'tbl_l_units_courses.unit_id', '=', 'tbl_units.units_id')
         //   ->select('units_name')
           // ->where('tbl_l_units_courses.course_id', '=', $id)
            //->get();
 $classAssignments = DB::table('tbl_l_units_assignments')
            ->join('tbl_units', 'tbl_l_units_assignments.unit_id', '=', 'tbl_units.units_id')
            ->join('tbl_assignments', 'tbl_l_units_assignments.assignment_id', '=', 'tbl_assignments.assignments_id')
            ->select('tbl_assignments.*')
            ->where('tbl_l_units_assignments.unit_id', '=', $unitId)
            ->get();
//admin check
if (Auth::user()->admin === "true") {
return view('assignmentsTeachers', ['unitInformation'=>$unitInfo,'assignmentInfo'=>$classAssignments], compact('downloads'));
} else {
return view('assignmentsStudents', ['unitInformation'=>$unitInfo,'assignmentInfo'=>$classAssignments], compact('downloads'));
}


}

  public function assignmentsUpload() {
    $fileName = request()->input("assignmentName");
    $unit = request()->input("unitId"); 
    $file = request()->file('assignmentFile');
    $file->move('_DIR_'.'/storage',$file->getClientOriginalName());
    $assignmentId = DB::table('tbl_assignments')->insertGetId(
     ['assignments_name' => $fileName, 'assignments_file' => $file->getClientOriginalName()]
    );
     DB::table('tbl_l_units_assignments')->insert(
         ['unit_id' => $unit, 'assignment_id' => $assignmentId]
      );
return redirect()->back();
  }


}