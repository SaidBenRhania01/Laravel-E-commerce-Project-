<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // إنشاء مستخدم جديد
    public function create(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // إنشاء مستخدم جديد
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->first_name . ' ' . $request->last_name,
        ]);

        return redirect()->route('login'); // التوجيه إلى صفحة الـ Dashboard بعد إنشاء المستخدم
    }

    // تسجيل دخول المستخدم
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // تجديد الـ Session بعد تسجيل الدخول بنجاح
            return redirect()->route('admin');  // التوجيه إلى صفحة الـ Dashboard
        }

        // في حال فشل تسجيل الدخول، يتم إرجاع المستخدم مع رسالة خطأ
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    // تسجيل خروج المستخدم
    public function logout(Request $request)
    {
        Auth::logout(); // تسجيل خروج المستخدم

        $request->session()->invalidate(); // إبطال الجلسة
        $request->session()->regenerateToken(); // تجديد رمز CSRF

        return redirect('/'); // التوجيه إلى الصفحة الرئيسية بعد الخروج
    }
}
