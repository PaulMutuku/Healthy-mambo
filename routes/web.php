<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view', [AdminController::class,'addview']);
Route::post('/upload_doctor', [AdminController::class,'upload']);
Route::post('/appointment', [HomeController::class,'appointment']);
Route::get('/myappointment', [HomeController::class,'myappointment']);
Route::get('/consult', [HomeController::class,'consult']);

Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);
Route::get('/update_appoint/{id}', [HomeController::class,'update_appoint']);
Route::post('/editappointment/{id}', [HomeController::class,'editappointment']);
Route::get('/showappointment', [AdminController::class,'showappointment']);
Route::get('/Approved/{id}', [AdminController::class,'Approved']);
Route::get('/Cancel/{id}', [AdminController::class,'Cancel']);
Route::get('/showdoctor', [AdminController::class,'showdoctor']);
Route::get('/deletedoctor/{id}', [AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}', [AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}', [AdminController::class,'editdoctor']);
Route::get('/emailview/{id}', [AdminController::class,'emailview']);
Route::post('/sendemail/{id}', [AdminController::class,'sendemail']);
