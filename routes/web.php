<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/main', [App\Http\Controllers\websiteController::class, 'main'])->name('main');
Route::get('/about', [App\Http\Controllers\websiteController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\websiteController::class, 'contact'])->name('contact');
Route::get('/locations', [App\Http\Controllers\websiteController::class, 'locations'])->name('locations');
Route::get('/moving-services', [App\Http\Controllers\websiteController::class, 'moving_services'])->name('moving_services');
Route::get('/testimonials', [App\Http\Controllers\websiteController::class, 'testimonials'])->name('testimonials');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboards');

    Route::get('/sensors', [App\Http\Controllers\SensorController::class, 'index'])->name('sensors');
    Route::get('/create', [App\Http\Controllers\SensorController::class, 'create'])->name('sensors.create');
    Route::post('/store', [App\Http\Controllers\SensorController::class, 'store'])->name('sensors.store');
    Route::get('/edit/{id}', [App\Http\Controllers\SensorController::class, 'edit'])->name('sensors.edit');
    Route::post('/update/{id}', [App\Http\Controllers\SensorController::class, 'update'])->name('sensors.update');
    Route::get('/delete/{id}', [App\Http\Controllers\SensorController::class, 'delete'])->name('sensors.delete');
    Route::get('change_status', [App\Http\Controllers\SensorController::class, 'status'])->name('sensors.status');


    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
