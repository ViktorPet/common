<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function __construct(){

     return $this->middleware('guest:admin');
   }

   public function index(){

     return view('users/admin');
   }

   public function dashboard(){

     $user = Auth::guard('admin')->user()->name;

    //dd($user);

     return view('admin/dashboard', compact('user'));
   }

}
