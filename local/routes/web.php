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
use App\service;
use App\page;




Auth::routes(['register' => true]);

Route::get('/', function(){
        return redirect(route('login'));
});
Route::get('/home', 'backend\BackendController@index')->name('home');
Route::get('/get_chartinfo', 'backend\BackendController@get_chartinfo');

// Custom User Managment
Route::resource('/custom-user', 'backend\CustomUserController');

// User Role Managment
Route::resource('/user-role', 'backend\UserRoleController');

// Admin Page
Route::get('page_deactive/{id}', 'backend\PageController@deactive');
Route::get('page_active/{id}', 'backend\PageController@active');
Route::resource('/admin_page', 'backend\PageController');

// Admin newsletter
Route::get('email_deactive/{id}', 'backend\NewsleterController@deactive');
Route::get('email_active/{id}', 'backend\NewsleterController@active');
Route::resource('/newsletter', 'backend\NewsleterController');

// Admin Settings
Route::resource('admin_settings','backend\SettingController');

Route::get('/{slug}', function($slug){
	
        $pageinfo = page::where('slug',$slug)->first();
        return view('frontend.page', compact('pageinfo'));
});

