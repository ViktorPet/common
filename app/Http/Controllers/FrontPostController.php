<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class FrontPostController extends Controller
{


    public function __construct(){

       return $this->middleware('auth');
     }


    public function index(){

      $posts = Post::paginate(3);

      $user = Auth::user();

      if($user){

      return view('posts.posts', compact('posts'));

        }
    }
}
