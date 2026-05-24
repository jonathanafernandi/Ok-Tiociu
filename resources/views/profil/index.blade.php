@extends('layouts.public')
@section('title', 'Profil - Ok! Tiociu')

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
                <div class="text-center mb-3">
                    <div class="fw-semibold profil-email" style="font-size: 1.125rem;"> {{ auth()->user()->email }}</div>
                    <div style="font-size: 1rem; font-weight: 500;">
                        Bergabung sejak
                        <span style="color: var(--ok-red); font-weight: 600;">
                            {{ auth()->user()->created_at->translatedFormat('F Y') }}
                        </span>
                    </div>
                </div>

                {{-- Status berhasil --}}
                @if (session('status'))
                    <div class="alert alert-success py-2 px-3 mb-3" style="font-size: 0.9rem; border-radius: 8px;">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Update form --}}
                <form action="{{ route('profil.update') }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            placeholder="Masukkan nama" 
                            value="{{ old('name', auth()->user()->name) }}" 
                            required 
                            autocomplete="name"
                        >
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <a href="{{ route('profil.ubah-password') }}" class="link-ok" style="font-size: 0.9rem;">
                            Ubah kata sandi?
                        </a>
                    </div>

                    <button class="btn-ok-primary mb-3" type="submit">Perbarui Identitas</button>
                </form>

                {{-- Divider --}}
                <div class="divider-atau">atau</div>

                {{-- Keluar dari Akun --}}
                <h5 class="text-center fw-semibold mb-4" style="font-size: 1.125rem;">Ingin keluar dari akun?</h5>
                <button 
                    class="btn-ok-secondary" 
                    type="button" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalKeluarAkun"
                >
                    Keluar dari Akun
                </button>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    {{-- Modal Keluar dari Akun --}}
    <div class="modal fade" id="modalKeluarAkun" tabindex="-1" aria-labelledby="modalKeluarAkunLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 420px;">
            <div class="modal-content" style="border-radius: 16px; border: none; padding: 0.5rem;">
                {{-- Header --}}
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="modalKeluarAkunLabel">Keluar dari Akun?</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                {{-- Body --}}
                <div class="modal-body">
                    <p class="text-center mb-4" style="font-size: 0.9rem; color: #000;">
                        Apakah kamu yakin ingin keluar dari akun?
                    </p>
                    <form action="{{ route('profil.logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn-ok-primary mb-2">Keluar dari Akun</button>
                    </form>
                    <button class="btn-ok-secondary mt-1" type="button" data-bs-dismiss="modal">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
