<?php

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

//Route::post('/home', 'App\Http\Controllers\HomeController@index')->name('home_farm_manager.index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::group(['middleware'=>['sess', 'adminv']], function(){
    Route::get('/home/dashboard', 'App\Http\Controllers\DF_DashboardController@index');

    Route::get('home/sold_cows', 'App\Http\Controllers\Sold_CowsController@index');

    Route::get('home/cow_info', 'App\Http\Controllers\Cow_DetailsController@index')->name('home_farm_manager.cow_details');
    Route::post('home/cow_info/add_cow', 'App\Http\Controllers\Cow_DetailsController@add_cow');
    Route::get('home/cow_info/delete_cow/{id}', 'App\Http\Controllers\Cow_DetailsController@delete_cow');
    Route::get('home/cow_info/sell_cow/{id}', 'App\Http\Controllers\Cow_DetailsController@sell_cow');
    
    Route::get('home/new_born_cow', 'App\Http\Controllers\New_Born_CowController@index');
    Route::get('home/new_born_cow/done/{id}', 'App\Http\Controllers\New_Born_CowController@add_cow');
    
    Route::get('home/vaccinated_cow_info', 'App\Http\Controllers\Vaccinated_CowController@index');
    Route::get('home/vaccinated_cow_info/vaccinate_done/{id}', 'App\Http\Controllers\Vaccinated_CowController@vaccinate_done');
    Route::get('home/vaccinated_cow_info/vaccinate_undone/{id}', 'App\Http\Controllers\Vaccinated_CowController@vaccinate_undone');
    
    Route::get('home/profile', 'App\Http\Controllers\Admin_ProfileController@index');
    Route::post('home/profile', 'App\Http\Controllers\Admin_ProfileController@edit_profile');
    
    Route::get('home/dairyfarm/staff', 'App\Http\Controllers\StaffController@index')->name('home_farm_manager.staff');
    Route::post('home/dairyfarm/staff/', 'App\Http\Controllers\StaffController@register_staff');
    Route::post('home/dairyfarm/staff/edit/{id}', 'App\Http\Controllers\StaffController@edit_staff');
    Route::get('home/dairyfarm/staff/details/{id}', 'App\Http\Controllers\StaffController@staff_details');
    Route::get('home/dairyfarm/staff/delete/{id}', 'App\Http\Controllers\StaffController@delete_staff');
    
    Route::get('home/cow_feeds', 'App\Http\Controllers\Cow_FeedsController@index');
    Route::post('home/cow_feeds/add_feed', 'App\Http\Controllers\Cow_FeedsController@add_feed');
    
    Route::get('home/sold_dairy_items', 'App\Http\Controllers\Sold_Dairy_ItemsController@index');

    Route::get('home/shift_details', 'App\Http\Controllers\Shift_DetailsController@index');
    Route::post('home/shift_details/add_shift', 'App\Http\Controllers\Shift_DetailsController@add_shift');
    
    Route::get('home/milk_collection', 'App\Http\Controllers\Milk_CollectionController@index');
    
    Route::get('home/milk_collection/details/{id}', 'App\Http\Controllers\Milk_CollectionController@details');
    Route::post('home/milk_collection/details/{id}', 'App\Http\Controllers\Milk_CollectionController@add_comment');
});





Route::group( ['middleware'=>['cropsess'] ], function(){
 
    //Crop_Worker:
 
Route::get('/crop_worker/dashboard','App\Http\Controllers\Crop_WorkerController@dashboard');
 
Route::get('/time/schedule','App\Http\Controllers\Time_ScheduleController@schedule');
Route::get('/time/schedule/{s_id}','App\Http\Controllers\Time_ScheduleController@process');
 
Route::get('/ordering/seed','App\Http\Controllers\Ordering_SeedController@index');
Route::post('/ordering/seed','App\Http\Controllers\Ordering_SeedController@order');
 

Route::get('/to-do-list', 'App\Http\Controllers\To_Do_ListController@index');
 
Route::get('/edit/profile', 'App\Http\Controllers\Profile_editController@edit');
Route::post('/edit/profile', 'App\Http\Controllers\Profile_editController@update');
 

Route::get('/selling/crop','App\Http\Controllers\Selling_CropController@index');
Route::post('/selling/crop','App\Http\Controllers\Selling_CropController@add');

Route::get('/selling/crop{i_id}','App\Http\Controllers\Selling_CropController@delete');


Route::get('/crop/details{i_id}', 'App\Http\Controllers\ViewCropDetailsController@index');
 
});

