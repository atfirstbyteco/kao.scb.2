<?php
use App\Models\Sponsor;
use Illuminate\Http\Request;
if (env('REDIRECT_HTTPS') == 'true' || env('REDIRECT_HTTPS') == true) {
    \URL::forceScheme('https');
}else{
    \URL::forceScheme('http');
}
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
    $sponsor = Sponsor::where([
        'sponsor_status' => 'active',
    ])->orderBy('sponsor_seq','asc')->get();
    return view('frontend.howto',compact('sponsor'));
});

Route::get('/howtowatch', function () {
    $sponsor = Sponsor::where([
        'sponsor_status' => 'active',
    ])->orderBy('sponsor_seq','asc')->get();
    return view('frontend.howtoticket',compact('sponsor'));
});

