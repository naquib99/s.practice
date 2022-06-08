<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Manage PSM
Route::get('/psm', [\App\Http\Controllers\managePsmController::class, 'index']);
Route::get('/psm/{mPsm_id}', [\App\Http\Controllers\managePsmController::class, 'show']);
Route::get('/psm/createPsm/post', [\App\Http\Controllers\managePsmController::class, 'create']); //shows create post form
Route::post('/psm/createPsm/post', [\App\Http\Controllers\managePsmController::class, 'store']); //saves the created post to the databse
Route::get('/psm/{managePsm}/editPsm', [\App\Http\Controllers\managePsmController::class, 'edit']); //shows edit post form
Route::put('/psm/{managePsm}/editPsm', [\App\Http\Controllers\managePsmController::class, 'update']); //commits edited post to the database 
Route::delete('/psm/{managePsm}', [\App\Http\Controllers\managePsmController::class, 'destroy']); //deletes post from the database

Route::post('/psm/createTime',[\App\Http\Controllers\managePsmController::class, 'showTime']);
Route::post('/psm/updateTime',[\App\Http\Controllers\managePsmController::class, 'updateTime']);
Route::post('/psm/deleteTime',[\App\Http\Controllers\managePsmController::class, 'destroyTime']);