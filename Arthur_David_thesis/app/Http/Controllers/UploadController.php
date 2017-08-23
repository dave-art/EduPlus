<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;




class UploadController extends Controller
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


public function addPost() {
      //$allUsers = DB::select("INSERT INTO friends (friend_id, users_id)
//SELECT id FROM users");
    $Post = request()->input("PostName");
    $Content = request()->input("PostContent");
    $class = request()->input("classId");
    $postId = DB::table('tbl_eventGeneral')->insertGetId(
     ['generalEvent_name' => $Post, 'generalEvent_post' => $Content]
    );
     DB::table('tbl_l_classes_general')->insert(
         ['class_id' => $class, 'general_id' => $postId]
      );

    /*$linkingCourse = DB::select("SELECT courses_id FROM tbl_courses WHERE courses_id=".$courseid);
    $linkingDue = DB::select("SELECT workEvent_id FROM tbl_eventWork WHERE workEvent_id=".$workid);
     DB::table('tbl_l_courses_work')->insert(
         ['course_id' => $linkingCourse, 'work_id' => $linkingDue]
      );*/


return redirect()->back();

    }

    public function addForm() {

    $formName = request()->input("formName");
    $formDesc = request()->input("formDesc");
    $formDate = request()->input("formDate");
    $classId = request()->input("classId"); 
    $formFile = request()->file('formFile');
    $formFile->move('_DIR_'.'/forms',$formFile->getClientOriginalName());
    $formId = DB::table('tbl_forms')->insertGetId(
     ['forms_name' => $formName,'forms_desc' => $formDesc,'forms_postDate' => $formDate, 'forms_file' => $formFile->getClientOriginalName()]
    );
     DB::table('tbl_l_classes_forms')->insert(
         ['class_id' => $classId, 'forms_id' => $formId]
      );



return redirect()->back();

    }
}