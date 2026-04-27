@extends('layouts.public')
@section('title', 'Latihan Topik ' . $letter . ': ' . $topic->title . ' - Ok! Tiociu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/kuis.css') }}">
@endsection

@section('content')
    <div class="kuis-wrapper">
        {{-- Top bar: tombol x + progress bar --}}
        <div class="kuis-topbar">
            <button class="btn-close" id="btnExit" aria-label="Keluar dari latihan"></button>
            <div class="kuis-progress-bar">
                <div class="kuis-progress-fill" id="progressFill" style="width: 0%;"></div>
            </div>
        </div>

        {{-- Main quiz area --}}
        <div class="kuis-main">
            {{-- Question card --}}
            <div class="kuis-question-card" id="questionCard"></div>

            {{-- Answer choices --}}
            <div class="kuis-answers-grid" id="answersGrid"></div>

            {{-- Tombol Jawab --}}
            <div class="kuis-submit-wrap">
                <button class="kuis-submit-btn" id="btnSubmit" disabled>Jawab</button>
            </div>
        </div>

        {{-- Feedback bar (fixed bottom) --}}
        <div class="kuis-feedback" id="feedbackBar" style="display: none;">
            <div class="kuis-feedback-left">
                <div class="kuis-feedback-icon" id="feedbackIcon"></div>
                <div>
                    <div class="kuis-feedback-title" id="feedbackTitle"></div>
                    <div class="kuis-feedback-correct-hint" id="feedbackHint" style="display: none;"></div>
                </div>
            </div>
            <button class="kuis-feedback-next" id="btnNext"></button>
        </div>

        {{-- Dialog Akhiri Latihan --}}
        <div class="modal fade" id="modalAkhiriLatihan" tabindex="-1" aria-labelledby="modalAkhiriLatihanLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius: 16px; border: none; padding: 0.5rem;">
                    <div class="modal-header border-0 pb-0">
                        <h5 class="modal-title fw-semibold" id="modalAkhiriLatihanLabel">Akhiri Latihan?</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center mb-4" style="font-size: 0.9rem; color: #000;">
                            Apakah kamu yakin ingin mengakhiri latihan?
                        </p>
                        <a href="{{ route('belajar.show', $topic) }}" class="btn-ok-primary d-block text-center text-decoration-none mb-2">
                            Keluar dari Latihan
                        </a>
                        <button class="btn-ok-secondary w-100" type="button" data-bs-dismiss="modal">
                            Lanjutkan Latihan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="kuis-overlay" id="overlayExit" style="display: none;">
            <div class="kuis-dialog">
                <div class="kuis-dialog-header">
                    <h5 class="kuis-dialog-title">Akhiri Latihan?</h5>
                    <button class="kuis-dialog-close" id="btnCloseExit" aria-label="Tutup">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <p class="kuis-dialog-body">Apakah kamu yakin ingin mengakhiri latihan?</p>
                <a href="{{ route('belajar.show', $topic) }}" id="btnLeave" class="kuis-btn-dialog-primary">Keluar dari Latihan</a>
                <button id="btnStay" class="kuis-btn-dialog-secondary">Lanjutkan Latihan</button>
            </div>
        </div> --}}

        {{-- Dialog Latihan Selesai --}}
        <div class="modal fade" id="modalLatihanSelesai" tabindex="-1" aria-labelledby="modalLatihanSelesaiLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius: 16px; border: none; padding: 0.5rem;">
                    <div class="modal-body">
                        <h5 class="fw-semibold text-center mb-2" id="modalLatihanSelesaiLabel">Latihan Selesai!</h5>
                        <p class="text-center mb-4" style="font-size: 0.9rem; color: #000;">
                            Kamu telah menyelesaikan latihan<br>
                            <a href="{{ route('belajar.show', $topic) }}" style="color: var(--ok-red); font-weight: 600; text-decoration: none;">
                                Topik {{ $letter }}: {{ $topic->title }}
                            </a>
                        </p>
                        <a href="{{ route('belajar.index') }}" class="btn-ok-primary d-block text-center text-decoration-none mb-2">
                            Pilih Topik Lain
                        </a>
                        <a href="{{ route('belajar.show', $topic) }}" class="btn-ok-secondary d-block text-center text-decoration-none">
                            Kembali ke Materi
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="kuis-overlay" id="overlayDone" style="display: none;">
            <div class="kuis-dialog">
                <h5 class="kuis-dialog-title text-center mb-2">Latihan Selesai!</h5>
                <p class="text-center mb-4" style="font-size: 0.9rem; color: #000;">
                    Kamu telah menyelesaikan latihan<br>
                    <a href="{{ route('belajar.show', $topic) }}" class="kuis-done-topic">
                        Topik {{ $letter }}: {{ $topic->title }}
                    </a>
                </p>
                <a href="{{ route('belajar.index') }}" class="kuis-btn-dialog-primary">Pilih Topik Lain</a>
                <a href="{{ route('belajar.show', $topic) }}" class="kuis-btn-dialog-secondary">Kembali ke Materi</a>
            </div>
        </div> --}}
    </div>
