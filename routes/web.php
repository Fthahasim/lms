<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


// web view 
// not implemented filters in all courses for web

Route::get('/',[CourseController::class, 'index'])->name('course.index');
Route::get('/enrolments/{courseId}', [CourseController::class, 'enrolments'])->name('course.enrolments');
