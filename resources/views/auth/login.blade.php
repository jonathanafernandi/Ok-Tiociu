@extends('layouts.auth')
@section('title', 'Masuk ke Akun - Ok! Tiociu')

@section('content')
    {{-- Title --}}
    <h5 class="text-center fw-semibold mb-3">
        Masuk ke akun <span style="color: var(--ok-red)">Ok! Tiociu</span> kamu
    </h5>

    {{-- Login failed message --}}
    @if (session('status_reset'))
        <div class="alert alert-success mb-3 py-2 px-3" style="font-size: 0.9rem;">
            {{ session('status_reset') }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="form-control @error('email') is-invalid @enderror" 
                placeholder="Masukkan email" 
                value="{{ old('email') }}" 
                required 
                autofocus 
                autocomplete="username"
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Kata Sandi --}}
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                class="form-control @error('password') is-invalid @enderror" 
                placeholder="Masukkan kata sandi" 
                required 
                autocomplete="current-password"
            >
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Ingat Saya & Lupa Kata Sandi --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input 
                    type="checkbox" 
                    name="remember" 
                    id="remember" 
                    class="form-check-input"
                    {{ old('remember') ? 'checked' : '' }}
                >
                <label for="remember" class="form-check-label fw-medium" style="font-size: 0.9rem;">
                    Ingat saya
                </label>
            </div>
            {{-- @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link-ok" style="font-size: 0.9rem;">
                    Lupa kata sandi?
                </a>
            @endif --}}
            <button 
                class="link-ok border-0 
                bg-transparent p-0" 
                type="button" 
                style="font-size: 0.9rem;" 
                data-bs-toggle="modal" 
                data-bs-target="#modalLupaKataSandi"
            >
                Lupa kata sandi?
            </button>
        </div>

        {{-- Tombol Masuk --}}
        <button type="submit" class="btn-ok-primary mb-3">Masuk</button>

        {{-- Divider --}}
        <div class="divider-atau">atau</div>

        {{-- Link to halaman daftar --}}
        <h5 class="text-center mb-4 fw-semibold">Belum punya akun?</h5>
        <a href="{{ route('register') }}" class="btn-ok-secondary d-block text-center text-decoration-none">Daftar di Sini &rarr;</a>
    </form>
@endsection

@section('modal')
    <div class="modal fade" id="modalLupaKataSandi" tabindex="-1" aria-labelledby="modalLupaKataSandiLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; padding: 0.5rem;">
                {{-- Header --}}
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="modalLupaKataSandiLabel">Lupa Kata Sandi?</h5>
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

                    <form action="{{ route('password.email') }}" method="post" id="formLupaKataSandi">
                        @csrf
                        <input type="hidden" name="_form" value="forgot">

                        {{-- Email --}}
                        <div class="mb-4">
                            <label for="forgot_email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="forgot_email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                placeholder="Masukkan email" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="username"
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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

@if (($errors->has('email') && old('_form') === 'forgot') || session('status') || session('status_error'))
    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Open modal automatically
                var modal = new bootstrap.Modal(document.getElementById('modalLupaKataSandi'));
                modal.show();

                // Reset form saat modal ditutup
                document.getElementById('modalLupaKataSandi').addEventListener('hidden.bs.modal', function () {
                    document.getElementById('formLupaKataSandi').reset();
                });
            });
        </script>
    @endsection
@else
    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Reset form after modal is closed
                document.getElementById('modalLupaKataSandi').addEventListener('hidden.bs.modal', function () {
                    document.getElementById('formLupaKataSandi').reset();
                });
            });
        </script>
    @endsection
@endif

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
