<?php

namespace App\Http\Controllers;

use App\Models\CoursesDetail;

class CourseDetailController extends Controller
{
    public function show($id)
    {
        $course = CoursesDetail::findOrFail($id);

        return view('frontend.courses.show', ['course' => $course]);
    }
}
