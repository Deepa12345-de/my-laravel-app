<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student\StudentController;
use App\Http\Controllers\AdminAuthController; 
use App\Http\Controllers\admin\AdminController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('layout.index');
});

// Admin Login Routes
Route::get('/layout/index', [AdminAuthController::class, 'showLoginForm']);
Route::post('/layout/index', [AdminAuthController::class, 'login']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout']);

// Protected Admin Dashboard
Route::get('/admindashboard', function () {
    return view('admin.admindashboard');
});
Route::post('/admindashboard', [AdminController::class, 'admindashboard']);
// Other Admin Pages
Route::get('/adminstudent', function () {
    return view('admin.admin_student');
});
Route::get('/adminteacher', function () {
    return view('admin.admin_teacher');
});
Route::get('/admincourses', function () {
    return view('admin.admin_courses');
});
Route::get('/adminfees', function () {
    return view('admin.admin_fees');
});
// Student Dashboard
Route::get('/student_dashboard', function () {
    return view('student.student_dashboard');
});

Route::get('/layout/index', [StudentController::class, 'showRegisterForm'])->name('student.register.form');
Route::post('/layout/index', [StudentController::class, 'register'])->name('student.register');
Route::get('/student/student_dashboard', [StudentController::class, 'student_dashboard'])->name('student.student_dashboard');

Route::middleware(['adminauth'])->group(function () {
    Route::get('/admindashboard', [AdminAuthController::class, 'index'])->name('admin.admindashboard');
});