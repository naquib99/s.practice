<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageRubricController;

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

/*
|--------------------------------------------------------------------------
| MANAGE PSM MODULE
|--------------------------------------------------------------------------
*/
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

/*
|--------------------------------------------------------------------------
| MANAGE PROJECT DETAILS MODULE
|--------------------------------------------------------------------------
*/
Route::get('/projectDetails/viewLectProjects/{id}',[\App\Http\Controllers\projectDetailsController::class,'displayListOfProjects']);
Route::get('/projectDetails/viewStudentProject/{id}',[\App\Http\Controllers\projectDetailsController::class,'displayStudentProject']);
Route::delete('/projectDetails/viewLectProjects/delete/{id}',[\App\Http\Controllers\projectDetailsController::class,'removeProject']);
Route::put('/projectDetails/viewLectProjects/update/{id}',[\App\Http\Controllers\projectDetailsController::class,'EditProject']);
Route::post('/projectDetails/viewLectProjects/add',[\App\Http\Controllers\projectDetailsController::class,'AddProject']);

/*
|--------------------------------------------------------------------------
| MANAGE RUBRIC MODULE
|--------------------------------------------------------------------------
*/
Route::get('rubricIndex','App\Http\Controllers\manageRubricController@view'); //View Rubric
Route::get('rubricCreate', function () {return view('manageRubric/rubricCreate');}); //Create Rubric
Route::post('rubric/create','App\Http\Controllers\manageRubricController@create'); //Post Created Rubric to Index
Route::get('/rubric/{id}/edit','App\Http\Controllers\manageRubricController@edit'); //Edit Rubric
Route::post('/rubric/{id}/update','App\Http\Controllers\manageRubricController@update'); //Update Rubric
Route::get('/rubric/{id}/delete','App\Http\Controllers\manageRubricController@delete'); //Delete Rubric

/*
|--------------------------------------------------------------------------
| MANAGE EVALUATION MODULE
|--------------------------------------------------------------------------
*/
Route::get('/manageEvaluation/viewStudentDetails/{student_id}',[\App\Http\Controllers\manageEvaluationController::class,'viewStudentDetails']);
Route::get('/manageEvaluation/viewStudentList',[\App\Http\Controllers\manageEvaluationController::class,'viewStudentList']);
Route::get('/manageEvaluation/editScoreForm/{rubric_id}/{student_id}',[\App\Http\Controllers\manageEvaluationController::class,'editScoreForm']);
Route::post('/manageEvaluation/updateScore',[\App\Http\Controllers\manageEvaluationController::class,'updateScore']);


/*
|--------------------------------------------------------------------------
| MANAGE USERS MODULE
|--------------------------------------------------------------------------
*/


Route::get('/users', [\App\Http\Controllers\manageUserController::class, 'index'])->name('user.index');
Route::get('/user/{user_id}', [\App\Http\Controllers\manageUserController::class, 'show'])->name('user.show');
Route::get('/user/createUser/post', [\App\Http\Controllers\manageUserController::class, 'create'])->name('user.create'); 
Route::post('/user/createUser/post', [\App\Http\Controllers\manageUserController::class, 'store'])->name('user.store'); 
Route::get('/user/{user_id}/editUser', [\App\Http\Controllers\manageUserController::class, 'edit'])->name('user.edit'); 
Route::put('/user/{user_id}/updateUser', [\App\Http\Controllers\manageUserController::class, 'update'])->name('user.update'); 
Route::put('/user/{user_id}/updatePassword', [\App\Http\Controllers\manageUserController::class, 'changePassword'])->name('user.updatePass'); 
Route::delete('/user/{user_id}', [\App\Http\Controllers\manageUserController::class, 'destroy'])->name('user.destroy'); 