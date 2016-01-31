<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Input;
use DB;
use App\Admin;
use Hash;
use App\Http\Requests\AdminValidationRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sarav\Multiauth\Foundation\AuthenticatesAndRegistersUsers;

class AdminController extends Controller
{
    public function display()
    {	
    	return view('admin.login')->with('message', '');
    }

    public function login(AdminValidationRequest $request)
    {		
        $email = $request->input('email');
        $password = $request->input('password');
        $admin = DB::table('admin')->where('email',$email)->first();
        if($admin)
        {
            if(!strcmp($admin->password,$password))
            {
                Auth::loginUsingId('admin',$admin->id);
                return redirect('/admin/home');
            }  
            return "wrong password"; 
        }
        return "email not found";
    }

    public function index()
    {
        $donations = DB::table('donation')->where('status','0')->get();
        foreach($donations as $donation)
        {
            echo $donation->item . "\n";
        }
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
