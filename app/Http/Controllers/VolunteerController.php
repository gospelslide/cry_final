<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use App\Volunteer;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sarav\Multiauth\Foundation\AuthenticatesAndRegistersUsers;


class VolunteerController extends Controller
{
	public function display()
    {	
    	return view('volunteer.login')->with('message', '');
    }

    public function login()
    {
    	$validator = Validator::make(Input::all(),
	  		['email' => 'required'],
	  		['password' => 'required|min:6']
	  	);
	  	if($validator->passes())
	  	{
	  		dd("yeah");
	    	$email = $request->input('email');
	    	$_SESSION['volunteer']=$email;
	    	$password = $request->input('password');
	    	if(Auth::attempt('volunteer',['email' => $email,'password' => $password]))
	    		return "yeah";
	    	else
	    		return redirect()->back();
	    }
	    else 
	    	return $validator->messages();
    }

    public function index()
    {

    }

    public function taskAssigned()
    {
    	$userid = DB::table('volunteer')->where('email', $_SESSION['volunteer'])->value('id');
    	$condition=['volunteerid' => $userId,'status' => '2'];
    	$tasks = donation::where($condition)->get();
    	/*
		Method for onClick Complete button
    	*/

    }

    public function taskPending()
    {
    	$userid = DB::table('volunteer')->where('email', $_SESSION['volunteer'])->value('id');
    	$condition=['volunteerid' => $userId,'status' => '1'];
    	$tasks = donation::where($condition)->get();
    	/*
		Method for approve/deny donation
    	*/
    }

    public function  logout()
    {
    	Auth::logout('volunteer');
    	return redirect('/volunteer');
    }
}
