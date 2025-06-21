<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fee',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function enrollments() {
        return $this->hasMany(Enrolment::class);
    }


    public function scopeFilterByCategory($query, $categoryId)
    {
        if ($categoryId) {
            return $query->where('category_id', $categoryId);
        }
        return $query;
    }

    public function scopeSearchByName($query, $keyword)
    {
        if ($keyword) {
            return $query->where('name', 'like', '%' . $keyword . '%');
        }
        return $query;
    }
    
}
