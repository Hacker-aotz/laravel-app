<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherCourseController;

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

Route::get('/teacher-course', [TeacherCourseController::class, 'index'])->name('teacher.index');;
Route::post('/get-courses-by-teacher', [TeacherCourseController::class, 'getCoursesByTeacher']);
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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
