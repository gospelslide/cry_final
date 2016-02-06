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
Route::post('/submit', 'HomeController@submit');
 
/* Main Routes */

/* Admin Routes */

Route::get('/admin', 'AdminLoginController@display');
Route::post('/admin/validate', 'AdminLoginController@login');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin/volunteer_requests', 'AdminController@volunteerRequest');
Route::post('/admin/volunteer_requests/approve', 'AdminController@approveVolunteer');
Route::post('/admin/volunteer_requests/reject', 'AdminController@rejectVolunteer');
Route::get('/admin/donations', 'AdminController@donation');
Route::post('/admin/donations/assign', 'AdminController@assignVolunteer');

/* Admin Routes */

/* Volunteer Routes */

Route::get('/volunteer', 'VolunteerLoginController@display');
Route::post('/volunteer/validate', 'VolunteerLoginController@login');
Route::get('/volunteer/logout', 'VolunteerController@logout');
Route::get('/volunteer/home', 'VolunteerController@index');
Route::get('/volunteer/register', 'VolunteerLoginController@register');
Route::get('/volunteer/edit', 'VolunteerController@edit');
Route::post('/volunteer/update', 'VolunteerController@update');
Route::post('/volunteer/register/create', 'VolunteerLoginController@create');
Route::get('/volunteer/task_assigned', 'VolunteerController@taskAssigned');
Route::get('/volunteer/task_pending', 'VolunteerController@taskPending');

/* Volunteer Route */