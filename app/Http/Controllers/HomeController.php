<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Mail;
use Input;
use App\Http\Requests\DonationValidationRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function submit(DonationValidationRequest $request)
    {	
  		$item = $request->input('item');
  		$name = $request->input('name');
  		$qty = $request->input('quantity');
  		$email = $request->input('email');
  		$address = $request->input('address');
  		$pincode = $request->input('pincode');


        $apiToken = 'AIzaSyBoUdAJb9cRUfXUn7DMDv56xHyGLzbETtc';

        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
        $url = $url . $address . ',' . $pincode  . ',' . 'India';
        $url = $url . '&' . 'key=' . $apiToken;
        $url = str_replace(' ', '+', $url);

    	$response = file_get_contents($url);
        $response = json_decode($response, true);

        if($response)
        {	
        	$lat = $response['results'][0]['geometry']['location']['lat'];
        	$lng = $response['results'][0]['geometry']['location']['lng'];
        }

        DB::table('donation')->insert(
            ['donor_name' => $name, 'donor_email' => $email, 'donor_address' => $address, 'donor_latitude' => $lat, 'donor_longitude' => $lng, 'item' => $item, 'quantity' => $qty]
        );
        Mail::send('email.donate', ['name' => $name], function ($message) 
        {
        	$email = Input::get('email');
            $message->to($email);
        });

        $errors = "Donation request received. Check your email!";
        return redirect('donate')->withErrors($errors);      
    }
}
