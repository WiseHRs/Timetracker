<?php

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

Route::get('schedules', function () {
	$schedules = DB::select('SELECT * FROM wise_wt_schedules');
    return view('timetracker::schedules',['schedulesList'=>$schedules]);
});

