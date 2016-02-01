<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\VolunteerValidationRequest;
use DB;
use Auth;

class VolunteerLoginController extends Controller
{
        public function display()
    {   
        return view('volunteer.login')->with('message', '');
    }

    public function login(VolunteerValidationRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $volunteer = DB::table('volunteer')->where('email',$email)->first();
        $errors = 'Invalid username or password!';
        if($volunteer)
        {
            if(!strcmp($volunteer->password,$password))
            {
                Auth::loginUsingId('volunteer',$volunteer->id);
                return redirect('/volunteer/home');
            }   
        }
        return redirect()->back()->withErrors($errors);
    }

}
