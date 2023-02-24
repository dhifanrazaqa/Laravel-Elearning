<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;
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

Route::get('courses/', [CourseController::class, 'index']);

Route::get('courses/{course:slug}', [CourseController::class, 'show']);

Route::get('courses/{course:slug}/{quiz:slug}', [QuizController::class, 'index']);

Route::get('courses/{course:slug}/{quiz:slug}/attempt', [QuizController::class, 'show']);

Route::post('courses/{course:slug}/{quiz:slug}/attempt', [QuizController::class, 'store']);

Route::get('courses/{course:slug}/{quiz:slug}/finish', [QuizController::class, 'submit']);