<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class userController extends Controller
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

    public function allUsers() {
      $allUsers = DB::select("SELECT id,name,image FROM users WHERE id <>'".Auth::id()."'");
  		return view('searchUsers', ['searchAllUsers'=>$allUsers]);
  	}




  	//public function addUser() {
      //$allUsers = DB::select("INSERT INTO friends (friend_id, users_id)
//SELECT id FROM users");
    //$friend = request()->input("addUser");
    //$currentUser = Auth::id();
    //DB::table('friends')->insert(
    //     ['friend_id' => $friend, 'users_id' => $currentUser]
    //  );
    //  echo '<script language="javascript">';
//echo 'alert("Successfully Added User!")';
//echo '</script>';
//      return redirect ('/searchUsers');
//$id = DB::table("INSERT INTO friends SELECT id FROM users,friends WHERE users.id = friends.friend_id AND friends.friend_id = users.id AND friends.users_id='".Auth::id()."'");
//  	}




//    public function yourFriends() {
//    $yourFriends = DB::select("SELECT id,name,image,friend_id FROM users,friends WHERE users.id = friends.friend_id AND friends.friend_id = users.id AND friends.users_id='".Auth::id()."'");
     // return $posters;
//     return view('deleteUser', ['addedlist'=>$yourFriends]);
     //$posters = DB::select("SELECT movies_poster FROM users,tbl_movies,tbl_link_users_movies WHERE tbl_link_users_movies.users_id = users.id AND tbl_link_users_movies.movies_id=tbl_movies.movies_id AND tbl_link_users_movies.users_id='".Auth::id()."'");
     //return $posters;
//   }




//    public function deleteUser() {
      //$allUsers = DB::select("INSERT INTO friends (friend_id, users_id)
//SELECT id FROM users");
//    $friendDelete = request()->input("deleteUser");
//    $authUser = Auth::id();
//DB::table('friends')->where('friend_id' => $friendDelete)->delete();
//DB::table('friends')->where('friend_id' => $friendDelete, 'users_id' => $authUser)->delete();
//  DB::table('friends')->where(
//        ['friend_id' => $friendDelete, 'users_id' => $authUser]
//      )->delete();
//      echo '<script language="javascript">';
//echo 'alert("Successfully Unfollowed User!")';
//echo '</script>';
//      return redirect ('/myProfile');
//$id = DB::table("INSERT INTO friends SELECT id FROM users,friends WHERE users.id = friends.friend_id AND friends.friend_id = users.id AND friends.users_id='".Auth::id()."'");

//    }

  }
