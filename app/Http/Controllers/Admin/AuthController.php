<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request) {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard.index');
        } else {
            return redirect()->back()->with(['error' => 'بيانات الاعتماد غير متطابقه مع البيانات المسجله لدينا']);
        }
    }

    public function logout() {
        auth('admin')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect(route('admin.login'));
    }

}
