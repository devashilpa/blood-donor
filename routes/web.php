<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\bloodController;
use App\http\controllers\adminController;
use App\models\register;
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
    return view('index');
});
Route::get('/register',[bloodController::class,'register']);
Route::get('/about',[bloodController::class,'about']);
Route::post('/RegisterAction',[bloodController::class,'RegisterAction']);
Route::get('/adminlogin',[bloodController::class,'adminlogin']);
Route::post('/adminloginAction',[adminController::class,'adminloginAction']);
Route::get('/adminindex',[adminController::class,'adminindex']);
Route::get('/registerview',[adminController::class,'registerview']);
Route::get('/userlogin',[bloodController::class,'userlogin']);
Route::post('/userloginAction',[bloodController::class,'userloginAction']);
Route::get('/logout',[bloodController::class,'logout']);
// Route::get('/donordetails',[bloodController::class,'donorDetails']);
Route::get('/viewdonor',[bloodController::class,'viewDonor']);


Route::post('/search',[bloodController::class,'search']);