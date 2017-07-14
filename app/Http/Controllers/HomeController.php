<?php

namespace App\Http\Controllers;
use App\userPanti;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_pantis = userPanti::all();
      return view('front.index',compact('user_pantis'));
  }

    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}
}
