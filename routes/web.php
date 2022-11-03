<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandleController;

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

Route::get('/', [HandleController::class,'loginPage']);
Route::get('/about', [HandleController::class,'about']);
Route::get('/blog', [HandleController::class,'blog']);
Route::get('/web/programming/part/1', [HandleController::class,'part1']);
Route::get('/web/programming/part/2', [HandleController::class,'part2']);
Route::post('/login', [HandleController::class,'loginLogic']);


