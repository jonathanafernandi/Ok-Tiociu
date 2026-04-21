<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Topic;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = Topic::all();

        foreach ($topics as $topic) {
            Quiz::create([
                'topic_id' => $topic->id,
            ]);
        }
    }
}
