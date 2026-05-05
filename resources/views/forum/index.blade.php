@extends('layouts.public')
@section('title', 'Forum - Ok! Tiociu')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
@endsection

@section('content')
    <section class="forum-section">
        <div class="container-fluid">
            {{-- Top bar: filter + Buat Postingan --}}
            <div class="d-flex justify-content-between align-items center forum-topbar mb-3">
                <select id="forumTagFilter" class="forum-filter-select" onchange="filterByTag(this)">
                    <option value="" {{ !$activeTag ? 'selected' : '' }}>Tampilkan Semua</option>
                    @foreach ($tags as $tag)
                        @php
                            $slug = \Illuminate\Support\Str::slug($tag->name);
                        @endphp
                        <option value="{{ $slug }}" {{ $activeTag === $slug ? 'selected' : ''}}>
                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select>

                <button class="btn-forum-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalBuatPostingan">
                    Buat Postingan Baru
                </button>
            </div>

            {{-- Tabs --}}
            <div class="forum-tabs">
                <a href="{{ route('forum.index', array_filter(['tab' => 'semua', 'tag' => $activeTag])) }}" class="forum-tab {{ $activeTab === 'semua' ? 'active' : '' }}">
                    Semua
                </a>
                <a href="{{ route('forum.index', array_filter(['tab' => 'postingan-anda', 'tag' => $activeTag])) }}" class="forum-tab {{ $activeTab === 'postingan-anda' ? 'active' : '' }}">
                    Postingan Anda
                </a>
            </div>

            {{-- Status message --}}
            @if (session('status'))
                <div class="alert alert-success py-2 px-3 mb-3" style="font-size: 0.9rem; border-radius: 8px;">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Daftar postingan/empty state --}}
            @if ($posts->isEmpty())
                <div class="forum-empty text-center">
                    <h5 class="fw-bold mb-2">
                        {{ $activeTab === 'postingan-anda' ? 'Kamu belum membuat postingan' : 'Belum ada postingan' }}
                    </h5>
                    <p class="fw-semibold mb-0">
                        Mulai diskusi pertamamu dan bagikan pertanyaan atau pengetahuanmu tentang bahasa Tiociu!
                    </p>
                </div>
            @else
                <div class="forum-list">
                    @foreach ($posts as $post)
                        @php
                            $isOwn = $post->user_id === auth()->id();
                        @endphp
                        <div class="forum-card">
                            {{-- Clickable area --}}
                            <a href="{{ route('forum.show', $post) }}" class="forum-card-link">
                                <h5 class="forum-card-title">{{ $post->title }}</h5>
                                <p class="forum-card-meta">
                                    oleh <span class="forum-author">{{ $post->user->name }}</span>
                                    &bull; <span class="local-time" data-utc="{{ $post->created_at->toIso8601String() }}">
                                        {{ $post->created_at->format('d M Y H.i') }}
                                    </span>
                                </p>
                                {{-- <p class="forum-card-meta">
                                    oleh <span class="forum-author">{{ $post->user->name }}</span>
                                    &bull; {{ $post->created_at->format('d M Y H.i') }}
                                </p> --}}
                                <p class="forum-card-desc">{!! nl2br(e($post->description)) !!}</p>
                                <div class="forum-tags">
                                    @foreach ($post->tags as $tag)
                                        <span class="forum-tag">#{{ \Illuminate\Support\Str::slug($tag->name) }}</span>
                                    @endforeach
                                </div>
                            </a>

                            {{-- Actions --}}
                            <div class="forum-card-actions">
                                {{-- Suka --}}
                                <button class="forum-like-btn {{ $post->likes->contains('user_id', auth()->id()) ? 'liked' : '' }}" onclick="toggleLike(this, {{ $post->id }})">
                                    <i class="bi bi-hand-thumbs-up{{ $post->likes->contains('user_id', auth()->id()) ? '-fill' : '' }}"></i>
                                    <span class="forum-like-count">{{ $post->likes_count }}</span>
                                </button>

                                {{-- Komentar --}}
                                <a href="{{ route('forum.show', $post) }}" class="forum-comment-link">
                                    <i class="bi bi-chat"></i>
                                    <span>{{ $post->comments_count }}</span>
                                </a>

                                {{-- Hapus --}}
                                @if ($isOwn)
                                    <button class="forum-delete-btn" onclick="openDeletePostModal({{ $post->id }})">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection

