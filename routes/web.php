<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Models\Batch;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/mainLayout.main.layout');
})->name('layout');

Route::resource('/students', StudentController::class);
Route::resource('/teachers', TeacherController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/batches', BatchController::class);
Route::resource('/enrollments', EnrollmentController::class);
