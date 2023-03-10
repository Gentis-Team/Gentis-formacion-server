<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CenterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\GroupController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\RequirementController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::controller(UserController::class)->group(function () {
    Route::get('users/me', 'me');
});

Route::post('courses/filter', [CourseController::class, 'filter']);
Route::apiResource('courses', CourseController::class );

Route::apiResource('locations', LocationController::class );
Route::apiResource('centers', CenterController::class );
Route::apiResource('categories', CategoryController::class );
Route::apiResource('requirements', RequirementController::class );
Route::apiResource('groups', GroupController::class );
Route::apiResource('students', StudentController::class );



