<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherCourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

Route::get('auth/google', [GoogleController::class, 'signInwithGoogle']);
Route::get('callback/google', [GoogleController::class, 'callbackToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'callbackToGoogle']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');

Route::middleware(['auth'])->group(function () {
    // Teacher routes
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('/teacher', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/teacher/{teacher}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::put('/teacher/{teacher}/update', [TeacherController::class, 'update'])->name('teacher.update');
    Route::delete('/teacher/{teacher}/destroy', [TeacherController::class, 'destroy'])->name('teacher.destroy');
});

Route::middleware(['auth'])->group(function () {
    // Course routes
    Route::get('/course', [CourseController::class, 'index'])->name('course.index');
    Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/course', [CourseController::class, 'store'])->name('course.store');
    Route::get('/course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/course/{course}/update', [CourseController::class, 'update'])->name('course.update');
    Route::delete('/course/{course}/destroy', [CourseController::class, 'destroy'])->name('course.destroy');
});



// Route::get('/teacher-course', [TeacherCourseController::class, 'index'])->name('teacher.index');;
// Route::post('/get-courses-by-teacher', [TeacherCourseController::class, 'getCoursesByTeacher']);


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */
    
    //socialite login urls
    // Route::get('/googleLogin', [GoogleController::class, 'googleLogin']);
    
    // Route::middleware([
        //     'auth:sanctum',
        //     config('jetstream.auth_session'),
        //     'verified',
        // ])->group(function () {
            //     Route::get('/user/dashboard', function () {
                //         return view('dashboard');
            //     })->name('call');
            // });
