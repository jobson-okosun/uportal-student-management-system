<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers;
use App\personalRecord;
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

    public function makedata($mydata, $create_personal_details){
   
        return view('make_record');
    }

    public function editdata($mydata, $edit_personal_details, $update){

        
        return view('edit_record');
    }

    public function createdata($mydata){
    $personalrecord = new personalRecord();
    $personalrecord->address = request('address');
    $personalrecord->religion = request('religion');
    $personalrecord->phone = request('phone');
    $personalrecord->maritalstatus = request('maritalstatus');
    $personalrecord->nextofkin = request('nextofkin');

    //error_log($personalrecord);
    
    $personalrecord->save();

    return redirect('/home/mydata');

    }
}
