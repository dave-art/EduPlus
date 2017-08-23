<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Mail;



class ProfileController extends Controller
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
    public function studentPage($studentID)
    {

//student info for teachers
       $studentsList = DB::table('tbl_l_studentsList')
            ->join('users', 'tbl_l_studentsList.students_id', '=', 'users.id')
            ->select('users.*')
            ->where('tbl_l_studentsList.teachers_id', '=', Auth::id())
            ->where('tbl_l_studentsList.students_id', '=', $studentID)
            ->orderBy('users.name', 'asc')
            ->get();

//When logged in
        $family = DB::table('tbl_l_studentsList')
            ->join('users', 'tbl_l_studentsList.teachers_id', '=', 'users.id')
            ->select('users.*')
            ->where('tbl_l_studentsList.students_id', '=', Auth::id())
            ->get();

  //feedback from teachers
            $feedback = DB::table('tbl_l_users_feedback')
            ->join('users', 'tbl_l_users_feedback.users_id', '=', 'users.id')
            ->join('tbl_feedback', 'tbl_l_users_feedback.comment_id', '=', 'tbl_feedback.feedback_id')
            ->select('tbl_feedback.*')
            ->where('tbl_l_users_feedback.users_id', '=', $studentID)
            ->orderBy('tbl_feedback.feedback_date', 'desc')
            ->get();

            $question = DB::table('tbl_l_users_questions')
            ->join('users', 'tbl_l_users_questions.users_id', '=', 'users.id')
            ->join('tbl_questions', 'tbl_l_users_questions.question_id', '=', 'tbl_questions.questions_id')
            ->select('tbl_questions.*')
            ->where('tbl_l_users_questions.users_id', '=', $studentID)
            ->get();

$allAssignments = DB::table('tbl_l_users_work')
            ->join('users', 'tbl_l_users_work.users_id', '=', 'users.id')
            ->join('tbl_eventWork', 'tbl_l_users_work.work_id', '=', 'tbl_eventWork.workEvent_id')
            ->where('tbl_l_users_work.users_id', '=', $studentID)
            ->select('tbl_eventWork.*')
            ->orderBy('tbl_eventWork.workEvent_date', 'asc')
            ->get();

//admin check
if (Auth::user()->admin === "true") {
return view('studentProfile', ['studentInfo'=>$studentsList, 'studentFeedback'=>$feedback, 'studentQuestions'=>$question, 'teacherInfo'=>$family, 'assignments'=>$allAssignments]);
} else {
return view('familyProfile', ['studentInfo'=>$studentsList, 'studentFeedback'=>$feedback, 'studentQuestions'=>$question, 'teacherInfo'=>$family, 'assignments'=>$allAssignments]);
}


}

    public function addFeedback() {
      //$allUsers = DB::select("INSERT INTO friends (friend_id, users_id)
//SELECT id FROM users");
    $feedbackName = request()->input("feedbackTitle");
    $feedbackContent = request()->input("feedbackContent"); 
    $feedbackDate = request()->input("feedbackDate");
    $studentId = request()->input("studentId"); 
    $feedbackId = DB::table('tbl_feedback')->insertGetId(
     ['feedback_subject' => $feedbackName, 'feedback_content' => $feedbackContent, 'feedback_date' => $feedbackDate]
    );
     DB::table('tbl_l_users_feedback')->insert(
         ['comment_id' => $feedbackId, 'users_id' => $studentId]
      );




return redirect()->back();

    }

        public function submittedWork() {
      //$allUsers = DB::select("INSERT INTO friends (friend_id, users_id)
//SELECT id FROM users");
    $completed = request()->input("completed");
    $workID = request()->input("workID"); 
    $studentId = request()->input("studentId"); 
//DB::table('tbl_l_users_unfinished')
        //    ->where('tbl_eventWork.workEvent_id', '=', $workID)
          //  ->update(['workEvent_complete' => $completed]);

    $incompleteWork = DB::table('tbl_l_users_work')
            ->join('tbl_eventWork', 'tbl_l_users_work.work_id', '=', 'tbl_eventWork.workEvent_id')
            ->join('users', 'tbl_l_users_work.users_id', '=', 'users.id')
            ->where('users.id', '=', $studentId)
            ->select('tbl_eventWork.*')
            ->orderBy('tbl_eventWork.workEvent_id', 'asc')
            ->get();

DB::table('tbl_l_users_work')
            ->where('users_id', '=', $studentId)
            ->where('work_id', '=', $workID)
            ->delete();

return redirect()->back();

    }

    public function contactMail($studentID) {
      $studentsList = DB::table('tbl_l_studentsList')
            ->join('users', 'tbl_l_studentsList.students_id', '=', 'users.id')
            ->select('users.*')
            ->where('tbl_l_studentsList.teachers_id', '=', Auth::id())
            ->where('tbl_l_studentsList.students_id', '=', $studentID)
            ->orderBy('users.name', 'asc')
            ->get();

//When logged in
        $family = DB::table('tbl_l_studentsList')
            ->join('users', 'tbl_l_studentsList.teachers_id', '=', 'users.id')
            ->select('users.*')
            ->where('tbl_l_studentsList.students_id', '=', Auth::id())
            ->get();


if (Auth::user()->admin === "true") {
return view('mail', ['studentInfo'=>$studentsList, 'teacherInfo'=>$family]);
} else {
return view('mail', ['studentInfo'=>$studentsList, 'teacherInfo'=>$family]);
}

}

    public function sendMail() {

      //$email = request()->input("email");
      //$subject = request()->input("subject");
      //$content = request()->input("content");

      $mailInfo = array(
        'email' => request()->input('email'),
        'subject' => request()->input('subject'),
        'regarding' => request()->input('regarding'),
        'content' => request()->input('content')
        );

      Mail::send('emails.contact', $mailInfo, function($message) use ($mailInfo){
          $message->from(Auth::user()->email);
          $message->to($mailInfo['email']);
          $message->subject($mailInfo['subject']);
          $message->addPart($mailInfo['regarding']);
      });

return redirect()->back();

    }
}
