<?php

namespace App\Http\Services;

use App\Http\Repositories\CourseRepository;

class CourseService
{
    protected $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function allCourses($category = null, $search = null){
        return $this->repository->getAllCourses($category, $search);
    }

    public function studentEnrolments($courseId){
        return $this->repository->getStudentEnrolments($courseId);
    }
}
