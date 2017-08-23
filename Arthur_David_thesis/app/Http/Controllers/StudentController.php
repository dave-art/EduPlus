<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class   StudentController extends Controller
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
     public function test() {
             Auth::id();
    if (Auth::user()->admin === "true") {
    return view('adminMenu');
} else {
    return view('homeMenu');
    // $friends = DB::select("SELECT id,name,image FROM users,friends WHERE users.id = friends.friend_id AND friends.friend_id = users.id AND friends.users_id='".Auth::id()."'");
      // return $posters;
   //		return view('myProfile', ['list'=>$friends]);
      //$posters = DB::select("SELECT movies_poster FROM users,tbl_movies,tbl_link_users_movies WHERE tbl_link_users_movies.users_id = users.id AND tbl_link_users_movies.movies_id=tbl_movies.movies_id AND tbl_link_users_movies.users_id='".Auth::id()."'");
      //return $posters;
   	}
   }
  //  public function updateProfile(Request $request) {
  //    if($request->hasFile('avatar')){
  //      $avatar = $request->file('avatar');
  //      $filename = time() . '.' . $avatar->getClientOriginalExtension();
  //      $avatar->move('_DIR_'.'/profiles',$filename);
  //      $user = Auth::user();
  //      $user->image = $filename;
  //      $user->save();
  //    }
  //    return redirect ('/myProfile');
      //$file = request()->file('avatar');
      //$file->move('_DIR_'.'/storage',$file->getClientOriginalName());
      //return 'File has been uploaded!';
   //}



  }
