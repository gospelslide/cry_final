<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Input;
use DB;
use App\Admin;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sarav\Multiauth\Foundation\AuthenticatesAndRegistersUsers;

class AdminController extends Controller
{
    public function display()
    {	
    	return view('admin.login')->with('message', '');
    }

    public function login(Request $request)
    {		
	  	$validator = Validator::make(Input::all(),
	  		['email' => 'required'],
	  		['password' => 'required|min:6']
	  	);
	  	if($validator->passes())
	  	{
	  		dd("yeah");
	    	$email = $request->input('email');
	    	$password = $request->input('password');
	    	if(Auth::attempt('admin',['email' => $email,'password' => $password]))
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

    public function volunteerRequest()
    {

    }

    public function donation()
    {

    }

    public function assignVolunteer()
    {

    }

    public function logout()
    {
    	Auth::logout('admin');
    	return redirect('/admin');
    }
}
