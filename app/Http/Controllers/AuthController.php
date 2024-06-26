<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role_id' => 'required|in:1,2,3', // validasi role_id
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'role_id.required' => 'Role ID tidak boleh kosong',
            'role_id.in' => 'Role ID tidak valid',
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            $user = Auth::user();
            $role_id = $request->role_id;

            // Cek apakah user memiliki role yang sesuai
            $hasRole = DB::table('role_users')
                ->where('user_id', $user->id)
                ->where('role_id', $role_id)
                ->exists();

            if ($hasRole) {
                // Arahkan pengguna berdasarkan role_id
                if ($role_id == 3) {
                    return redirect()->route('dashboard.recruiter');
                } elseif ($role_id == 2) {
                    return redirect()->route('dashboard.kandidat');
                } else {
                    // Tambahkan redirect sesuai kebutuhan, misalnya untuk admin
                    return redirect()->route('dashboard.admin');
                }
            } else {
                Auth::logout();
                return redirect('/login')->withErrors('Anda tidak memiliki peran yang sesuai')->withInput();
            }
        } else {
            return redirect('/login')->withErrors('Email atau password salah')->withInput();
        }
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Logic for registering a new user
    }

    public function showForgotPasswordForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        // Logic for sending password reset link
    }

    public function showResetForm($token)
    {
        return view('auth.passwords.reset')->with(['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        // Logic for resetting password
    }
}
