<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

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

//my todo project
Route::post('todo',[TodoController::class,'addData']);
Route::get('todo',[TodoController::class,'list']);
Route::get('delete/{id}',[TodoController::class,'delete']);
Route::get('edit/{id}',[TodoController::class,'showData']);
Route::post('edit',[TodoController::class,'update']);



