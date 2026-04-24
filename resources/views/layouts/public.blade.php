<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Ok! Tiociu')</title>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}" type="image/png" sizes="16x16">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Google Fonts: Rubik -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    {{-- Global CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Authentication CSS
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}"> --}}
    {{-- Page-specific CSS --}}
    @yield('styles')
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container-fluid mx-5 px-3">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <img src="{{ asset('images/logo.svg') }}" alt="Ok! Tiociu">
            </a>

            {{-- Hamburger (mobile) --}}
            <button 
                class="navbar-toggler border-0 shadow-none" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarMain" 
                aria-controls="navbarMain" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Nav Links --}}
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-5">
                    @auth
                        {{-- User has logged in --}}
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->routeIs('belajar*') ? 'active' : '' }}">Belajar</a>
                            {{-- <a href="{{ route('belajar.index') }}" class="nav-link {{ request()->routeIs('belajar*') ? 'active' : '' }}">Belajar</a> --}}
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->routeIs('forum*') ? 'active' : '' }}">Forum</a>
                            {{-- <a href="{{ route('forum.index') }}" class="nav-link {{ request()->routeIs('forum*') ? 'active' : '' }}">Forum</a> --}}
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->routeIs('profil*') ? 'active' : '' }}">Profil</a>
                            {{-- <a href="{{ route('profil.index') }}" class="nav-link {{ request()->routeIs('profil*') ? 'active' : '' }}">Profil</a> --}}
                        </li>
                    @else
                        {{-- User has not logged in --}}
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}">Daftar</a>
                        </li>
                    @endauth
                </ul>
            </div>
            {{-- <div class="d-flex gap-5 align-items-center ms-auto">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('login') }}" class="nav-link {{ request()->routeIs('login', 'password.*') ? 'active' : '' }}">Masuk</a>
                <a href="{{ route('register') }}" class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}">Daftar</a>
            </div> --}}
        </div>
    </nav>

    {{-- Main content --}}
    <main>
        @yield('content')
    </main>

    {{-- <main class="d-flex justify-content-center align-items-center p-5" style="min-height: calc(100vh - 56px);">
        <div class="auth-card">
            <!-- Logo in the card -->
            <div class="text-center mb-3">
                <img src="{{ asset('images/logo.svg') }}" alt="Ok! Tiociu" class="auth-logo">
            </div>

            <!-- Page content -->
            @yield('content')
        </div>
    </main> --}}

    {{-- Modal (called from the required page)
    @yield('modal') --}}

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Additional scripts per page --}}
    @yield('scripts')
</body>
</html>