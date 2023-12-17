<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('products')->group(function () {
    Route::get('', [\App\Http\Controllers\ProductController::class, 'list']);
    Route::get('{id}', [\App\Http\Controllers\ProductController::class, 'info']);
    Route::post('', [\App\Http\Controllers\ProductController::class, 'create']);
    Route::get('{id}', [\App\Http\Controllers\StudentsController::class, 'info']);
});

Route::prefix('students')->group(function () {
    Route::get('{id}', [\App\Http\Controllers\StudentsController::class, 'info']);
});

Route::prefix('users')->group(function () {
    Route::get('{id}', [\App\Http\Controllers\UsersController::class, 'info']);
});

Route::prefix('lecturers')->group(function () {
    Route::get('{id}', [\App\Http\Controllers\LecturersController::class, 'info']);
});

Route::prefix('all_course')->group(function () {
    Route::get('', [\App\Http\Controllers\AllCourseController::class, 'list']);
    Route::get('{id}', [\App\Http\Controllers\AllCourseController::class, 'info']);
});

Route::post('login', [\App\Http\Controllers\UsersController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\UsersController::class, 'logout']);

Route::post('create_course', [\App\Http\Controllers\AllCourseController::class, 'create_course']);
