<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('manager/home', 'App\Http\Controllers\DF_DashboardController@index');
Route::get('manager/staff', 'App\Http\Controllers\StaffController@index');
Route::get('manager/staff/delete/{id}', 'App\Http\Controllers\StaffController@delete_staff');
Route::get('manager/getshiftdetails', 'App\Http\Controllers\StaffController@get_shift_details');
Route::post('manager/staff/add', 'App\Http\Controllers\StaffController@register_staff');
Route::get('manager/getstaffdetails/{id}', 'App\Http\Controllers\StaffController@staff_details');
Route::post('manager/staff/edit/{id}', 'App\Http\Controllers\StaffController@edit_staff');
Route::get('manager/cow', 'App\Http\Controllers\Cow_DetailsController@index');
Route::get('manager/cow/delete/{id}', 'App\Http\Controllers\Cow_DetailsController@delete_cow');
Route::post('manager/cow/add', 'App\Http\Controllers\Cow_DetailsController@add_cow');