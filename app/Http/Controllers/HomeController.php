<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userPanti;

class HomeController extends Controller
{
    public function index()
    {
        $user_pantis = userPanti::all();
        return view('front.index',compact('user_pantis'));
    }
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
      //  $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
}
