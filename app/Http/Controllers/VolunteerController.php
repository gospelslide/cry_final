<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Volunteer;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Sarav\Multiauth\Foundation\AuthenticatesAndRegistersUsers;


class VolunteerController extends Controller
{

    public function __construct()
    {
        $this->middleware('volunteer.guest');

    }

    public function index()
    {
        $volunteerid = Auth::user('volunteer')->id;
        $condition=['volunteer_id' => $volunteerid,'status' => '3'];
        $tasks = DB::table('donation')->where($condition)->get();
        return view('volunteer.home')->with('tasks',$tasks);
    }

    public function taskAssigned()
    {
        $volunteerid = Auth::user('volunteer')->id;
    	$condition=['volunteer_id' => $volunteerid,'status' => '2'];
    	$tasks = DB::table('donation')->where($condition)->get();
        return view('volunteer.task')->with('tasks',$tasks);
        /*
		Method for onClick Complete button
    	*/
    }

    public function taskPending()
    {
        $volunteerid = Auth::user('volunteer')->id;
    	$condition=['volunteer_id' => $volunteerid,'status' => '1'];
    	$tasks = DB::table('donation')->where($condition)->get();
        return view('volunteer.pending')->with('tasks',$tasks);
    	/*
		Method for approve/deny donation
    	*/
    }

    public function edit()
    {
        return view('volunteer.edit');
    }
    
    public function  logout()
    {
    	Auth::logout('volunteer');
    	return redirect('/volunteer');
    }
}
