<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterHealthOfficer;
use App\Http\Controllers\DonorFundsController;
use Illuminate\Support\Facades\DB;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

//mycontrolllers
Route::get("/registerofficer", [RegisterHealthOfficer::class, 'index'])->name("registerofficer");
Route::post("/registerofficer", [RegisterHealthOfficer::class, 'store']);
Route::get('/officerlist', function(){
	$officer_list = DB::table('health_officers')
        ->join('hospitals', 'health_officers.OfficerId', '=',
         'hospitals.HospitalId')
		->select('health_officers.HospitalCategory','hospitals.HospitalName', 'health_officers.OfficerName', 
		'health_officers.OfficerUserName'
        )
       ->get();
	return view('officer_list' ,['officerlist'=>$officer_list]);
});

Route::get("/donations", [DonorFundsController::class, 'index'])->name("donations");
Route::post("/donations", [DonorFundsController::class, 'store']);
Route::get('/donorlist',
function(){
	$donorlist = DB::table('funds')->get();
	return view('donorlist', ['donorlist' =>$donorlist]);
}

);
