<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherCourseController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher-course', compact('teachers'));
    }

    public function getCoursesByTeacher(Request $request)
    {
        $teacherId = $request->get('teacher_id');
        $teacher = Teacher::find($teacherId);

        if (!$teacher) {
            return response()->json(['status' => 'error', 'message' => 'Teacher not found'], 404);
        }

        $courses = $teacher->courses;
        return response()->json(['status' => 'success', 'data' => $courses]);
    }
}
