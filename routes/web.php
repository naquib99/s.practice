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
Route::get('/psm/{id}', [\App\Http\Controllers\managePsmController::class, 'show']);
Route::get('/psm/createPsm/mPsm', [\App\Http\Controllers\managePsmController::class, 'create']); //shows create post form
Route::post('/psm/createPsm/mPsm', [\App\Http\Controllers\managePsmController::class, 'store']); //saves the created post to the databse
Route::get('/psm/{id}/editPsm', [\App\Http\Controllers\managePsmController::class, 'edit']); //shows edit post form
Route::put('/psm/{managePsm}/editPsm', [\App\Http\Controllers\managePsmController::class, 'update']); //commits edited post to the database 
Route::delete('/psm/{managePsm}', [\App\Http\Controllers\managePsmController::class, 'destroy']); //deletes post from the database

Route::get('/timePsm/createTime',[\App\Http\Controllers\managePsmController::class, 'createTime']);
Route::post('/timePsm/createTime/mPsm', [\App\Http\Controllers\managePsmController::class, 'insertTime']);
Route::get('/timePsm/{timePsm}',[\App\Http\Controllers\managePsmController::class, 'showTime']);
Route::put('/timePsm/{id}/editPsm', [\App\Http\Controllers\managePsmController::class, 'updateTime']);
Route::delete('/timePsm/{timePsm}',[\App\Http\Controllers\managePsmController::class, 'destroyTime']);

//Project Details
Route::get('/projectDetails/viewLectProjects/{id}',[\App\Http\Controllers\projectDetailsController::class,'supervisor']);
Route::get('/projectDetails/viewStudentProject/{id}',[\App\Http\Controllers\projectDetailsController::class,'student']);
Route::delete('/projectDetails/viewLectProjects/delete/{id}',[\App\Http\Controllers\projectDetailsController::class,'delete']);
Route::put('/projectDetails/viewLectProjects/update/{id}',[\App\Http\Controllers\projectDetailsController::class,'update']);
Route::post('/projectDetails/viewLectProjects/add',[\App\Http\Controllers\projectDetailsController::class,'add']);

//Student Score
Route::get('/manageEvaluation/viewStudentDetails/{student_id}',[\App\Http\Controllers\manageEvaluationController::class,'viewStudentDetails']);
Route::get('/manageEvaluation/viewStudentList',[\App\Http\Controllers\manageEvaluationController::class,'viewStudentList']);
Route::get('/manageEvaluation/editScoreForm/{rubric_id}/{student_id}',[\App\Http\Controllers\manageEvaluationController::class,'editScoreForm']);
Route::post('/manageEvaluation/updateScore',[\App\Http\Controllers\manageEvaluationController::class,'updateScore']);
