<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
    public function index()
    {
    //print_r(Auth::id());
    Session::set('userID', Auth::user());
    Auth::id();
      $course = DB::select("SELECT courses_name,courses_id FROM tbl_classes,tbl_courses,tbl_l_classes_courses WHERE tbl_l_classes_courses.class_id = tbl_classes.classes_id AND tbl_l_classes_courses.course_id=tbl_courses.courses_id AND tbl_l_classes_courses.class_id=1");
       
              if (Auth::user()->admin === "true") {
    return view('admin', ['courseOption'=>$course]);
} else {
    return view('home', ['courseOption'=>$course]);
}

    }

//TEACHER QUERY FOR CLASS LIST
    public function testing($classId)
    {
     $classForms = DB::table('tbl_l_classes_forms')
            ->join('tbl_classes', 'tbl_l_classes_forms.class_id', '=', 'tbl_classes.classes_id')
            ->join('tbl_forms', 'tbl_l_classes_forms.forms_id', '=', 'tbl_forms.form_id')
            ->select('tbl_forms.*')
            ->where('tbl_l_classes_forms.class_id', '=', $classId)
            ->orderBy('tbl_forms.forms_PostDate', 'asc')
            ->get();

            return $classForms;

}






}
