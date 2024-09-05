<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeplateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[ThemeplateController::class,'landpage']);

Route::get("registration", [ThemeplateController::class,'registerpage']);
Route::get("terms&condition", [ThemeplateController::class,'tac']);

Route::get("ratings", [ThemeplateController::class,'ratings']);

Route::get("signin", [ThemeplateController::class,'loginpage']);
Route::get("services", [ThemeplateController::class,'services']);
Route::post("services", [ThemeplateController::class,'services']);
Route::get("booking", [ThemeplateController::class,'booking']);
Route::post("/register-client", [ThemeplateController::class,'registerclient'])->name('register-client');
Route::post("/login-client", [ThemeplateController::class,'loginclient'])->name('login-client');
Route::get("/dashboard", [ThemeplateController::class,'dashboard']);
Route::get("profile", [ThemeplateController::class,'clientprofile']);
Route::get("admindashboard", [ThemeplateController::class,'admindashboard']);
Route::post("/booking-client", [ThemeplateController::class,'addbooking'])->name('booking-client');
Route::get("logout", [ThemeplateController::class,'logout']);
Route::post("/login-admin", [ThemeplateController::class,'adminlogin'])->name('login-admin');
Route::get("loginAdmin", [ThemeplateController::class,'loginAdmin']);
Route::get("clientprofile", [ThemeplateController::class,'profile']);
Route::post("update_profile", [ThemeplateController::class,'updateprofile'])->name('update_profile');
//Route::put('updateprofile/{dataclient}', 'updateprofile@update')->name('updateprofile.update');
Route::get("appointment_details/{id}", [ThemeplateController::class,'appointmentdetails']);
Route::post("payment_details", [ThemeplateController::class,'payment'])->name('payment_details');

Route::post('/checkout', 'App\Http\Controllers\ThemeplateController@checkout')->name('checkout');
Route::get('success', 'App\Http\Controllers\ThemeplateController@success')->name('success');

Route::get("search", [ThemeplateController::class,'search']);
Route::get("adminab", [ThemeplateController::class,'adminab']);
Route::get("adminapp", [ThemeplateController::class,'adminapp']);
Route::get("adminpf", [ThemeplateController::class,'adminpf']);
Route::get("adminhome", [ThemeplateController::class,'adminhome']);


//Admin Controllers Functions
Route::get("admin_AppDetails/{id}", [AdminController::class,'admin_app_details']);
Route::post("adminpayment_details", [AdminController::class,'addpayment'])->name('adminpayment_details');

Route::get("Admin_Services", [AdminController::class,'servicespage_admin']);

Route::post("/Admin_Services_Add", [AdminController::class,'addservices'])->name('Admin_Services_Add');
Route::get("View_Admin_Services", [AdminController::class,'view_servicespage_admin']);
Route::post("/update_services", [ThemeplateController::class,'updateservices'])->name('update_services');
Route::get("logoutAdmin", [AdminController::class,'logoutAdmin']);


Route::get('Admin_Services/{servicesId}/upload', [AdminController::class, 'services']);
Route::post("Admin_Services/{servicesId}/upload", [AdminController::class,'insertservices']);


Route::get('showpayment', 'App\Http\Controllers\AdminController@showpayment')->name('showpayment');
