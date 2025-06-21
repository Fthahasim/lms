<?php

namespace App\Http\Repositories;

use App\Models\Course;
use App\Models\Category;
use App\Models\Student;

class CourseRepository
{
    protected $model;
    protected $category;
    protected $student;

    public function __construct(Course $model, Category $category,Student $student)
    {
        $this->model = $model;
        $this->category = $category;
        $this->student = $student;
    }

    public function getAllCourses($category = null, $search = null){
        return $this->model
                    ->with('category')
                    ->withCount('enrollments')
                    ->filterByCategory($category)
                    ->searchByName($search)
                    ->paginate(10);
    }

    public function getStudentEnrolments($courseId){
        return $this->student
                    ->whereHas('enrollments', function ($query) use ($courseId) {
                        $query->where('course_id', $courseId);
                    })
                    ->with(['enrollments' => function ($query) use ($courseId) {
                        $query->where('course_id', $courseId);
                    }])
                    ->get();
    }
}