@section('modal')
    {{-- Modal: Buat Postingan Baru --}}
    <div class="modal fade" id="modalBuatPostingan" tabindex="-1" aria-labelledby="modalBuatPostinganLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="border-radius: 16px; border: none; padding: 0.5rem;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="modalBuatPostinganLabel">Buat Postingan Baru</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('forum.store') }}" method="post" id="formBuatPostingan">
                        @csrf

                        {{-- Judul --}}
                        <div class="mb-3">
                            <label for="postTitle" class="form-label">Judul Postingan</label>
                            <input type="text" name="title" id="postTitle" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan judul" value="{{ old('title') }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="postDesc" class="form-label">Deskripsi</label>
                            <textarea name="description" id="postDesc" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan deskripsi" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Pilih Tag --}}
                        <div class="mb-4">
                            <label class="form-label">Pilih Tag</label>
                            @error('tags')
                                <div class="text-danger mb-2" style="font-size: 0.875rem;">{{ $message }}</div>
                            @enderror
                            <div class="forum-tag-checkboxes">
                                @foreach ($tags as $tag)
                                    <div class="form-check">
                                        <input type="checkbox" name="tags[]" id="tag{{ $tag->id }}" value="{{ $tag->id }}" class="form-check-input" {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? 'checked' : '' }}>
                                        <label for="tag{{ $tag->id }}" class="form-check-label">
                                            {{ $tag->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="btn-ok-primary mb-2">Unggah Postingan</button>
                        <button class="btn-ok-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                    <form method="post" id="formHapusPostingan">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-ok-primary mb-2">Hapus Postingan</button>
                        <button class="btn-ok-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Tag filter
        function filterByTag(select) {
            const url = new URL(window.location.href);
            if (select.value) {
                url.searchParams.set('tag', select.value);
            } else {
                url.searchParams.delete('tag');
            }
            window.location.href = url.toString();
        }

        window.addEventListener('pageshow', function () {
            const urlParams = new URLSearchParams(window.location.search);
            const tagParam = urlParams.get('tag') || '';
            const select = document.getElementById('forumTagFilter');
            if (select) {
                select.value = tagParam;
            }
        });

        // Like/dislike
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

        // Modal Hapus Postingan
        function openDeletePostModal(postId) {
            document.getElementById('formHapusPostingan').action = `/forum/${postId}`;
            new bootstrap.Modal(document.getElementById('modalHapusPostingan')).show();
        }

        // Auto-open for Modal Buat Postingan
        @if ($errors->any())
            document.addEventListener('DOMContentLoaded', function () {
                new bootstrap.Modal(document.getElementById('modalBuatPostingan')).show();
            });
        @endif

        // Reset form + remove errors
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('modalBuatPostingan').addEventListener('hidden.bs.modal', function () {
                document.getElementById('postTitle').value = '';
                document.getElementById('postDesc').value = '';
                this.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);

                this.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                this.querySelectorAll('.invalid-feedback').forEach(el => el.style.display = 'none');
                this.querySelectorAll('.text-danger').forEach(el => el.style.display = 'none');

                // document.getElementById('formBuatPostingan').reset();
                // this.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                // this.querySelectorAll('.invalid-feedback').forEach(el => el.style.display = 'none');
                // this.querySelectorAll('.text-danger').forEach(el => el.style.display = 'none');
            });
        });
    </script>
@endsection
