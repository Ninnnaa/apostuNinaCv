<?php

use App\Http\Controllers\UserData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    $generalData = DB::table('general_data')->where('id',"=", 1)->first();
    return view('welcome', ['generalData' => $generalData]);
});

Route::get('/cv', function () {

    $generalData = DB::table('general_data')->where('id',"=", 1)->first();
    $skills = DB::table('skills')->get();
    $experiences = DB::table('experiences')->get();

    return view('cv', ['generalData' => $generalData, 'skills'=>$skills, 'experiences'=>$experiences ]);
});
