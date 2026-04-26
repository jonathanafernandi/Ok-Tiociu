@extends('layouts.public')
@section('title', 'Topik ' . $letter . ': ' . $topic->title . ' - Ok! Tiociu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
@endsection

@section('content')
    <section class="belajar-section materi-section-padding">
        <div class="container-fluid">
            {{-- Tautan kembali --}}
            <a href="{{ route('belajar.index') }}" class="materi-back">&larr; Kembali ke Daftar Topik</a>

            {{-- Header --}}
            <div class="text-center mb-4">
                <h1 class="materi-topik-label">Topik {{ $letter }}</h1>
                <h2 class="materi-topik-title">{{ $topic->title }}</h2>
            </div>

            {{-- Kosakata cards --}}
            <div class="materi-list">
                @foreach ($vocabularies as $vocabulary)
                    <div class="materi-row">
                        <div class="materi-no">{{ $loop->iteration }}</div>

                        <button 
                            class="materi-play" 
                            onclick="playAudio(this, '{{ asset('storage/' . $vocabulary->audio_path) }}')" 
                            aria-label="Putar audio {{ $vocabulary->tiociu_text }}"
                        >
                            <i class="bi bi-play-fill"></i>
                        </button>

                        <div class="materi-tiociu">{{ $vocabulary->tiociu_text }}</div>

                        <div class="materi-indonesia">{{ $vocabulary->indonesian_text }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Sticky footer --}}
    <div class="materi-footer">
        <a href="{{ route('belajar.kuis', $topic) }}" class="btn-mulai-latihan">
            Mulai Latihan &rarr;
        </a>
    </div>
@endsection

@section('scripts')
    <script>
        let currentAudio = null;
        let currentButton = null;

        function playAudio(button, url) {
            // If the same audio is being played, pause it
            if (currentAudio && !currentAudio.paused && currentButton === button) {
                currentAudio.pause();
                currentAudio.currentTime = 0;
                button.querySelector('i').className = 'bi bi-play-fill';
                button.classList.remove('playing');
                currentAudio = null;
                currentButton = null;
                return;
            }

            // Pause the previous audio
            if (currentAudio) {
                currentAudio.pause();
                currentAudio.currentTime = 0;
                currentButton.querySelector('i').className = 'bi bi-play-fill';
                currentButton.classList.remove('playing');
            }

            // Play the new audio
            currentAudio = new Audio(url);
            currentButton = button;
            button.querySelector('i').className = 'bi bi-pause-fill';
            button.classList.add('playing');

            currentAudio.play().catch(() => {
                button.querySelector('i').className = 'bi bi-play-fill';
                button.classList.remove('playing');
            });

            currentAudio.onended = () => {
                button.querySelector('i').className = 'bi bi-play-fill';
                button.classList.remove('playing');
                currentAudio = null;
                currentButton = null;
            };
        }
    </script>
@endsection
