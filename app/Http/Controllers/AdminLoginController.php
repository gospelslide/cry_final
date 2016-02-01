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

class AdminLoginController extends Controller
{

    public function display()
    {	
    	return view('admin.login');
    }

    public function login(AdminValidationRequest $request)
    {		
        $email = $request->input('email');
        $password = $request->input('password');
        $admin = DB::table('admin')->where('email',$email)->first();
        $errors = 'Invalid username or password!';
        if($admin)
        {
            if(!strcmp($admin->password,$password))
            {
                Auth::loginUsingId('admin',$admin->id);
                return redirect('/admin/home');
            }   
        }
        return redirect()->back()->withErrors($errors);
    }

}