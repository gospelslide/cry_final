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

    public function __construct()
    {
        $this->middleware('admin.guest');
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
        $volunteers = DB::table('volunteer')->where('status','0')->get();
        foreach($volunteers as $volunteer)
        {
            echo $volunteer->name . "\n";
        }
    }

    public function donation()
    {
        $donations = DB::table('donation')->where('status','1')->get();
        foreach($donations as $donation)
        {
            echo $donation->item . "\n";
        }
    }

    public function approveVolunteer($id)
    {
        //volunteer id to be passed
        DB::table('volunteer')->where('id',$id)->update(['status' => '1']);
        return redirect('/admin/volunteer_requests');
    }

    public function distance($lat1, $lon1, $lat2, $lon2) 
    {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $distance = $miles*1.609344;

        return $distance;
    }

    public function assignVolunteer()
    {   
        //donation id to be passed
        $result = DB::select('select * from volunteer where status = 1');
        $donor_location=DB::table('donation')
                    ->select(DB::raw('donor_latitude,donor_longitude'))
                    ->where('id', '=', '3')
                    ->first();
        
        $donor_lat=$donor_location->donor_latitude;
        $donor_lon=$donor_location->donor_longitude;
        $proximity=[];
        foreach($result as $value)
        {
            $temp = $value->id;
            $proximity[$temp]=$this->distance($donor_lat,$donor_lon,$value->latitude,$value->longitude);
        }
        asort($proximity);
        $volunteer=[];
        $count=0;
        foreach($proximity as $key=>$value)
        {
            $volunteer[] = DB::table('volunteer')
                    ->select(DB::raw('*'))
                    ->where('id', '=', $key)
                    ->get()[0];
        }
        return view('admin.viewDetails')->with('volunteer',$volunteer)->with('proximity',$proximity);
    }   

    public function logout()
    {
    	Auth::logout('admin');
    	return redirect('/admin');
    }
}
