<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function courseContent() {
        return $this->hasMany(CourseContent::class, 'course_id');
    }

    public function quiz() {
        return $this->hasMany(Quiz::class);
    }

    public function category() {
        return $this->belongsTo(CourseCategory::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
