<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
Use App\Http\Controllers\TaskController;
use App\Models\Task;



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

Route::get('/',[TaskController::class, 'index']);
Route::post('store',[TaskController::class, 'store']);
Route::post('delete/{id}',[TaskController::class, 'destroy']);
Route::post('edit/{id}',[TaskController::class, 'edit']);
Route::put('update/{id}',[TaskController::class, 'update']);