@extends('layouts.public')
@section('title', $post->title . ' - Ok! Tiociu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
@endsection

@section('content')
    <section class="forum-section">
        <div class="container-fluid">
            {{-- Tautan kembali --}}
            <a href="{{ route('forum.index') }}" class="forum-back">&larr; Kembali ke Forum</a>

            {{-- Status --}}
            @if (session('status'))
                <div class="alert alert-success py-2 px-3 mb-3" style="font-size: 0.9rem; border-radius: 8px;">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Card detail postingan --}}
            <div class="forum-detail-card">
                <h4 class="forum-card-title mb-2">{{ $post->title }}</h4>
                <p class="forum-card-meta">
                    oleh <span class="forum-author">{{ $post->user->name }}</span> &bull; <span class="local-time" data-utc="{{ $post->created_at->toIso8601String() }}">
                        {{ $post->created_at->format('d M Y H.i') }}
                    </span>
                </p>
                {{-- <p class="forum-card-meta">
                    oleh <span class="forum-author">{{ $post->user->name }}</span> &bull; {{ $post->created_at->format('d M Y H.i') }}
                </p> --}}
                <p class="forum-card-desc mb-3">{!! nl2br(e($post->description)) !!}</p>

                <div class="forum-tags mb-3">
                    @foreach ($post->tags as $tag)
                        <span class="forum-tag">#{{ \Illuminate\Support\Str::slug($tag->name) }}</span>
                    @endforeach
                </div>

                <div class="forum-card-actions">
                    {{-- Suka --}}
                    <button class="forum-like-btn {{ $userLiked ? 'liked' : '' }}" id="postLikeBtn" onclick="toggleLike(this, {{ $post->id }})">
                        <i class="bi bi-hand-thumbs-up{{ $userLiked ? '-fill' : '' }}"></i>
                        <span class="forum-like-count">{{ $post->likes_count }}</span>
                    </button>

                    {{-- Komentar --}}
                    <span class="forum-comment-link">
                        <i class="bi bi-chat"></i>
                        <span id="commentCount">{{ $post->comments_count }}</span>
                    </span>

                    {{-- Hapus --}}
                    @if ($post->user_id === auth()->id())
                        <button class="forum-delete-btn" onclick="new bootstrap.Modal(document.getElementById('modalHapusPostingan')).show()">
                            <i class="bi bi-trash3"></i>
                        </button>
                    @endif
                </div>
            </div>

            {{-- Input komentar --}}
            <div class="forum-comment-input-wrap">
                <form action="{{ route('forum.komentar.store', $post) }}" method="post" class="forum-comment-form" id="formKomentar">
                    @csrf
                    <textarea name="comment_text" id="commentInput" rows="1" class="form-control forum-comment-input {{ $errors->has('comment_text') ? 'is-invalid' : '' }}" placeholder="Masukkan komentar" autocomplete="off">{{ old('comment_text') }}</textarea>
                    {{-- <input type="text" name="comment_text" id="commentInput" class="form-control forum-comment-input @error('comment_text') is-invalid @enderror" placeholder="Masukkan komentar" value="{{ old('comment_text') }}" autocomplete="off"> --}}
                    <button type="submit" class="forum-comment-send" title="Kirim komentar">
                        <i class="bi bi-send-fill"></i>
                    </button>
                </form>
                @error('comment_text')
                    <div class="invalid-feedback d-block" style="font-size: 0.8rem;">{{ $message }}</div>
                @enderror
            </div>

            {{-- Daftar komentar --}}
            <div class="forum-comments-list">
                @forelse ($post->comments as $comment)
                    <div class="forum-comment-card">
                        <p class="forum-card-meta mb-2">
                            <span class="forum-author">{{ $comment->user->name }}</span> &bull; <span class="local-time" data-utc="{{ $comment->created_at->toIso8601String() }}">
                                {{ $comment->created_at->format('d M Y H.i') }}
                            </span>
                        </p>
                        {{-- <p class="forum-card-meta mb-2">
                            <span class="forum-author">{{ $comment->user->name }}</span> &bull; {{ $comment->created_at->format('d M Y H.i') }}
                        </p> --}}
                        <p class="forum-comment-text mb-2">{!! nl2br(e($comment->comment_text)) !!}</p>
                        <div class="forum-card-actions">
                            {{-- Suka komentar --}}
                            @php
                                $commentLiked = $comment->likes->contains('user_id', auth()->id());
                                $commentLikeCount = $comment->likes->count();
                            @endphp
                            <button class="forum-like-btn {{ $commentLiked ? 'liked' : '' }}" onclick="toggleCommentLike(this, {{ $post->id }}, {{ $comment->id}})">
                                <i class="bi bi-hand-thumbs-up{{ $commentLiked ? '-fill' : '' }}"></i>
                                <span class="forum-like-count">{{ $commentLikeCount }}</span>
                            </button>
                            {{-- Hapus komentar --}}
                            @if ($comment->user_id === auth()->id())
                                <button class="forum-delete-btn" onclick="openDeleteCommentModal({{ $post->id }}, {{ $comment->id }})">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            @endif
                        </div>
                    </div>
                @empty
                    {{-- Belum ada komentar --}}
                @endforelse
            </div>
        </div>
    </section>
