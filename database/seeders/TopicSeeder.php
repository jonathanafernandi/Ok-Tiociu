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
            ['title' => 'Anggota Tubuh'],
            ['title' => 'Keluarga'],
            ['title' => 'Rumah'],
            ['title' => 'Pekerjaan'],
            ['title' => 'Kata Sifat Umum'],
            ['title' => 'Warna'],
            ['title' => 'Hewan'],
            ['title' => 'Makanan & Minuman'],
            ['title' => 'Sayuran'],
            ['title' => 'Buah-Buahan'],
            ['title' => 'Kata Kerja Dasar'],
            ['title' => 'Tempat & Arah'],
            ['title' => 'Transportasi'],
        ];

        foreach ($topics as $topic) {
            Topic::create($topic);
        }
    }
}
