<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;




class CourseController extends Controller
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

//courses and class query test
    public function courseClassTest($classId)
    {
      
            $myClass = DB::table('tbl_l_users_classes')
      ->join('tbl_classes', 'tbl_l_users_classes.class_id', '=', 'tbl_classes.classes_id')
           ->join('users', 'tbl_l_users_classes.users_id', '=', 'users.id')
            ->select('tbl_classes.*', 'users.*')
            ->where([
    ['tbl_l_users_classes.class_id', '=', $classId],
    ['tbl_l_users_classes.users_id', '=', Auth::id()],
])
            ->get();
      //due dates
        $course = DB::table('tbl_l_classes_courses')
            ->join('tbl_courses', 'tbl_l_classes_courses.course_id', '=', 'tbl_courses.courses_id')
            ->join('tbl_classes', 'tbl_l_classes_courses.class_id', '=', 'tbl_classes.classes_id')
            ->select('tbl_courses.courses_name', 'tbl_courses.courses_id')
            ->where('tbl_l_classes_courses.class_id', '=', $classId)
            ->get();

        $classForms = DB::table('tbl_l_classes_forms')
            ->join('tbl_classes', 'tbl_l_classes_forms.class_id', '=', 'tbl_classes.classes_id')
            ->join('tbl_forms', 'tbl_l_classes_forms.forms_id', '=', 'tbl_forms.form_id')
            ->select('tbl_forms.*')
            ->where('tbl_l_classes_forms.class_id', '=', $classId)
            ->orderBy('tbl_forms.forms_PostDate', 'asc')
            ->get();
       
      $classPosts = DB::table('tbl_l_classes_general')
            ->join('tbl_classes', 'tbl_l_classes_general.class_id', '=', 'tbl_classes.classes_id')
            ->join('tbl_eventGeneral', 'tbl_l_classes_general.general_id', '=', 'tbl_eventGeneral.generalEvent_id')
            ->select('tbl_eventGeneral.*')
            ->where('tbl_l_classes_general.class_id', '=', $classId)
            ->get();

            

              if (Auth::user()->admin === "true") {
    return view('admin', ['classID'=>$myClass, 'courseOption'=>$course, 'classForms'=>$classForms, 'classPost'=>$classPosts]);
} else {
    return view('home', ['courseOption'=>$course, 'classForms'=>$classForms, 'classPost'=>$classPosts]);
}
}

//Selected Course
    public function unitCourseTest($id)
    {
        $id = Crypt::decrypt($id);

//student info
       $studentsList = DB::table('tbl_l_studentsList')
            ->join('users', 'tbl_l_studentsList.students_id', '=', 'users.id')
            ->select('users.*')
            ->where('tbl_l_studentsList.teachers_id', '=', Auth::id())
            ->orderBy('users.name', 'desc')
            ->get();

//teacher info
        $teacher = DB::table('tbl_l_studentsList')
            ->join('users', 'tbl_l_studentsList.teachers_id', '=', 'users.id')
            ->select('users.*')
            ->where('tbl_l_studentsList.students_id', '=', Auth::id())
            ->get();

//course
      $courseInfo = DB::select("SELECT courses_name,courses_id,courses_news FROM tbl_courses WHERE courses_id=".$id);

//due dates
        $dueDate = DB::table('tbl_l_courses_work')
            ->join('tbl_courses', 'tbl_l_courses_work.course_id', '=', 'tbl_courses.courses_id')
            ->join('tbl_eventWork', 'tbl_l_courses_work.work_id', '=', 'tbl_eventWork.workEvent_id')
            ->select('tbl_eventWork.*')
            ->where('tbl_l_courses_work.course_id', '=', $id)
            ->orderBy('tbl_eventWork.workEvent_date', 'asc')
            ->get();

//units
        $unit = DB::table('tbl_l_units_courses')
            ->join('tbl_courses', 'tbl_l_units_courses.course_id', '=', 'tbl_courses.courses_id')
            ->join('tbl_units', 'tbl_l_units_courses.unit_id', '=', 'tbl_units.units_id')
            ->select('units_name', 'units_id')
            ->where('tbl_l_units_courses.course_id', '=', $id)
            ->get();



//admin check
if (Auth::user()->admin === "true") {
return view('myCourses', ['unitOption'=>$unit,'courseInfo'=>$courseInfo,'studentInfo'=>$studentsList,'dueDates'=>$dueDate]);
} else {
return view('familyCourses', ['unitOption'=>$unit,'courseInfo'=>$courseInfo,'teacherInfo'=>$teacher,'dueDates'=>$dueDate]);
}


}

