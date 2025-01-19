<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'national_id' => 'required|numeric',
            'password' => 'required',
        ]);
    
        // جستجو برای کاربر با national_id
        $user = \App\Models\User::where('national_id', $request->national_id)->first();
    
        // بررسی اگر کاربر وجود داشته باشد و رمز عبور صحیح باشد
        if ($user && \Hash::check($request->password, $user->password)) {
            auth()->login($user); // لاگین کردن کاربر
            return redirect()->route('employee.dashboard'); // هدایت به داشبورد کارمند
        }
    
        return back()->withErrors(['national_id' => 'اطلاعات ورود صحیح نیست.']);
    }

    /**
     * نمایش داشبورد کارمند
     */
    public function index()
    {
        // فرض کنید مدل 'Course' برای دوره‌ها استفاده می‌شود.
        $courses = Course::all(); 

        // ارسال داده‌ها به ویو
        return view('employee.dashboard', compact('courses'));
    }

    /**
     * نمایش فرم ورود کارمند
     */
    public function showLoginForm()
    {
        return view('employee.login');
    }
}
