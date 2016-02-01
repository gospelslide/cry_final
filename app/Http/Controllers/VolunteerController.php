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
        dd("yo");
    }

    public function taskAssigned()
    {
        $volunteerid = Auth::user('volunteer')->id;
    	$condition=['volunteer_id' => $volunteerid,'status' => '2'];
    	$tasks = DB::table('donation')->where($condition)->get();
    	/*
		Method for onClick Complete button
    	*/
    }

    public function taskPending()
    {
        $volunteerid = Auth::user('volunteer')->id;
    	$condition=['volunteer_id' => $volunteerid,'status' => '1'];
    	$tasks = DB::table('donation')->where($condition)->get();
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
