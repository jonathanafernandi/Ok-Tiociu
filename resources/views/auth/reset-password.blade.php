@extends('layouts.public')
@section('title', 'Reset Kata Sandi - Ok! Tiociu')

@section('content')
    <div class="d-flex justify-content-center align-items-center p-5" style="min-height: calc(100vh - 57px); background-color: var(--ok-bg);">
        <div class="auth-card">
            {{-- Logo --}}
            <div class="text-center mb-3">
                <img src="{{ asset('images/logo.svg') }}" alt="Ok! Tiociu" class="auth-logo">
            </div>

            {{-- Title --}}
            <h5 class="text-center fw-semibold mb-3">
                Buat kata sandi baru
            </h5>

            <form action="{{ route('password.store') }}" method="post">
                @csrf

                {{-- Token (hidden) --}}
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Masukkan email" 
                        value="{{ old('email', $request->email) }}" 
                        required 
                        autocomplete="username"
                    >
                    @error('email')
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
                <div class="mb-4">
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

                {{-- Tombol Simpan --}}
                <button type="submit" class="btn-ok-primary mb-3">Simpan</button>

                {{-- Kembali ke halaman masuk --}}
                <a href="{{ route('login') }}" class="btn-ok-secondary d-block text-center text-decoration-none">Kembali ke halaman Masuk &rarr;</a>
            </form>
        </div>
    </div>
@endsection

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
