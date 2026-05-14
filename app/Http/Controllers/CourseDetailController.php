<?php

namespace App\Http\Controllers;

use App\Models\CoursesDetail;

class CourseDetailController extends Controller
{
    public function show($id)
    {
        $course = CoursesDetail::with('Courses')->findOrFail($id);
        $courseDetails = $course->courseDetails;

        if (!$course) {
            abort(404, 'Course not found');
        }           

        return view('frontend.courses.show', ['course' => $course, 'courseDetails' => $courseDetails]);
    }
}
