<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            ['title' => 'Kata Ganti Orang'],
            ['title' => 'Salam & Ungkapan Dasar'],
            ['title' => 'Kata Tanya'],
            ['title' => 'Angka & Bilangan'],
            ['title' => 'Waktu'],
            ['title' => 'Keluarga'],
            ['title' => 'Warna'],
            ['title' => 'Makanan & Minuman'],
            ['title' => 'Anggota Tubuh'],
            ['title' => 'Kata Kerja Dasar'],
            ['title' => 'Kata Sifat Umum'],
            ['title' => 'Tempat & Arah'],
        ];

        foreach ($topics as $topic) {
            Topic::create($topic);
        }
    }
}
