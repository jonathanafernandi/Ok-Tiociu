<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Tata Bahasa'],
            ['name' => 'Kosakata'],
            ['name' => 'Pelafalan'],
            ['name' => 'Terjemahan'],
            ['name' => 'Budaya'],
            ['name' => 'Tips Belajar'],
            ['name' => 'Saran dan Masukan'],
            ['name' => 'Diskusi Umum'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
