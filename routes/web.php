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

use backend\UserController;
use backend\UserRoleController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\NewsleterController;
use backend\SettingController;
use Illuminate\Support\Facades\Auth;



Auth::routes();

Route::get('/', function(){
   return redirect(route('login'));
});


Route::group(['middleware' => 'auth'], function () {

Route::get('/home', [BackendController::class, 'index'])->name('home')->middleware('admin');

Route::get('/get_chartinfo', [BackendController::class, 'get_chartinfo']);

// Custom User Managment.
Route::resource('/users', UserController::class);

// User Role Managment.
Route::resource('/user-role', UserRoleController::class);

// Admin Page.
Route::get('page_deactive/{id}', [PageController::class, 'deactive']);
Route::get('page_active/{id}', [PageController::class, 'active']);
Route::resource('/admin_page', 'backend\PageController');

// Admin newsletter.
Route::get('email_deactive/{id}', [NewsleterController::class, 'deactive']);
Route::get('email_active/{id}', [NewsleterController::class, 'active']);
Route::resource('/newsletter', 'backend\NewsleterController');

// Admin Settings.
Route::resource('admin_settings', SettingController::class);

// Customer Portal
Route::resource('customer-portal', 'backend\CustomerPortal');

});
