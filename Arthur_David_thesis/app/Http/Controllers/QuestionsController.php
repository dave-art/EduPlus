<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;




class QuestionsController extends Controller
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

    

    public function questionUpload() {
    $questionSubject = request()->input("questionSubject");
    $questionContent = request()->input("questionContent"); 
    $questionId = DB::table('tbl_questions')->insertGetId(
     ['questions_subject' => $questionSubject, 'questions_content' => $questionContent]
    );
     DB::table('tbl_l_users_questions')->insert(
         ['question_id' => $questionId, 'users_id' => Auth::user()->id]
      );




return redirect()->back();
}
    }