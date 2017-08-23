<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
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
    public function classSelect(){
    
            $classSelectList = DB::table('tbl_l_users_classes')
      ->join('tbl_classes', 'tbl_l_users_classes.class_id', '=', 'tbl_classes.classes_id')
           ->join('users', 'tbl_l_users_classes.users_id', '=', 'users.id')
            ->select('tbl_classes.*', 'users.*')
            ->where([
    ['tbl_l_users_classes.users_id', '=', Auth::id()],
])
            ->orderBy('tbl_classes.classes_name', 'desc')
 ->get();




              if (Auth::user()->admin === "true") {
    return view('selectClass', ['classSelection'=>$classSelectList]);
} else {
    return view('selectClass', ['classSelection'=>$classSelectList]);
}

}
}
