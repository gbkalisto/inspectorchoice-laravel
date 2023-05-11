<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\WorkController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\joinController;
use App\Http\Controllers\Frontend\ContactController;

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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/work',[WorkController::class,'index']);
Route::get('/faq',[FaqController::class,'index']);
Route::get('/join',[JoinController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'store']);

