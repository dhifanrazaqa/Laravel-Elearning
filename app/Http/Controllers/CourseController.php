<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseContent;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return view('course.index', [
            'courses' => Course::all(),
        ]);
    }

    public function show(Course $course) {
        return view('course.show', [
            'course' => $course,
        ]);
    }
}
