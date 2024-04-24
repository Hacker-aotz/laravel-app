<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'course_code' => 'required|string|max:255',
            'course_title' => 'required|string|max:255',
        ]);

        $newCourse = Course::create($data);
        // Course::create($data);
        // $course = new Course([
        //     'course_code' => $request->get('course_code'),
        //     'course_title' => $request->get('course_title'),
        // ]);
        // $course->save();

        return redirect()->route('course.index')
            ->with('success', 'Course created successfully');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', ['course' => $course]);
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_title' => 'required|string|max:255',
            'course_code' => 'required|string|max:255',
        ]);

        $course->update($request->all());

        return redirect()->route('course.index')
            ->with('success', 'Course updated successfully');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index')
            ->with('success', 'Course deleted successfully');
    }
}
