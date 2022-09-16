<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RepportController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DispatcherController;
use App\Http\Controllers\Trip_requestController;

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
    return view('Auth.login');
});

// Route::get('/', function () {
//     return view('Accueil');
// });
Route::namespace('App\Http\Controllers')->group(function () {

    Route::get('regist/{page?}/{update?}', 'Auth\sign_in@form');
    Route::post('sign', 'Auth\sign_in@create');
    Route::post('update', 'Auth\sign_in@update');
    Route::get('user/delete/{id}', 'Auth\sign_in@delete');
    Route::get('userlist', 'Auth\sign_in@index');
    Route::post('userlist', 'Auth\sign_in@index');
    Route::get('loginform', 'Auth\LoginController@loginform');
    Route::post('loginuser', 'Auth\LoginController@login');
    Route::get('logoutuser', 'Auth\LoginController@logout');
});

Route::get('dispatcher_dashboad', function () {
    return view('dispatcher.dashboard');
});

Route::get('new_request', [DashboardController::class, 'form']);
Route::post('new_request', [DashboardController::class, 'add']);
Route::get('request_list/{userid}', [DashboardController::class, 'ListRequests']);

Route::get('dispatcher_dashboad/ongoin', [RequestController::class, 'ongoinIndex']);
Route::get('history/{page}', [RequestController::class, 'history']);
Route::get('Manage/{trip_request}', [RequestController::class, 'create']);
Route::post('Manage/update', [RequestController::class, 'update']);
Route::post('Manage/reupdate', [RequestController::class, 'reupdate']);

Route::post('cars/add/{id?}', [CarsController::class, 'store']);
Route::get('cars/add/{id?}', [CarsController::class, 'create']);
Route::get('cars/update', [CarsController::class, 'update']);
Route::get('cars/list', [CarsController::class, 'index']);
Route::get('cars/delete/{id}', [CarsController::class, 'delete']);
Route::post('cars/list', [CarsController::class, 'index']);
Route::get('print/{id}', [RepportController::class, 'print']);

Route::get('/home', [HomeController::class, 'index->name("home")']);
Route::get('passenger_dashboard', [DashboardController::class, 'index']);
Route::get('requestForm', [DashboardController::class, 'form']);
Route::get('requestList', [DashboardController::class, 'list']);

Route::get('repport', [RepportController::class, 'create']);
Route::post('repport/update', [RepportController::class, 'store']);

Route::get('requests', [RequestController::class, 'dashboard']);
Route::get('DriverRequest/{id}', [DriverController::class, 'index']);
Route::get('DriverPending/{id}', [DriverController::class, 'history']);

Route::get('driver_dashboad', function () {
    return view('driver.dashboard');
});
