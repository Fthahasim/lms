<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


Route::get('/get-courses',[CourseController::class, 'getCourses']);
Route::get('/get-enrolments', [CourseController::class, 'getEnrolments']);
