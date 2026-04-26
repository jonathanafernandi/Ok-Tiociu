<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Vocabulary;

class KuisController extends Controller
{
    public function show(Topic $topic)
    {
        $quiz = $topic->quiz()->with('questions.answers')->firstOrFail();

        // Send all questions and answers to the view as JSON
        $questionsJson = $quiz->questions->map(function ($question) {
            // For AU questions, find tiociu_text based on the audio_path
            $correctTiociu = null;
            if ($question->question_type === 'AU' && $question->audio_path) {
                $vocabulary = Vocabulary::where('audio_path', $question->audio_path)->first();
                $correctTiociu = $vocabulary?->tiociu_text;
            }

            return [
                'id' => $question->id,
                'question_text' => $question->question_text,
                'question_type' => $question->question_type,
                'audio_path' => $question->audio_path,
                'correct_tiociu' => $correctTiociu,
                'answers' => $question->answers->map(fn($answer) => [
                    'id' => $answer->id,
                    'answer_text' => $answer->answer_text,
                    'is_correct' => $answer->is_correct
                ])->shuffle()->values()
            ];
        })->shuffle()->values();

        // Count topic letter
        $allTopicIds = Topic::orderBy('id')->pluck('id');
        $position = $allTopicIds->search($topic->id) + 1;
        $letter = chr(64 + $position);

        return view('belajar.kuis', compact('topic', 'questionsJson', 'letter'));
    }
}
