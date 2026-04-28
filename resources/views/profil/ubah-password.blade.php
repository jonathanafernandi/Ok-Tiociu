@extends('layouts.public')
@section('title', 'Ubah Kata Sandi - Ok! Tiociu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
@endsection

@section('content')
    <section class="profil-section">
        <div class="d-flex justify-content-center align-items-center p-5" style="min-height: calc(100vh - 57px);">
            <div class="auth-card">
                {{-- Initial avatar --}}
                @php
                    $words = explode(' ', trim(auth()->user()->name));
                    $initials = substr($words[0], 0, 1);
                    if (count($words) > 1) {
                        $initials .= substr(end($words), 0, 1);
                    }
                @endphp
                <div class="text-center mb-2">
                    <div class="profil-avatar mx-auto">{{ $initials }}</div>
                </div>

                {{-- Informasi akun --}}
                <div class="text-center mb-2">
                    <div class="fw-bold" style="font-size: 1.125rem;"> {{ auth()->user()->name }}</div>
                    <div style="font-size: 1rem;">
                        {{ auth()->user()->email }}
                    </div>
                    <div class="fw-semibold mt-2" style="font-size: 1rem;">Buat kata sandi baru</div>
                </div>

                {{-- Status berhasil --}}
                @if (session('status'))
                    <div class="alert alert-success py-2 px-3 mb-3" style="font-size: 0.9rem; border-radius: 8px;">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Update form --}}
                <form action="{{ route('profil.simpan-password') }}" method="post">
                    @csrf
                    @method('patch')

                    {{-- Kata Sandi Saat Ini --}}
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Kata Sandi Saat Ini</label>
                        <input 
                            type="password" 
                            name="current_password" 
                            id="current_password" 
                            class="form-control @error('current_password') is-invalid @enderror" 
                            placeholder="Masukkan kata sandi" 
                            required 
                            autocomplete="current-password"
                        >
                        @error('current_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Kata Sandi Baru --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi Baru</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            placeholder="Masukkan kata sandi" 
                            required 
                            autocomplete="new-password"
                        >
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Konfirmasi Kata Sandi --}}
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            id="password_confirmation" 
                            class="form-control @error('password_confirmation') is-invalid @enderror" 
                            placeholder="Masukkan kata sandi" 
                            required 
                            autocomplete="new-password"
                        >
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Lupa kata sandi saat ini --}}
                    <div class="mb-3">
                        <button 
                            class="link-ok border-0 bg-transparent p-0" 
                            type="button" 
                            style="font-size: 0.9rem;" 
                            data-bs-toggle="modal" 
                            data-bs-target="#modalLupaPasswordSaatIni"
                        >
                            Lupa kata sandi saat ini?
                        </button>
                    </div>

                    <button class="btn-ok-primary mb-2" type="submit">Simpan</button>
                </form>

                <a href="{{ route('profil.index') }}" class="btn-ok-secondary d-block text-center text-decoration-none">
                    Kembali ke halaman Profil &rarr;
                </a>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    {{-- Modal Lupa Kata Sandi Saat Ini --}}
    <div class="modal fade" id="modalLupaPasswordSaatIni" tabindex="-1" aria-labelledby="modalLupaPasswordSaatIniLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; padding: 0.5rem;">
                {{-- Header --}}
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="modalLupaPasswordSaatIniLabel">Lupa Kata Sandi Saat Ini?</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                {{-- Body --}}
                <div class="modal-body">
                    <p class="text-center mb-3" style="font-size: 0.9rem; color: #000;">
                        Masukkan email akun <span style="color: var(--ok-red); font-weight: 500;">Ok! Tiociu</span> kamu di bawah ini.
                        Kami akan segera mengirimkan tautan untuk membuat kata sandi baru.
                    </p>

                    {{-- Success message after email is sent --}}
                    @if (session('status'))
                        <div class="alert alert-success py-2 px-3 mb-3" style="font-size: 0.9rem; border-radius: 8px;">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Error message: token invalid/expired --}}
                    @if (session('status_error'))
                        <div class="alert alert-danger py-2 px-3 mb-3" style="font-size: 0.9rem; border-radius: 8px;">
                            {{ session('status_error') }}
                        </div>
                    @endif

                    <form action="{{ route('profil.kirim-reset-password') }}" method="post" id="formLupaPasswordSaatIni">
                        @csrf
                        <input type="hidden" name="form" value="forgot-profil">

                        {{-- Email --}}
                        <div class="mb-4">
                            <label for="forgot_email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="forgot_email" 
                                class="form-control {{ $errors->getBag('forgot-profil')->has('email') ? 'is-invalid' : '' }}" 
                                placeholder="Masukkan email" 
                                value="{{ old('forgot_profil_email', '') }}" 
                                required 
                                autocomplete="username"
                            >
                            @if ($errors->getBag('forgot-profil')->has('email'))
                                <div class="invalid-feedback">{{ $errors->getBag('forgot-profil')->first('email') }}</div>
                            @endif
                        </div>

                        {{-- Tombol Kirim --}}
                        <button type="submit" class="btn-ok-primary mb-2">
                            Kirim Tautan Reset
                        </button>
                    </form>

                    {{-- Tombol Batal --}}
                    <button class="btn-ok-secondary w-100 mt-1" type="button" data-bs-dismiss="modal">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- Open modal automatically --}}
    @if ($errors->getBag('forgot-profil')->has('email') || session('status_error'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var modal = new bootstrap.Modal(document.getElementById('modalLupaPasswordSaatIni'));
                modal.show();
            });
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('modalLupaPasswordSaatIni').addEventListener('hidden.bs.modal', function () {
                var form = document.getElementById('formLupaPasswordSaatIni');
                form.reset();
                form.querySelectorAll('input[type="email"]').forEach(function (el) {
                    el.value = '';
                })
                form.querySelectorAll('.is-invalid').forEach(function (el) {
                    el.classList.remove('is-invalid');
                });
                form.querySelectorAll('.invalid-feedback').forEach(function (el) {
                    el.textContent = '';
                });
                document.getElementById('modalLupaPasswordSaatIni').querySelectorAll('.alert').forEach(function (el) {
                    el.remove();
                });
            });
        })
        
    </script>
@endsection
