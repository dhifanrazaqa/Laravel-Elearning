<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function quiz() {
        return $this->hasMany(Quiz::class);
    }
}
