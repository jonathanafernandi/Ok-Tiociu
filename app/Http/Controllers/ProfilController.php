<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules;

class ProfilController extends Controller
{
    // Show halaman profil
    public function index()
    {
        return view('profil.index');
    }

    // Update user data
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
        ], [
            'name.required' => 'Nama tidak boleh kosong.',
            'name.max' => 'Nama maksimal 30 karakter.',
        ]);

        if ($request->name === $request->user()->name) {
            return back()->withErrors(['name' => 'Nama baru tidak boleh sama dengan nama saat ini.']);
        }

        $request->user()->update(['name' => $request->name]);

        return redirect()->route('profil.index')->with('status', 'Profil berhasil diperbarui!');
    }

    // Show halaman ubah kata sandi
    public function ubahPassword()
    {
        return view('profil.ubah-password');
    }

    public function kirimResetPassword(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
        ]);

        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', 'Tautan reset kata sandi telah dikirim ke email kamu.');
        }

        return back()
            ->withInput(['forgot_profil_email' => $request->email])
            ->withErrors(['email' => 'Email ini tidak terdaftar.'], 'forgot-profil');
    }

    // Simpan kata sandi baru
    public function simpanPassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', 'max:100', Rules\Password::defaults()],
        ], [
            'current_password.required' => 'Kata sandi saat ini wajib diisi.',
            'password.required' => 'Kata sandi baru wajib diisi.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            'password.min' => 'Kata sandi minimal 8 karakter.',
            'password.max' => 'Kata sandi maksimal 100 karakter.',
        ]);

        // Check if current password is true
        if (!Hash::check($request->current_password, $request->user()->password)) {
            return back()->withErrors(['current_password' => 'Kata sandi saat ini tidak sesuai.']);
        }

        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profil.index')->with('status', 'Kata sandi berhasil diperbarui.');
    }

    // Process logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
