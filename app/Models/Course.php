<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'fee',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }
}
