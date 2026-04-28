<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ForumController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::orderBy('id')->get();
        $activeTag = $request->query('tag');
        $activeTab = $request->query('tab', 'semua');

        $query = Post::with(['user', 'tags', 'likes', 'comments'])
            ->withCount(['likes', 'comments'])
            ->latest();
        
        // Filter tab
        if ($activeTab === 'postingan-anda') {
            $query->where('user_id', Auth::id());
        }

        // Filter tag
        if ($activeTag) {
            $tagName = $this->slugToName($activeTag, $tags);
            $query->whereHas('tags', function ($q) use ($tagName) {
                $q->where('name', $tagName);
            });
        }

        $posts = $query->get();

        return view('forum.index', compact('posts', 'tags', 'activeTag', 'activeTab'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'required|array|min:1',
            'tags.*' => 'exists:tags,id',
        ], [
            'title.required' => 'Judul postingan wajib diisi.',
            'title.max' => 'Judul maksimal terdiri dari 255 karakter.',
            'description.required' => 'Deskripsi postingan wajib diisi.',
            'tags.required' => 'Pilih minimal 1 tag.',
            'tags.min' => 'Pilih minimal 1 tag.'
        ]);

        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $post->tags()->attach($request->tags);

        return redirect()->route('forum.index')
            ->with('status', 'Postingan berhasil dibuat!');
    }

    public function show(Post $post)
    {
        $post->load([
            'user',
            'tags',
            'likes',
            'comments' => fn($q) => $q->with(['user', 'likes'])->latest(),
        ]);
        $post->loadCount(['likes', 'comments']);

        $userLiked = $post->likes->contains('user_id', Auth::id());

        return view('forum.show', compact('post', 'userLiked'));
    }

    public function destroy(Post $post)
    {
        abort_if($post->user_id !== Auth::id(), 403);
        $post->delete();

        return redirect()->route('forum.index')
            ->with('status', 'Postingan berhasil dihapus!');
    }

    private function slugToName(string $slug, $tags): string
    {
        foreach ($tags as $tag) {
            if (Str::slug($tag->name) === $slug) {
                return $tag->name;
            }
        }
        return $slug;
    }
}
