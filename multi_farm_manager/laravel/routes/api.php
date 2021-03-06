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

Route::get('manager/newborn', 'App\Http\Controllers\New_Born_CowController@index');
Route::get('manager/newborn/confirm/{id}', 'App\Http\Controllers\New_Born_CowController@confirm_cow');
Route::post('login/google', 'App\Http\Controllers\LoginController@socialLogin');
Route::post('login', 'App\Http\Controllers\LoginController@verify');
Route::get('manager/milkcollection', 'App\Http\Controllers\Milk_CollectionController@index');
Route::get('manager/milkcollection/cowdetails/{id}', 'App\Http\Controllers\Milk_CollectionController@details');
Route::get('manager/profilesettings', 'App\Http\Controllers\Admin_ProfileController@index');
Route::post('manager/profilesettings/edit', 'App\Http\Controllers\Admin_ProfileController@edit_profile');

Route::get('manager/vaccination', 'App\Http\Controllers\Vaccinated_CowController@index');
Route::post('manager/vaccination/check', 'App\Http\Controllers\Vaccinated_CowController@vaccinate_done2');
Route::get('manager/vaccination/check/{id}', 'App\Http\Controllers\Vaccinated_CowController@vaccination');




//worker

Route::get('/worker/time/schedule', 'App\Http\Controllers\Time_ScheduleController@schedule');
Route::get('/worker/time/schedule/{s_id}', 'App\Http\Controllers\Time_ScheduleController@process');
Route::get('/worker/give/attendance', 'App\Http\Controllers\Dairy_AttendanceController@index');
Route::get('/edit/profile', 'App\Http\Controllers\Profile_editController@edit');
Route::post('/edit/profile', 'App\Http\Controllers\Profile_editController@update');


Route::get('manager/vaccination', 'App\Http\Controllers\Vaccinated_CowController@index');
Route::post('manager/vaccination/check', 'App\Http\Controllers\Vaccinated_CowController@vaccinate_done2');
Route::get('manager/vaccination/check/{id}', 'App\Http\Controllers\Vaccinated_CowController@vaccination');




//worker

Route::get('/worker/time/schedule', 'App\Http\Controllers\Time_ScheduleController@schedule');
Route::get('/worker/time/schedule/{s_id}', 'App\Http\Controllers\Time_ScheduleController@process');
Route::get('/worker/give/attendance', 'App\Http\Controllers\Dairy_AttendanceController@index');

//customer
Route::get('/customer/profile/{id}', 'App\Http\Controllers\CustomerProfileController@profile');
Route::get('/customer/profile/delete/{id}', 'App\Http\Controllers\CustomerProfileController@deleteProfile');
Route::get('/customer/dairies', 'App\Http\Controllers\DairiesController@index');
Route::get('/customer/crops', 'App\Http\Controllers\CorpsController@index');
Route::post('/sign_up/form', 'App\Http\Controllers\CustomerRegistrationController@registration');
Route::get('/customer/dairies/details/{id}', 'App\Http\Controllers\DairiesController@details');
Route::post('/customer/dairies/details/{id}', 'App\Http\Controllers\CartController@index');
Route::post('/customer/crops/details/{id}', 'App\Http\Controllers\CartController@index');

Route::get('/customer/cart', 'App\Http\Controllers\CartController@cartView');
Route::get('/customer/cart/delete/{id}', 'App\Http\Controllers\CartController@delete');
Route::get('/customer/cart/confirm/{id}', 'App\Http\Controllers\ConfirmOrderController@confirm');

Route::get('/customer/cart', 'App\Http\Controllers\CartController@cartView');