Route::group(['middleware'=>['dairysess'] ], function(){
    //dairy worker:
    Route::get('/dairy_worker/dashboard','App\Http\Controllers\Dairy_WorkerController@dashboard');

    Route::get('/give/attendance','App\Http\Controllers\Dairy_AttendanceController@index');
    
    Route::get('/collect/milk', 'App\Http\Controllers\MilkCollectionController@index');
    Route::post('/collect/milk', 'App\Http\Controllers\MilkCollectionController@insert');


});
    
    
// Route::get('/logout','App\Http\Controllers\LogOutController@index');





//dairy worker:
Route::get('dairy_worker/dashboard','App\Http\Controllers\Dairy_WorkerController@dashboard');

Route::get('/give/attendance','App\Http\Controllers\Dairy_AttendanceController@index');

Route::get('collect/milk', 'App\Http\Controllers\MilkCollectionController@index');
Route::post('/collect/milk', 'App\Http\Controllers\MilkCollectionController@insert');


//Cutomer

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login','App\Http\Controllers\LoginController@verify');
Route::get('/logout','App\Http\Controllers\LogOutController@index');

Route::get('/sign_up/form','App\Http\Controllers\CustomerRegistrationController@index');
Route::post('/sign_up/form','App\Http\Controllers\CustomerRegistrationController@registration');

Route::get('/customer', 'App\Http\Controllers\CustomerController@customerIndex')->middleware('sess');
Route::get('/customer/profile', 'App\Http\Controllers\CustomerProfileController@profile')->middleware('sess');
Route::post('/customer/profile', 'App\Http\Controllers\CustomerProfileController@profile')->middleware('sess');


Route::get('/customer/dairies', 'App\Http\Controllers\DairiesController@index')->middleware('sess');
Route::get('/customer/profile/edit', 'App\Http\Controllers\EditProfileController@index')->middleware('sess');
Route::post('/customer/profile/edit', 'App\Http\Controllers\EditProfileController@modify')->middleware('sess');

Route::get('/customer/profile/delete/{id}', 'App\Http\Controllers\CustomerProfileController@deleteProfile')->middleware('sess');

Route::get('/customer/dairies/cart/{id}', 'App\Http\Controllers\CartController@index')->middleware('sess');
Route::get('/customer/dairies/cart', 'App\Http\Controllers\CartController@cartView')->middleware('sess');
Route::get('/customer/dairies/details/{id}', 'App\Http\Controllers\DairiesController@details')->middleware('sess');
Route::post('/customer/dairies/details/{id}', 'App\Http\Controllers\CartController@index')->middleware('sess');
Route::get('/customer/dairies/cart/confirm/{id}', 'App\Http\Controllers\ConfirmOrderController@confirm')->middleware('sess');
Route::get('/customer/dairies/cart/delete/{id}', 'App\Http\Controllers\CartController@delete')->middleware('sess');


Route::get('/customer/crops', 'App\Http\Controllers\CorpsController@index')->middleware('sess');
Route::get('/customer/crops/details/{id}', 'App\Http\Controllers\CropsController@details')->middleware('sess');
Route::post('/customer/crops/details/{id}', 'App\Http\Controllers\CartController@index')->middleware('sess');
Route::get('/customer/crops/cart/{id}', 'App\Http\Controllers\CartController@cropIndex')->middleware('sess');
Route::get('/customer/crops/cart', 'App\Http\Controllers\CartController@cartView')->middleware('sess');
Route::post('/customer/crops/cart', 'App\Http\Controllers\CartController@index')->middleware('sess');
Route::get('/customer/crops/cart/confirm/{id}', 'App\Http\Controllers\ConfirmOrderController@confirm')->middleware('sess');
Route::get('/customer/crops/cart/delete/{id}', 'App\Http\Controllers\CartController@delete')->middleware('sess');
