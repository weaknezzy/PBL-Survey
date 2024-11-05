<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function show_login()
    {
        return view('login.login');
    }
    public function login(Request $request)
    {
        // dd($request)->all();

        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial login
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('landingpage')->with('success', 'Login berhasil!');
        } else {
            return redirect()->route('login')->with('error', 'Email atau Password Anda salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function newpassword()
    {
        return view('login.newpassword');
    }

    public function register()
    {
        return view('login.register');
    }

    public function register_proses(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nim' => 'required|unique:users,nim',
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:2',
            'confirmed_password' => 'required|same:password'
        ]);

        // Menyimpan data user
        $data['nim'] = $request->nim;
        $data['nama'] = $request->nama;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['confirmed_password'] = Hash::make($request->confirm_password);

        User::create($data);

        // Login otomatis setelah registrasi berhasil
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('mainpage')->with('success', 'Account created successfully!');
        }

        // Redirect ke halaman login jika gagal login otomatis
        return redirect()->route('login')->with('error', 'Registration successful, please login.');
    }
    public function resetpassword()
    {
        return view('login.resetpassword');
    }

    public function verify()
    {
        return view('login.verify');
    }
}