@endsection

@section('modal')
    {{-- Modal: Hapus Postingan --}}
    <div class="modal fade" id="modalHapusPostingan" tabindex="-1" aria-labelledby="modalHapusPostinganLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 420px;">
            <div class="modal-content" style="border-radius: 16px; border: none; padding: 0.5rem;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="modalHapusPostinganLabel">Hapus Postingan?</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center mb-4" style="font-size: 0.9rem; color: #000;">
                        Apakah kamu yakin ingin menghapus postingan ini?
                    </p>
                    <form action="{{ route('forum.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-ok-primary mb-2">Hapus Postingan</button>
                        <button class="btn-ok-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal: Hapus Komentar --}}
    <div class="modal fade" id="modalHapusKomentar" tabindex="-1" aria-labelledby="modalHapusKomentarLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 420px;">
            <div class="modal-content" style="border-radius: 16px; border: none; padding: 0.5rem;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="modalHapusKomentarLabel">Hapus Komentar?</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center mb-4" style="font-size: 0.9rem; color: #000;">
                        Apakah kamu yakin ingin menghapus komentar ini?
                    </p>
                    <form id="formHapusKomentar" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-ok-primary mb-2">Hapus Komentar</button>
                        <button class="btn-ok-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Like/unlike post
        async function toggleLike(button, postId) {
            button.disabled = true;
            try {
                const result = await fetch(`/forum/${postId}/suka`, {
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                    },
                });
                const data = await result.json();
                button.querySelector('.forum-like-count').textContent = data.count;
                const icon = button.querySelector('i');
                if (data.liked) {
                    button.classList.add('liked');
                    icon.className = 'bi bi-hand-thumbs-up-fill';
                } else {
                    button.classList.remove('liked');
                    icon.className = 'bi bi-hand-thumbs-up';
                }
            } catch (error) {
                console.error(error);
            }
            button.disabled = false;
        }

        // Like/unlike comment
        async function toggleCommentLike(button, postId, commentId) {
            button.disabled = true;
            try {
                const result = await fetch(`/forum/${postId}/komentar/${commentId}/suka`, {
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                    },
                });
                const data = await result.json();
                button.querySelector('.forum-like-count').textContent = data.count;
                const icon = button.querySelector('i');
                if (data.liked) {
                    button.classList.add('liked');
                    icon.className = 'bi bi-hand-thumbs-up-fill';
                } else {
                    button.classList.remove('liked');
                    icon.className = 'bi bi-hand-thumbs-up';
                }
            } catch (error) {
                console.error(error);
            }
            button.disabled = false;
        }

        // Modal Hapus Komentar
        function openDeleteCommentModal(postId, commentId) {
            document.getElementById('formHapusKomentar').action = `/forum/${postId}/komentar/${commentId}`;
            new bootstrap.Modal(document.getElementById('modalHapusKomentar')).show();
        }

        // Prevent empty comment submit
        const commentInput = document.getElementById('commentInput');

        function autoResize(el) {
            el.style.height = 'auto';
            el.style.height = el.scrollHeight + 'px';
        }

        commentInput.addEventListener('input', function () {
            autoResize(this);
        });

        commentInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' && (e.ctrlKey || e.metaKey)) {
                e.preventDefault();
                document.getElementById('formKomentar').dispatchEvent(
                    new Event('submit', { cancelable: true, bubbles: true })
                );
            }
        });

        document.getElementById('formKomentar').addEventListener('submit', function (e) {
            if (!commentInput.value.trim()) {
                e.preventDefault();
                commentInput.focus();
            }
        });

        window.addEventListener('load', function () {
            autoResize(commentInput);
        });        
    </script>
@endsection
