<?php

namespace App\Http\Controllers;

use App\Models\candidates;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

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
                session(['selected_tab' => $request->input('selected_tab')]); // Simpan tab terakhir yang dipilih sebelum logout

                return redirect('/login')
                    ->withErrors('Anda tidak terdaftar dengan peran yang sesuai')
                    ->withInput();
            }
        } else {
            return redirect('login')->withErrors('Email atau password salah')->withInput();
        }
    }

    public function showIdentityForm()
    {
        return view('auth.lengkapiProfile');
    }
    public function lengkapiProfil(Request $request, $username)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'floating_first_name' => 'required|string|max:255',
            'floating_last_name' => 'required|string|max:255',
            'floating_bio' => 'nullable|string',
            'floating_address' => 'required|string|max:255',
        ]);

        // Ambil user berdasarkan username
        $user = User::where('username', $username)->first();

        if (!$user) {
            // Handle jika user tidak ditemukan
            return redirect()->back()->with('error', 'User not found.');
        }

        // Simpan data ke dalam tabel candidates
        $candidate = new candidates();
        $candidate->user_id = $user->id;
        $candidate->full_name = $validatedData['floating_first_name'] . ' ' . $validatedData['floating_last_name'];
        $candidate->bio = $validatedData['floating_bio'];
        $candidate->address = $validatedData['floating_address'];
        // Tambahkan logic untuk menyimpan path foto jika diperlukan

        $candidate->save();

        // Redirect ke halaman login atau ke halaman lain sesuai kebutuhan setelah data tersimpan
        return redirect()->route('login')->with('success', 'Profile completed successfully.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->withErrors('Berhasil Keluar');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'role_id' => 'required|exists:roles,id'
        ]);

        if ($validator->fails()) {
            session(['selected_tab' => $request->input('selected_tab')]); // Simpan tab terakhir yang dipilih sebelum logout
            return back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();

        // Cek apakah user ditemukan dan cocok dengan email dan password
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                // User exists and password matches, assign the new role
                if (!$user->roles->contains($request->role_id)) {
                    $user->roles()->attach($request->role_id, [
                        'created_at' => $request->created_at ?? Carbon::now(),
                        'updated_at' => $request->updated_at ?? Carbon::now(),
                    ]);
                    // Cek apakah kolom nama sudah terisi di tabel candidates
                    if (!empty($user->candidate->full_name)) {
                        // Jika sudah terisi, arahkan ke halaman login
                        return redirect()->route('login')->with('message', 'Email already registered. Please login.');
                    } else {
                        // Jika belum terisi, arahkan ke route identityForm
                        return redirect()->route('identityForm', ['username' => $user->username]);
                    }
                }
            } else {
                // Password tidak cocok, kembalikan dengan pesan error
                return back()->withErrors(['password' => 'Gunakan password yang sama di role lain yang telah terdaftarkan untuk konfirmasi.'])->withInput();
            }
        } else {
            // User does not exist, create new user
            $user = User::create([
                'username' => 'user_' . Str::random(8),
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => $request->created_at ?? Carbon::now(),
                'updated_at' => $request->updated_at ?? Carbon::now(),
            ]);

            $user->roles()->attach($request->role_id, [
                'created_at' => $request->created_at ?? Carbon::now(),
                'updated_at' => $request->updated_at ?? Carbon::now(),
            ]);
        }

        // Arahkan ke halaman identityForm dengan parameter username
        return redirect()->route('identityForm', ['username' => $user->username])->with('message', 'Registration successful. Please complete your profile.');
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
