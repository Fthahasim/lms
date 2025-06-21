<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $service;

    public function __construct(CourseService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $courses = $this->service->allCourses();
        return view('course',['courses' => $courses]);
    }

    public function enrolments($courseId)
    {
        $enrolments = $this->service->studentEnrolments($courseId);
 
        return view('students', ['enrolments' => $enrolments]);
    }

    public function getCourses(Request $request)
    {
        $category = $request->get('category');
        $search = $request->get('search');

        $courses = $this->service->allCourses($category,$search);
        return response()->json($courses);
    }

    public function getEnrolments(Request $request)
    {
        $courseId = $request->get('courseId');

        if (!$courseId) {
            return response()->json(['error' => 'Course ID is required'], 400);
        }

        $enrolments = $this->service->studentEnrolments($courseId); 
        return response()->json($enrolments);
    }

}