public function addProjectDue() {
      //$allUsers = DB::select("INSERT INTO friends (friend_id, users_id)
//SELECT id FROM users");
    $Name = request()->input("ProjectName");
    $dueDate = request()->input("DueDate");
    $course = request()->input("courseId");
     
      $studentsList = DB::table('tbl_l_studentsList')
            ->select('tbl_l_studentsList.students_id')
            ->where('tbl_l_studentsList.teachers_id', '=', Auth::id())
            ->get();
            
    $workId = DB::table('tbl_eventWork')->insertGetId(
     ['workEvent_name' => $Name, 'workEvent_Date' => $dueDate]
    );
    DB::table('tbl_l_courses_work')->insertGetId(
     ['course_id' => $course, 'work_id' => $workId]
    );
 
    
$students = DB::table('tbl_l_studentsList')
            ->select('tbl_l_studentsList.students_id')
            ->where('tbl_l_studentsList.teachers_id', '=', Auth::id())->distinct('students_id')->count('students_id');


            for($i=0; $i < $students; $i++){ 
DB::table('tbl_l_users_work')->insert(
             ['users_id' => ($studentsList[$i]->students_id), 'work_id' => $workId]
              
            );    
        };

$dateDelete = request()->input("deleteDate");
  DB::table('tbl_l_courses_work')->where(
        ['course_id' => $course, 'work_id' => $dateDelete]
      )->delete();

return redirect()->back();

    }
    public function addUnit() {
      //$allUsers = DB::select("INSERT INTO friends (friend_id, users_id)
//SELECT id FROM users");
    $unitName = request()->input("unitName");
    $courseID = request()->input("courseUnitId"); 
    $unitsId = DB::table('tbl_units')->insertGetId(
     ['units_name' => $unitName]
    );
     DB::table('tbl_l_units_courses')->insert(
         ['course_id' => $courseID, 'unit_id' => $unitsId]
      );



return redirect()->back();
 //return view('uploadSuccess');

    }


public function removeProject() {

    $course = request()->input("courseId");
    $dateDelete = request()->input("workId");

  DB::table('tbl_l_courses_work')->where(
        ['course_id' => $course, 'work_id' => $dateDelete]
      )->delete();

return redirect()->back();
}

public function deleteProject() {

    $course = request()->input("courseId");
    $dateDelete = request()->input("workId");

  DB::table('tbl_l_courses_work')->where(
        ['course_id' => $course, 'work_id' => $dateDelete]
      )->delete();
  DB::table('tbl_eventWork')->where(
        ['workEvent_id' => $dateDelete]
      )->delete();

  $students = DB::table('tbl_l_studentsList')
            ->select('tbl_l_studentsList.students_id')
            ->where('tbl_l_studentsList.teachers_id', '=', Auth::id())->distinct('students_id')->count('students_id');
$studentsList = DB::table('tbl_l_studentsList')
            ->select('tbl_l_studentsList.students_id')
            ->where('tbl_l_studentsList.teachers_id', '=', Auth::id())
            ->get();

            for($i=0; $i < $students; $i++){ 
DB::table('tbl_l_users_work')->where(
             ['users_id' => ($studentsList[$i]->students_id), 'work_id' => $dateDelete] 
            )->delete();
};
return redirect()->back();
}

public function deletePosts() {
$post = request()->input("postId");


  DB::table('tbl_eventGeneral')->where(
        ['generalEvent_id' => $post]
      )->delete();

return redirect()->back();
}

public function deleteForms() {
$form = request()->input("formId");


  DB::table('tbl_forms')->where(
        ['form_id' => $form]
      )->delete();

return redirect()->back();
}
}