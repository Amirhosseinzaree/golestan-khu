<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('national_code', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            // ورود موفق
            return redirect()->route('student.dashboard');
        }

        // ورود ناموفق
        return back()->withErrors([
            'national_code' => 'کد ملی یا رمز عبور اشتباه است.',
        ]);
    }
}

