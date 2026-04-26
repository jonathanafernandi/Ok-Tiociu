<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class BelajarController extends Controller
{
    public function index() {
        $topics = Topic::orderBy('id')->get();
        return view('belajar.index', compact('topics'));
    }

    public function show(Topic $topic)
    {
        $vocabularies = $topic->vocabularies()->get();

        // Count topic position
        $allTopicIds = Topic::orderBy('id')->pluck('id');
        $position = $allTopicIds->search($topic->id) + 1;
        $letter = chr(64 + $position);

        return view('belajar.show', compact('topic', 'vocabularies', 'letter'));
    }
}
