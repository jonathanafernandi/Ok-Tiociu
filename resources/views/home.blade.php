@extends('layouts.public')
@section('title', 'Beranda - Ok! Tiociu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                {{-- Left texts --}}
                <div class="col-12 col-hero-split hero-text">
                    {{-- Mobile logo --}}
                    <div class="hero-logo-mobile mb-4">
                        <img 
                            src="{{ asset('images/logo.svg') }}" 
                            alt="Ok! Tiociu" 
                            class="hero-logo-mobile-img"
                        >
                    </div>
                    
                    <h1 class="hero-title">
                        <span class="text-ok-red">Bahasa Tiociu</span> Ada di Sini -<br>
                        Belajar, Kenali, dan Lestarikan Bersama!
                    </h1>
                    <p class="hero-desc">
                        Platform pembelajaran bahasa Tiociu dasar berbasis web.
                        Pelajari kosakata, dengarkan audio pelafalan, latihan soal, dan diskusi budaya bersama komunitas. Gratis!
                    </p>

                    {{-- CTA buttons --}}
                    <div class="hero-cta">
                        @auth
                            {{-- Logged in --}}
                            <a href="#" class="btn-hero-primary">
                                Mulai Belajar &rarr;
                            </a>
                            {{-- <a href="{{ route('belajar.index') }}" class="btn-hero-primary">
                                Mulai Belajar &rarr;
                            </a> --}}
                        @else
                            {{-- Not yet logged in --}}
                            <a href="{{ route('login') }}" class="btn-hero-primary">
                                Mulai Belajar &rarr;
                            </a>
                            <a href="{{ route('register') }}" class="btn-hero-secondary">
                                Belum Punya Akun?
                            </a>
                        @endauth
                    </div>
                </div>

                {{-- Right image --}}
                <div class="col hero-image-wrap d-none d-hero-flex">
                    <img 
                        src="{{ asset('images/logo.svg') }}" 
                        alt="Ok! Tiociu" 
                        class="hero-image"
                    >
                </div>
            </div>
        </div>
    </section>

    {{-- Fitur Section --}}
    <section class="fitur-section">
        <div class="container-fluid">
            {{-- Title --}}
            <div class="text-center mb-5">
                <h2 class="fitur-title">Semua yang Kamu Butuhkan untuk Belajar Bahasa Tiociu Dasar</h2>
                <p class="fitur-subtitle">Dirancang agar mudah diakses siapa saja, bahkan tanpa pengalaman belajar bahasa Tiociu sebelumnya.</p>
            </div>

            {{-- Fitur cards --}}
            <div class="fitur-cards-row">
                {{-- Materi Terstruktur --}}
                <div class="fitur-card-col">
                    <div class="fitur-card fitur-card-red">
                        <div class="fitur-icon fitur-icon-light">
                            <i class="bi bi-collection-play-fill"></i>
                        </div>
                        <h3 class="fitur-name">Materi Terstruktur</h3>
                        <p class="fitur-desc">300+ kosakata & frasa sehari-hari, disusun dalam 12 topik</p>
                    </div>
                </div>

                {{-- Audio Pelafalan --}}
                <div class="fitur-card-col">
                    <div class="fitur-card fitur-card-light">
                        <div class="fitur-icon fitur-icon-dark">
                            <i class="bi bi-volume-up-fill"></i>
                        </div>
                        <h3 class="fitur-name">Audio Pelafalan</h3>
                        <p class="fitur-desc">Dengarkan cara pengucapan yang tepat dari setiap kosakata & frasa</p>
                    </div>
                </div>

                {{-- Kuis Interaktif --}}
                <div class="fitur-card-col">
                    <div class="fitur-card fitur-card-red">
                        <div class="fitur-icon fitur-icon-light">
                            <i class="bi bi-ui-checks"></i>
                        </div>
                        <h3 class="fitur-name">Kuis Interaktif</h3>
                        <p class="fitur-desc">Latihan soal dirancang untuk menguji pemahamanmu</p>
                    </div>
                </div>

                {{-- Forum Diskusi --}}
                <div class="fitur-card-col">
                    <div class="fitur-card fitur-card-light">
                        <div class="fitur-icon fitur-icon-dark">
                            <i class="bi bi-chat-left-quote-fill"></i>
                        </div>
                        <h3 class="fitur-name">Forum Diskusi</h3>
                        <p class="fitur-desc">Diskusikan bahasa & budaya Tionghoa-Indonesia bersama komunitas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer-ok text-center p-3">
        <p class="mb-0">
            2026 <span style="color: var(--ok-red); font-weight: 600;">Ok! Tiociu</span>
            &nbsp;•&nbsp;
            <a href="mailto:oktiociu.official@gmail.com" class="footer-link">
                oktiociu.official@gmail.com
            </a>
        </p>
    </footer>
@endsection
