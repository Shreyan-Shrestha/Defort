<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Login form
    public function showLogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.index');
        }
        return view('admin.login');
    }

    // Login attempt
    public function login(Request $request)
    {
        $request->validate([
            'uname' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = $request->only('uname', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.index'));
        }

        return back()->withErrors(['uname' => 'Invalid credentials'])->onlyInput('uname');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function showChangePassword()
    {
        return view('admin.password.change');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password:admin'],
            'password'         => ['required', 'confirmed', 'min:8'],
        ]);

        /** @var \App\Models\Adminauth $admin */
        $admin = Auth::guard('admin')->user();
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin.index')
            ->with('status', 'Password changed successfully.');
    }
}