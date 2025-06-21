<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use App\Models\Course;
use App\Models\Enrolment;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $courses = Course::all();

        foreach ($students as $student) {
      
            $enrolledCourses = $courses->random(rand(1, 3));

            foreach ($enrolledCourses as $course) {
                Enrolment::create([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                    'enrolled_at' => now()->subDays(rand(1, 30)),
                ]);
            }
        }
    }
}
