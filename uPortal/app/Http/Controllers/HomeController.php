<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers;

class HomeController extends Controller
{   

    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    public function userlogin(){
        return view ('auth.login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function retrieve($mydata){
        
        
        return view('personal_record');
    }

}
