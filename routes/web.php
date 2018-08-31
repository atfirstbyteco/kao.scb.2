<?php
use App\Models\Sponsor;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');

Route::get('/howto', function () {
    $sponser = Sponsor::where([
        'sponsor_status' => 'active',
    ])->get();
    return view('frontend.howto',compact('sponser'));
});

Route::get('/howtowatch', function () {
    $sponser = Sponsor::where([
        'sponsor_status' => 'active',
    ])->get();
    return view('frontend.howtoticket',compact('sponser'));
});

