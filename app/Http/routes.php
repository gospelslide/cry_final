<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Main Routes */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
	return view('contact');
});
Route::get('/donate', function () {
	return view('donate');
});
Route::post('/donate', 'HomeController@submit');
 
/* Main Routes */

/* Admin Routes */

Route::get('/admin', 'AdminController@display');
Route::post('/admin/validate', 'AdminController@login');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin/volunteer_requests', 'AdminController@volunteerRequest');
Route::get('/admin/donations', 'AdminController@donation');
Route::get('/admin/donations/assign', 'AdminController@assignVolunteer');

/* Admin Routes */

/* Volunteer Routes */

/* Volunteer Route */