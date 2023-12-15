<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hi', function(){
//     return 'hi';
// });
Route::get('/hi', [\App\Http\Controllers\NewController::class, 'index']);
Route::get('products', [\App\Http\Controllers\ProductController::class, 'list']);
Route::get('products{id}', [\App\Http\Controllers\ProductController::class, 'info']);
Route::get('students{id}', [\App\Http\Controllers\StudentsController::class, 'info']);
Route::get('users{id}', [\App\Http\Controllers\UsersController::class, 'info']);
Route::get('lecturers{id}', [\App\Http\Controllers\LecturersController::class, 'info']);
Route::get('all_course{id}', [\App\Http\Controllers\AllCourseController::class, 'info']);
Route::get('all_course', [\App\Http\Controllers\AllCourseController::class, 'list']);