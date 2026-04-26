@extends('layouts.public')
@section('title', 'Materi Pembelajaran - Ok! Tiociu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
@endsection

@section('content')
    <section class="belajar-section">
        <div class="container-fluid">
            {{-- Header --}}
            <div class="text-center mb-5 belajar-header">
                <h1 class="belajar-title">Materi Pembelajaran</h1>
                <p class="belajar-subtitle">
                    Pilih topik untuk mulai belajar <span style="color: var(--ok-red); font-weight: 600;">bahasa Tiociu</span>
                </p>
            </div>

            {{-- Topik grid --}}
            <div class="topik-grid">
                @foreach ($topics as $topic)
                    @php
                        $letter = chr(64 + $loop->iteration);
                    @endphp
                    <a 
                        href="{{ route('belajar.show', $topic) }}" 
                        class="topik-card {{ $loop->odd ? 'topik-card-red' : 'topik-card-light' }}"
                    >
                        <div class="topik-label">Topik {{ $letter }}:</div>
                        <div class="topik-name">{{ $topic->title }}</div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
