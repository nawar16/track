<?php

use Illuminate\Support\Facades\Route;
use App\Log;

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
Route::group(['middleware' => 'log.route'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::get('info', 'IpInfoController@lookup');
Route::get('hidden', function(){
$items = Log::all();
return view('table')->with('items', $items);
});


