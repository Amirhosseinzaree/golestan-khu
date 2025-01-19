<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * احراز هویت دانشجو
     */
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
            return redirect()->route('student.dashboard'); // هدایت به داشبورد دانشجو
        }
    
        return back()->withErrors(['national_id' => 'اطلاعات ورود صحیح نیست.']);
    }

    /**
     * نمایش داشبورد دانشجو
     */
    public function index()
    {
        return view('student.dashboard');
    }

    /**
     * نمایش فرم ورود دانشجو
     */
    public function showLoginForm()
    {
        return view('student.login');
    }

    /**
     * نمایش فرم ثبت‌نام دانشجو
     */
    public function showRegisterForm()
    {
        return view('student.register'); // بازگرداندن صفحه ثبت‌نام
    }

    /**
     * ثبت‌نام دانشجو
     */
    public function register(Request $request)
    {
        return redirect()->route('student.login')->with('success', 'ثبت نام با موفقیت انجام شد');
    }
}
