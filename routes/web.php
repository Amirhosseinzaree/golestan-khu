<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// صفحه اصلی
Route::get('/', function () {
    return view('home');
});

// صفحه داشبورد
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// مسیرهای مربوط به پروفایل
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// مسیرهای ورود دانشجو
Route::get('/student-login', [StudentController::class, 'showLoginForm'])->name('student.login');
Route::post('/student-login', [StudentController::class, 'authenticate'])->name('student.authenticate');

// مسیرهای ورود کارمند
Route::get('/employee-login', [EmployeeController::class, 'showLoginForm'])->name('employee.login');
Route::post('/employee-login', [EmployeeController::class, 'authenticate'])->name('employee.authenticate');

// داشبورد دانشجو
Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
});

// داشبورد کارمند
Route::middleware(['auth'])->group(function () {
    Route::get('/employee/dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
});

// ثبت‌نام دانشجو
Route::get('/student-register', [StudentController::class, 'showRegisterForm'])->name('student.register');  // نمایش فرم ثبت‌نام
Route::post('/student-register', [StudentController::class, 'register'])->name('student.register');  // ثبت‌نام دانشجو