@endsection

@section('scripts')
    <script>
        (function () {
            // Data from controller
            const questions = @json($questionsJson);
            const totalQuestions = questions.length;

            // DOM references
            const progressFill = document.getElementById('progressFill');
            const questionCard = document.getElementById('questionCard');
            const answersGrid = document.getElementById('answersGrid');
            const btnSubmit = document.getElementById('btnSubmit');
            const feedbackBar = document.getElementById('feedbackBar');
            const feedbackIcon = document.getElementById('feedbackIcon');
            const feedbackTitle = document.getElementById('feedbackTitle');
            const feedbackHint = document.getElementById('feedbackHint');
            const btnNext = document.getElementById('btnNext');

            const modalAkhiri = new bootstrap.Modal(document.getElementById('modalAkhiriLatihan'));
            const modalSelesai = new bootstrap.Modal(document.getElementById('modalLatihanSelesai'));
            // const overlayExit = document.getElementById('overlayExit');
            // const overlayDone = document.getElementById('overlayDone');
            const btnExit = document.getElementById('btnExit');
            // const btnCloseExit = document.getElementById('btnCloseExit');
            // const btnStay = document.getElementById('btnStay');

            // State
            let currentIndex = 0;
            let selectedAnswerId = null;
            let answered = false;
            let currentAudio = null;

            // Load question
            function loadQuestion(index) {
                // Reset state
                answered = false;
                selectedAnswerId = null;
                btnSubmit.disabled = true;
                feedbackBar.style.display = 'none';
                feedbackBar.className = 'kuis-feedback';

                // Update progress bar
                // progressFill.style.width = ((index / totalQuestions) * 100) + '%';

                const question = questions[index];

                // Render question card
                if (question.question_type === 'AU') {
                    questionCard.innerHTML = `
                        <p class="kuis-question-text">${highlightQuotes(question.question_text)}</p>
                        <button class="kuis-audio-btn" id="audioPlayBtn" aria-label="Putar audio">
                            <i class="bi bi-volume-up-fill"></i>
                        </button>
                    `;
                    document.getElementById('audioPlayBtn').addEventListener('click', function () {
                        // Stop currently playing audio
                        if (currentAudio && !currentAudio.paused) {
                            currentAudio.pause();
                            currentAudio.currentTime = 0;
                        }
                        currentAudio = new Audio('{{ asset("storage") }}/' + question.audio_path);
                        currentAudio.play().catch(() => {});
                    });
                } else {
                    // PG & IS
                    questionCard.innerHTML = `<p class="kuis-question-text">${highlightQuotes(question.question_text)}</p>`;
                }

                // Render answer choices
                answersGrid.innerHTML = '';
                question.answers.forEach(function (answer) {
                    const btn = document.createElement('button');
                    btn.className = 'kuis-answer-btn';
                    btn.textContent = answer.answer_text;
                    btn.dataset.id = answer.id;
                    btn.dataset.correct = answer.is_correct? '1' : '0';

                    btn.addEventListener('click', function () {
                        if (answered) {
                            return;
                        }
                        // Deselect all choices
                        document.querySelectorAll('.kuis-answer-btn')
                                .forEach(b => b.classList.remove('selected'));
                        btn.classList.add('selected');
                        selectedAnswerId = answer.id;
                        btnSubmit.disabled = false;
                    });
                    answersGrid.appendChild(btn);
                });
            }

            // Submit answer
            function submitAnswer() {
                if (answered || selectedAnswerId === null) {
                    return;
                }
                answered = true;
                btnSubmit.disabled = true;

                progressFill.style.width = (((currentIndex + 1) / totalQuestions) * 100) + '%';

                const question = questions[currentIndex];
                const selectedButton = answersGrid.querySelector(`[data-id="${selectedAnswerId}"]`);
                const isCorrect = selectedButton.dataset.correct === '1';
                const isLast = currentIndex === totalQuestions - 1;
                const nextLabel = isLast ? 'Selesai' : 'Lanjut';

                // Find the correct answer
                const correctAnswer = question.answers.find(a => a.is_correct);

                if (isCorrect) {
                    feedbackBar.className = 'kuis-feedback kuis-feedback-correct';
                    feedbackIcon.innerHTML = '<i class="bi bi-check-lg"></i>';
                    feedbackTitle.textContent = 'Jawabanmu benar!';
                    feedbackHint.style.display = 'none';
                    btnNext.className = 'kuis-feedback-next kuis-feedback-next-correct';
                } else {
                    feedbackBar.className = 'kuis-feedback kuis-feedback-wrong';
                    feedbackIcon.innerHTML = '<i class="bi bi-x-lg"></i>';
                    feedbackTitle.textContent = 'Jawabanmu kurang tepat!';
                    
                    // AU
                    let correctText = correctAnswer ? correctAnswer.answer_text : '';
                    if (question.question_type === 'AU' && question.correct_tiociu) {
                        correctText += ' (' + question.correct_tiociu + ')';
                    }
                    feedbackHint.innerHTML = 'Jawaban yang benar: <span style="color: var(--ok-red); font-weight: 600">' + escHtml(correctText) + '</span>';
                    feedbackHint.style.display = 'block';
                    btnNext.className = 'kuis-feedback-next kuis-feedback-next-wrong';
                }

                btnNext.textContent = nextLabel;
                feedbackBar.style.display = 'flex';
            }

            // Lanjut/Selesai
            function goNext() {
                // Stop currently playing audio
                if (currentAudio && !currentAudio.paused) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }

                currentIndex++;

                if (currentIndex >= totalQuestions) {
                    // All questions done
                    progressFill.style.width = '100%';
                    feedbackBar.style.display = 'none';
                    modalSelesai.show();
                    // overlayDone.style.display = 'flex';
                } else {
                    loadQuestion(currentIndex);
                }
            }

            // Escape HTML
            function escHtml(str) {
                const div = document.createElement('div');
                div.appendChild(document.createTextNode(str));
                return div.innerHTML;
            }

            // Highlight vocabularies
            function highlightQuotes(string) {
                const escaped = escHtml(string);
                return escaped.replace(
                    /(\u201c([^\u201d]*)\u201d)|(&quot;([^&]*)&quot;)|("([^"]*)")/g,
                    function(match, cG, cInner, qG, qInner, sG, sInner) {
                        const inner = cInner ?? qInner ?? sInner ?? '';
                        const open = cG ? '\u201c' : '"';
                        const close = cG ? '\u201d' : '"';
                        return open + '<span style="color:var(--ok-red)">' + inner + '</span>' + close;
                    }
                );
            }

            // Event listeners
            btnSubmit.addEventListener('click', submitAnswer);
            btnNext.addEventListener('click', goNext);

            // Dialog Akhiri Latihan
            btnExit.addEventListener('click', () => modalAkhiri.show());
            // btnExit.addEventListener('click', () => overlayExit.style.display = 'flex');
            // btnCloseExit.addEventListener('click', () => overlayExit.style.display = 'none');
            // btnStay.addEventListener('click', () => overlayExit.style.display = 'none');

            // Click outside of dialog to close
            // overlayExit.addEventListener('click', function (e) {
            //     if (e.target === overlayExit) {
            //         overlayExit.style.display = 'none';
            //     }
            // });

            // Initialize
            loadQuestion(0);
        })();
    </script>
@endsection
