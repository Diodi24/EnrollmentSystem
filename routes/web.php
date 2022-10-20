<?php

use App\Http\Controllers\UserController;
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

// Route::get('/l', function () {
//     return view('Login');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Calendar', function () {
//     return view('Calendar');
// });

// Route::get('/Password', function () {
//     return view('Password');
// });

Route::get('/',[UserController::class,'index'])->middleware('auth');

Route::get('/login',[UserController::class,'login'])->name('login');

Route::get('/register',[UserController::class,'register']);

Route::get('/Password', [UserController::class,'password']);

Route::get('/enrollment',[UserController::class,'enrollment']);

Route::get('/Calendar', [UserController::class, 'Calendar']);

Route::post('/login/process',[UserController::class,'process']);

Route::post('/store',[UserController::class,'store']);

Route::post('/logout',[UserController::class,'logout']);
