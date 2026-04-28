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
            'name' => ['required', 'string', 'max:255'],
        ], [
            'name.required' => 'Nama tidak boleh kosong.',
            'name.max' => 'Nama maksimal 255 karakter.',
        ]);

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
            ->withInput()
            ->withErrors(['email' => 'Email ini tidak terdaftar.']);
    }

    // Simpan kata sandi baru
    public function simpanPassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'current_password.required' => 'Kata sandi saat ini wajib diisi.',
            'password.required' => 'Kata sandi baru wajib diisi.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
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
