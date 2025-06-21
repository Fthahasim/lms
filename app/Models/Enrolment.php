<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    protected $fillable = [
        'student_id',
        'course_id',
        'enrolled_at',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }
    
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
