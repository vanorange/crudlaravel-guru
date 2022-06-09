<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

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
//     return view('welcome');
// });

Route::get('/', [GuruController::class,'index']);
Route::get('/create',[GuruController::class, 'create']);
Route::post('/store',[GuruController::class, 'store']);
Route::get('/show/{id}',[GuruController::class, 'show']);
Route::post('/update/{id}',[GuruController::class, 'update']);
Route::get('/destroy/{id}',[GuruController::class, 'destroy']);
