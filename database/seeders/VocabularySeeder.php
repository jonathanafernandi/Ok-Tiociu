<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vocabulary;
use App\Models\Topic;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Topik A: Kata Ganti Orang
        $topicA = Topic::where('title', 'Kata Ganti Orang')->first();
        $vocabA = [
            ['tiociu_text' => 'wa', 'indonesian_text' => 'saya', 'audio_path' => 'audio/vocabularies/A.1.m4a', 'image_path' => 'images/vocabularies/A.1.jpg'],
            ['tiociu_text' => 'le', 'indonesian_text' => 'kamu', 'audio_path' => 'audio/vocabularies/A.2.m4a', 'image_path' => 'images/vocabularies/A.2.jpg'],
            ['tiociu_text' => 'yi', 'indonesian_text' => 'dia', 'audio_path' => 'audio/vocabularies/A.3.m4a', 'image_path' => 'images/vocabularies/A.3.jpg'],
            ['tiociu_text' => 'wa nang', 'indonesian_text' => 'kami', 'audio_path' => 'audio/vocabularies/A.4.m4a', 'image_path' => 'images/vocabularies/A.4.jpg'],
            ['tiociu_text' => 'nang', 'indonesian_text' => 'kita', 'audio_path' => 'audio/vocabularies/A.5.m4a', 'image_path' => 'images/vocabularies/A.5.jpg'],
            ['tiociu_text' => 'ning nang', 'indonesian_text' => 'kalian', 'audio_path' => 'audio/vocabularies/A.6.m4a', 'image_path' => 'images/vocabularies/A.6.jpg'],
            ['tiociu_text' => 'yi nang', 'indonesian_text' => 'mereka', 'audio_path' => 'audio/vocabularies/A.7.m4a', 'image_path' => 'images/vocabularies/A.7.jpg'],
            ['tiociu_text' => 'nang', 'indonesian_text' => 'orang', 'audio_path' => 'audio/vocabularies/A.8.m4a', 'image_path' => 'images/vocabularies/A.8.jpg'],
            ['tiociu_text' => 'ka ki', 'indonesian_text' => 'diri sendiri', 'audio_path' => 'audio/vocabularies/A.9.m4a', 'image_path' => 'images/vocabularies/A.9.jpg'],
            ['tiociu_text' => 'pak nang', 'indonesian_text' => 'orang lain', 'audio_path' => 'audio/vocabularies/A.10.m4a', 'image_path' => 'images/vocabularies/A.10.jpg'],
            ['tiociu_text' => 'ci kai', 'indonesian_text' => 'ini', 'audio_path' => 'audio/vocabularies/A.11.m4a', 'image_path' => 'images/vocabularies/A.11.jpg'],
            ['tiociu_text' => 'hi kai', 'indonesian_text' => 'itu', 'audio_path' => 'audio/vocabularies/A.12.m4a', 'image_path' => 'images/vocabularies/A.12.jpg'],
        ];
        foreach ($vocabA as $vocab) {
            Vocabulary::create(['topic_id' => $topicA->id] + $vocab);
        }

        // Topik B: Salam & Ungkapan Dasar
        $topicB = Topic::where('title', 'Salam & Ungkapan Dasar')->first();
        $vocabB = [
            ['tiociu_text' => 'le ho', 'indonesian_text' => 'Halo', 'audio_path' => 'audio/vocabularies/B.1.m4a', 'image_path' => 'images/vocabularies/B.1.jpg'],
            ['tiociu_text' => 'ta kê ho', 'indonesian_text' => 'Halo semua', 'audio_path' => 'audio/vocabularies/B.2.m4a', 'image_path' => 'images/vocabularies/B.2.jpg'],
            ['tiociu_text' => 'le ciak pa boê?', 'indonesian_text' => 'Apakah kamu sudah makan?', 'audio_path' => 'audio/vocabularies/B.3.m4a', 'image_path' => 'images/vocabularies/B.3.jpg'],
            ['tiociu_text' => 'wa ciak pa liao', 'indonesian_text' => 'Saya sudah makan', 'audio_path' => 'audio/vocabularies/B.4.m4a', 'image_path' => 'images/vocabularies/B.4.jpg'],
            ['tiociu_text' => 'kam sia', 'indonesian_text' => 'Terima kasih', 'audio_path' => 'audio/vocabularies/B.5.m4a', 'image_path' => 'images/vocabularies/B.5.jpg'],
            ['tiociu_text' => 'tui em cu', 'indonesian_text' => 'Maaf', 'audio_path' => 'audio/vocabularies/B.6.m4a', 'image_path' => 'images/vocabularies/B.6.jpg'],
            ['tiociu_text' => 'boê co ni', 'indonesian_text' => 'Tidak apa-apa', 'audio_path' => 'audio/vocabularies/B.7.m4a', 'image_path' => 'images/vocabularies/B.7.jpg'],
            ['tiociu_text' => 'le mia mik kai?', 'indonesian_text' => 'Siapa namamu?', 'audio_path' => 'audio/vocabularies/B.8.m4a', 'image_path' => 'images/vocabularies/B.8.jpg'],
            ['tiociu_text' => 'wa mia ...', 'indonesian_text' => 'Nama saya ...', 'audio_path' => 'audio/vocabularies/B.9.m4a', 'image_path' => 'images/vocabularies/B.9.jpg'],
            ['tiociu_text' => 'si', 'indonesian_text' => 'ya', 'audio_path' => 'audio/vocabularies/B.10.m4a', 'image_path' => 'images/vocabularies/B.10.jpg'],
            ['tiociu_text' => 'em si', 'indonesian_text' => 'tidak', 'audio_path' => 'audio/vocabularies/B.11.m4a', 'image_path' => 'images/vocabularies/B.11.jpg'],
            ['tiociu_text' => 'tiok', 'indonesian_text' => 'benar', 'audio_path' => 'audio/vocabularies/B.12.m4a', 'image_path' => 'images/vocabularies/B.12.jpg'],
            ['tiociu_text' => 'em tiok', 'indonesian_text' => 'salah', 'audio_path' => 'audio/vocabularies/B.13.m4a', 'image_path' => 'images/vocabularies/B.13.jpg'],
            ['tiociu_text' => 'ai', 'indonesian_text' => 'mau', 'audio_path' => 'audio/vocabularies/B.14.m4a', 'image_path' => 'images/vocabularies/B.14.jpg'],
            ['tiociu_text' => 'mai', 'indonesian_text' => 'tidak mau', 'audio_path' => 'audio/vocabularies/B.15.m4a', 'image_path' => 'images/vocabularies/B.15.jpg'],
            ['tiociu_text' => 'oi têk', 'indonesian_text' => 'bisa', 'audio_path' => 'audio/vocabularies/B.16.m4a', 'image_path' => 'images/vocabularies/B.16.jpg'],
            ['tiociu_text' => 'boê têk', 'indonesian_text' => 'tidak bisa', 'audio_path' => 'audio/vocabularies/B.17.m4a', 'image_path' => 'images/vocabularies/B.17.jpg'],
            ['tiociu_text' => 'oi sai', 'indonesian_text' => 'boleh', 'audio_path' => 'audio/vocabularies/B.18.m4a', 'image_path' => 'images/vocabularies/B.18.jpg'],
            ['tiociu_text' => 'boê sai', 'indonesian_text' => 'tidak boleh', 'audio_path' => 'audio/vocabularies/B.19.m4a', 'image_path' => 'images/vocabularies/B.19.jpg'],
            ['tiociu_text' => 'oi cai', 'indonesian_text' => 'mengetahui', 'audio_path' => 'audio/vocabularies/B.20.m4a', 'image_path' => 'images/vocabularies/B.20.jpg'],
            ['tiociu_text' => 'em cai', 'indonesian_text' => 'tidak tahu', 'audio_path' => 'audio/vocabularies/B.21.m4a', 'image_path' => 'images/vocabularies/B.21.jpg'],
            ['tiociu_text' => 'ki têk', 'indonesian_text' => 'ingat', 'audio_path' => 'audio/vocabularies/B.22.m4a', 'image_path' => 'images/vocabularies/B.22.jpg'],
            ['tiociu_text' => 'em ki têk', 'indonesian_text' => 'lupa', 'audio_path' => 'audio/vocabularies/B.23.m4a', 'image_path' => 'images/vocabularies/B.23.jpg'],
            ['tiociu_text' => 'oi tong', 'indonesian_text' => 'mengerti', 'audio_path' => 'audio/vocabularies/B.24.m4a', 'image_path' => 'images/vocabularies/B.24.jpg'],
            ['tiociu_text' => 'boê tong', 'indonesian_text' => 'tidak mengerti', 'audio_path' => 'audio/vocabularies/B.25.m4a', 'image_path' => 'images/vocabularies/B.25.jpg'],
            ['tiociu_text' => 'pak', 'indonesian_text' => 'kenal', 'audio_path' => 'audio/vocabularies/B.26.m4a', 'image_path' => 'images/vocabularies/B.26.jpg'],
            ['tiociu_text' => 'em pak', 'indonesian_text' => 'tidak kenal', 'audio_path' => 'audio/vocabularies/B.27.m4a', 'image_path' => 'images/vocabularies/B.27.jpg'],
            ['tiociu_text' => 'wu', 'indonesian_text' => 'ada', 'audio_path' => 'audio/vocabularies/B.28.m4a', 'image_path' => 'images/vocabularies/B.28.jpg'],
            ['tiociu_text' => 'bo', 'indonesian_text' => 'tidak ada', 'audio_path' => 'audio/vocabularies/B.29.m4a', 'image_path' => 'images/vocabularies/B.29.jpg'],
            ['tiociu_text' => 'ho', 'indonesian_text' => 'oke', 'audio_path' => 'audio/vocabularies/B.30.m4a', 'image_path' => 'images/vocabularies/B.30.jpg'],
            ['tiociu_text' => 'sê jik hua hi', 'indonesian_text' => 'Selamat ulang tahun', 'audio_path' => 'audio/vocabularies/B.31.m4a', 'image_path' => 'images/vocabularies/B.31.jpg'],
            ['tiociu_text' => 'sin cia ju yi', 'indonesian_text' => 'Selamat Tahun Baru Imlek', 'audio_path' => 'audio/vocabularies/B.32.m4a', 'image_path' => 'images/vocabularies/B.32.jpg'],
        ];
        foreach ($vocabB as $vocab) {
            Vocabulary::create(['topic_id' => $topicB->id] + $vocab);
        }

        // Topik C: Kata Tanya
        $topicC = Topic::where('title', 'Kata Tanya')->first();
        $vocabC = [
            ['tiociu_text' => 'mik kai', 'indonesian_text' => 'apa', 'audio_path' => 'audio/vocabularies/C.1.m4a', 'image_path' => 'images/vocabularies/C.1.jpg'],
            ['tiociu_text' => 'ting tiang', 'indonesian_text' => 'siapa', 'audio_path' => 'audio/vocabularies/C.2.m4a', 'image_path' => 'images/vocabularies/C.2.jpg'],
            ['tiociu_text' => 'to di ko', 'indonesian_text' => 'di mana', 'audio_path' => 'audio/vocabularies/C.3.m4a', 'image_path' => 'images/vocabularies/C.3.jpg'],
            ['tiociu_text' => 'tiang si', 'indonesian_text' => 'kapan', 'audio_path' => 'audio/vocabularies/C.4.m4a', 'image_path' => 'images/vocabularies/C.4.jpg'],
            ['tiociu_text' => 'co ni', 'indonesian_text' => 'mengapa', 'audio_path' => 'audio/vocabularies/C.5.m4a', 'image_path' => 'images/vocabularies/C.5.jpg'],
            ['tiociu_text' => 'co ni muêk', 'indonesian_text' => 'bagaimana', 'audio_path' => 'audio/vocabularies/C.6.m4a', 'image_path' => 'images/vocabularies/C.6.jpg'],
            ['tiociu_text' => 'diok coi', 'indonesian_text' => 'berapa', 'audio_path' => 'audio/vocabularies/C.7.m4a', 'image_path' => 'images/vocabularies/C.7.jpg'],
        ];
        foreach ($vocabC as $vocab) {
            Vocabulary::create(['topic_id' => $topicC->id] + $vocab);
        }

        // Topik D: Angka & Bilangan
        $topicD = Topic::where('title', 'Angka & Bilangan')->first();
        $vocabD = [
            ['tiociu_text' => 'khang', 'indonesian_text' => '0', 'audio_path' => 'audio/vocabularies/D.1.m4a'],
            ['tiociu_text' => 'cêk', 'indonesian_text' => '1', 'audio_path' => 'audio/vocabularies/D.2.m4a'],
            ['tiociu_text' => 'no', 'indonesian_text' => '2', 'audio_path' => 'audio/vocabularies/D.3.m4a'],
            ['tiociu_text' => 'sa', 'indonesian_text' => '3', 'audio_path' => 'audio/vocabularies/D.4.m4a'],
            ['tiociu_text' => 'si', 'indonesian_text' => '4', 'audio_path' => 'audio/vocabularies/D.5.m4a'],
            ['tiociu_text' => 'ngou', 'indonesian_text' => '5', 'audio_path' => 'audio/vocabularies/D.6.m4a'],
            ['tiociu_text' => 'lak', 'indonesian_text' => '6', 'audio_path' => 'audio/vocabularies/D.7.m4a'],
            ['tiociu_text' => 'chêk', 'indonesian_text' => '7', 'audio_path' => 'audio/vocabularies/D.8.m4a'],
            ['tiociu_text' => 'puêk', 'indonesian_text' => '8', 'audio_path' => 'audio/vocabularies/D.9.m4a'],
            ['tiociu_text' => 'kao', 'indonesian_text' => '9', 'audio_path' => 'audio/vocabularies/D.10.m4a'],
            ['tiociu_text' => 'cap', 'indonesian_text' => '10', 'audio_path' => 'audio/vocabularies/D.11.m4a'],
            ['tiociu_text' => 'cap êk', 'indonesian_text' => '11', 'audio_path' => 'audio/vocabularies/D.12.m4a'],
            ['tiociu_text' => 'cap ji', 'indonesian_text' => '12', 'audio_path' => 'audio/vocabularies/D.13.m4a'],
            ['tiociu_text' => 'ji cap', 'indonesian_text' => '20', 'audio_path' => 'audio/vocabularies/D.14.m4a'],
            ['tiociu_text' => 'cik pêk', 'indonesian_text' => '100', 'audio_path' => 'audio/vocabularies/D.15.m4a'],
            ['tiociu_text' => 'cik pêk khang sa', 'indonesian_text' => '103', 'audio_path' => 'audio/vocabularies/D.16.m4a'],
            ['tiociu_text' => 'cik pêk si', 'indonesian_text' => '140', 'audio_path' => 'audio/vocabularies/D.17.m4a'],
            ['tiociu_text' => 'cik pêk ngou cap lak', 'indonesian_text' => '156', 'audio_path' => 'audio/vocabularies/D.18.m4a'],
            ['tiociu_text' => 'cik chêng', 'indonesian_text' => '1.000', 'audio_path' => 'audio/vocabularies/D.19.m4a'],
            ['tiociu_text' => 'chêng khang chêk', 'indonesian_text' => '1.007', 'audio_path' => 'audio/vocabularies/D.20.m4a'],
            ['tiociu_text' => 'chêng khang puêk cap', 'indonesian_text' => '1.080', 'audio_path' => 'audio/vocabularies/D.21.m4a'],
            ['tiociu_text' => 'chêng kao', 'indonesian_text' => '1.900', 'audio_path' => 'audio/vocabularies/D.22.m4a'],
            ['tiociu_text' => 'cek ban', 'indonesian_text' => '10.000', 'audio_path' => 'audio/vocabularies/D.23.m4a'],
            ['tiociu_text' => 'cek tiao', 'indonesian_text' => '1.000.000', 'audio_path' => 'audio/vocabularies/D.24.m4a'],
            ['tiociu_text' => 'ji tiam sa', 'indonesian_text' => '2,3', 'audio_path' => 'audio/vocabularies/D.25.m4a'],
            ['tiociu_text' => 'si cap ngou pa siang', 'indonesian_text' => '45%', 'audio_path' => 'audio/vocabularies/D.26.m4a'],
            ['tiociu_text' => 'cik pua', 'indonesian_text' => 'setengah', 'audio_path' => 'audio/vocabularies/D.27.m4a'],
            ['tiociu_text' => 'toi êk', 'indonesian_text' => 'pertama', 'audio_path' => 'audio/vocabularies/D.28.m4a'],
            ['tiociu_text' => 'toi ji', 'indonesian_text' => 'kedua', 'audio_path' => 'audio/vocabularies/D.29.m4a'],
            ['tiociu_text' => 'êk ho', 'indonesian_text' => 'nomor 1', 'audio_path' => 'audio/vocabularies/D.30.m4a'],
        ];
        foreach ($vocabD as $vocab) {
            Vocabulary::create(['topic_id' => $topicD->id] + $vocab);
        }

        // Topik E: Waktu
        $topicE = Topic::where('title', 'Waktu')->first();
        $vocabE = [
            ['tiociu_text' => 'ci cung', 'indonesian_text' => 'sekarang', 'audio_path' => 'audio/vocabularies/E.1.m4a'],
            ['tiociu_text' => 'ku ca', 'indonesian_text' => 'dulu', 'audio_path' => 'audio/vocabularies/E.2.m4a'],
            ['tiociu_text' => 'tang ê', 'indonesian_text' => 'nanti', 'audio_path' => 'audio/vocabularies/E.3.m4a'],
            ['tiociu_text' => 'ji khang ji lak ni', 'indonesian_text' => 'tahun 2026', 'audio_path' => 'audio/vocabularies/E.4.m4a'],
            ['tiociu_text' => 'king ni', 'indonesian_text' => 'tahun ini', 'audio_path' => 'audio/vocabularies/E.5.m4a'],
            ['tiociu_text' => 'ku ni', 'indonesian_text' => 'tahun lalu', 'audio_path' => 'audio/vocabularies/E.6.m4a'],
            ['tiociu_text' => 'mê ni', 'indonesian_text' => 'tahun depan', 'audio_path' => 'audio/vocabularies/E.7.m4a'],
            ['tiociu_text' => 'cek ni', 'indonesian_text' => 'satu tahun', 'audio_path' => 'audio/vocabularies/E.8.m4a'],
            ['tiociu_text' => 'êk guêk', 'indonesian_text' => 'Januari', 'audio_path' => 'audio/vocabularies/E.9.m4a'],
            ['tiociu_text' => 'ji guêk', 'indonesian_text' => 'Februari', 'audio_path' => 'audio/vocabularies/E.10.m4a'],
            ['tiociu_text' => 'sa guêk', 'indonesian_text' => 'Maret', 'audio_path' => 'audio/vocabularies/E.11.m4a'],
            ['tiociu_text' => 'si guêk', 'indonesian_text' => 'April', 'audio_path' => 'audio/vocabularies/E.12.m4a'],
            ['tiociu_text' => 'ngou guêk', 'indonesian_text' => 'Mei', 'audio_path' => 'audio/vocabularies/E.13.m4a'],
            ['tiociu_text' => 'lak guêk', 'indonesian_text' => 'Juni', 'audio_path' => 'audio/vocabularies/E.14.m4a'],
            ['tiociu_text' => 'chêk guêk', 'indonesian_text' => 'Juli', 'audio_path' => 'audio/vocabularies/E.15.m4a'],
            ['tiociu_text' => 'puêk guêk', 'indonesian_text' => 'Agustus', 'audio_path' => 'audio/vocabularies/E.16.m4a'],
            ['tiociu_text' => 'kao guêk', 'indonesian_text' => 'September', 'audio_path' => 'audio/vocabularies/E.17.m4a'],
            ['tiociu_text' => 'cap guêk', 'indonesian_text' => 'Oktober', 'audio_path' => 'audio/vocabularies/E.18.m4a'],
            ['tiociu_text' => 'cap êk guêk', 'indonesian_text' => 'November', 'audio_path' => 'audio/vocabularies/E.19.m4a'],
            ['tiociu_text' => 'cap ji guêk', 'indonesian_text' => 'Desember', 'audio_path' => 'audio/vocabularies/E.20.m4a'],
            ['tiociu_text' => 'ci kai guêk', 'indonesian_text' => 'bulan ini', 'audio_path' => 'audio/vocabularies/E.21.m4a'],
            ['tiociu_text' => 'têng kai guêk', 'indonesian_text' => 'bulan lalu', 'audio_path' => 'audio/vocabularies/E.22.m4a'],
            ['tiociu_text' => 'ê kai guêk', 'indonesian_text' => 'bulan depan', 'audio_path' => 'audio/vocabularies/E.23.m4a'],
            ['tiociu_text' => 'no kai guêk', 'indonesian_text' => 'dua bulan', 'audio_path' => 'audio/vocabularies/E.24.m4a'],
            ['tiociu_text' => 'ci kai lui pai', 'indonesian_text' => 'minggu ini', 'audio_path' => 'audio/vocabularies/E.25.m4a'],
            ['tiociu_text' => 'têng kai lui pai', 'indonesian_text' => 'minggu lalu', 'audio_path' => 'audio/vocabularies/E.26.m4a'],
            ['tiociu_text' => 'ê kai lui pai', 'indonesian_text' => 'minggu depan', 'audio_path' => 'audio/vocabularies/E.27.m4a'],
            ['tiociu_text' => 'sa kai lui pai', 'indonesian_text' => 'tiga minggu', 'audio_path' => 'audio/vocabularies/E.28.m4a'],
            ['tiociu_text' => 'ji cap êk ho', 'indonesian_text' => 'tanggal 21', 'audio_path' => 'audio/vocabularies/E.29.m4a'],
            ['tiociu_text' => 'pai êk', 'indonesian_text' => 'Senin', 'audio_path' => 'audio/vocabularies/E.30.m4a'],
            ['tiociu_text' => 'pai ji', 'indonesian_text' => 'Selasa', 'audio_path' => 'audio/vocabularies/E.31.m4a'],
            ['tiociu_text' => 'pai sa', 'indonesian_text' => 'Rabu', 'audio_path' => 'audio/vocabularies/E.32.m4a'],
            ['tiociu_text' => 'pai si', 'indonesian_text' => 'Kamis', 'audio_path' => 'audio/vocabularies/E.33.m4a'],
            ['tiociu_text' => 'pai ngou', 'indonesian_text' => 'Jumat', 'audio_path' => 'audio/vocabularies/E.34.m4a'],
            ['tiociu_text' => 'pai lak', 'indonesian_text' => 'Sabtu', 'audio_path' => 'audio/vocabularies/E.35.m4a'],
            ['tiociu_text' => 'lui pai', 'indonesian_text' => 'Minggu', 'audio_path' => 'audio/vocabularies/E.36.m4a'],
            ['tiociu_text' => 'king jik', 'indonesian_text' => 'hari ini', 'audio_path' => 'audio/vocabularies/E.37.m4a'],
            ['tiociu_text' => 'ca jik', 'indonesian_text' => 'kemarin', 'audio_path' => 'audio/vocabularies/E.38.m4a'],
            ['tiociu_text' => 'no jik coi', 'indonesian_text' => 'dua hari yang lalu', 'audio_path' => 'audio/vocabularies/E.39.m4a'],
            ['tiociu_text' => 'ma jik', 'indonesian_text' => 'besok', 'audio_path' => 'audio/vocabularies/E.40.m4a'],
            ['tiociu_text' => 'ao jik', 'indonesian_text' => 'lusa', 'audio_path' => 'audio/vocabularies/E.41.m4a'],
            ['tiociu_text' => 'si jik', 'indonesian_text' => 'empat hari', 'audio_path' => 'audio/vocabularies/E.42.m4a'],
            ['tiociu_text' => 'pua mê', 'indonesian_text' => 'tengah malam', 'audio_path' => 'audio/vocabularies/E.43.m4a'],
            ['tiociu_text' => 'ca khi', 'indonesian_text' => 'pagi', 'audio_path' => 'audio/vocabularies/E.44.m4a'],
            ['tiociu_text' => 'ê kua', 'indonesian_text' => 'siang/sore', 'audio_path' => 'audio/vocabularies/E.45.m4a'],
            ['tiociu_text' => 'cik mê', 'indonesian_text' => 'malam', 'audio_path' => 'audio/vocabularies/E.46.m4a'],
            ['tiociu_text' => '[pua mê] [cap ji tiam]', 'indonesian_text' => 'jam 12 tengah malam', 'audio_path' => 'audio/vocabularies/E.47.m4a'],
            ['tiociu_text' => '[ca khi] [êk tiam] [ji cap sa hung]', 'indonesian_text' => 'jam 1.23 pagi', 'audio_path' => 'audio/vocabularies/E.48.m4a'],
            ['tiociu_text' => '[ê kua] [si tiam pua]', 'indonesian_text' => 'jam 4.30 sore', 'audio_path' => 'audio/vocabularies/E.49.m4a'],
            ['tiociu_text' => '[cik mê] [lak tiam] [si cap ngou hung]', 'indonesian_text' => 'jam 6.45 malam', 'audio_path' => 'audio/vocabularies/E.50.m4a'],
            ['tiociu_text' => 'chêk tiam cêng', 'indonesian_text' => 'tujuh jam', 'audio_path' => 'audio/vocabularies/E.51.m4a'],
            ['tiociu_text' => 'ngou cap lak hung cêng', 'indonesian_text' => 'lima puluh enam menit', 'audio_path' => 'audio/vocabularies/E.52.m4a'],
        ];
        foreach ($vocabE as $vocab) {
            Vocabulary::create(['topic_id' => $topicE->id] + $vocab);
        }

        // Topik F: Anggota Tubuh
        $topicF = Topic::where('title', 'Anggota Tubuh')->first();
        $vocabF = [
            ['tiociu_text' => 'thao', 'indonesian_text' => 'kepala', 'audio_path' => 'audio/vocabularies/F.1.m4a', 'image_path' => 'images/vocabularies/F.1.jpg'],
            ['tiociu_text' => 'mo', 'indonesian_text' => 'rambut', 'audio_path' => 'audio/vocabularies/F.2.m4a', 'image_path' => 'images/vocabularies/F.2.jpg'],
            ['tiociu_text' => 'mêng', 'indonesian_text' => 'wajah', 'audio_path' => 'audio/vocabularies/F.3.m4a', 'image_path' => 'images/vocabularies/F.3.jpg'],
            ['tiociu_text' => 'mak', 'indonesian_text' => 'mata', 'audio_path' => 'audio/vocabularies/F.4.m4a', 'image_path' => 'images/vocabularies/F.4.jpg'],
            ['tiociu_text' => 'phi', 'indonesian_text' => 'hidung', 'audio_path' => 'audio/vocabularies/F.5.m4a', 'image_path' => 'images/vocabularies/F.5.jpg'],
            ['tiociu_text' => 'chui', 'indonesian_text' => 'mulut', 'audio_path' => 'audio/vocabularies/F.6.m4a', 'image_path' => 'images/vocabularies/F.6.jpg'],
            ['tiociu_text' => 'khi', 'indonesian_text' => 'gigi', 'audio_path' => 'audio/vocabularies/F.7.m4a', 'image_path' => 'images/vocabularies/F.7.jpg'],
            ['tiociu_text' => 'cik', 'indonesian_text' => 'lidah', 'audio_path' => 'audio/vocabularies/F.8.m4a', 'image_path' => 'images/vocabularies/F.8.jpg'],
            ['tiociu_text' => 'hi', 'indonesian_text' => 'telinga', 'audio_path' => 'audio/vocabularies/F.9.m4a', 'image_path' => 'images/vocabularies/F.9.jpg'],
            ['tiociu_text' => 'am', 'indonesian_text' => 'leher', 'audio_path' => 'audio/vocabularies/F.10.m4a', 'image_path' => 'images/vocabularies/F.10.jpg'],
            ['tiociu_text' => 'koi thao', 'indonesian_text' => 'bahu', 'audio_path' => 'audio/vocabularies/F.11.m4a', 'image_path' => 'images/vocabularies/F.11.jpg'],
            ['tiociu_text' => 'hêng', 'indonesian_text' => 'dada', 'audio_path' => 'audio/vocabularies/F.12.m4a', 'image_path' => 'images/vocabularies/F.12.jpg'],
            ['tiociu_text' => 'tou', 'indonesian_text' => 'perut', 'audio_path' => 'audio/vocabularies/F.13.m4a', 'image_path' => 'images/vocabularies/F.13.jpg'],
            ['tiociu_text' => 'ka ciak', 'indonesian_text' => 'punggung', 'audio_path' => 'audio/vocabularies/F.14.m4a', 'image_path' => 'images/vocabularies/F.14.jpg'],
            ['tiociu_text' => 'chiu', 'indonesian_text' => 'tangan', 'audio_path' => 'audio/vocabularies/F.15.m4a', 'image_path' => 'images/vocabularies/F.15.jpg'],
            ['tiociu_text' => 'ceng kak', 'indonesian_text' => 'kuku', 'audio_path' => 'audio/vocabularies/F.16.m4a', 'image_path' => 'images/vocabularies/F.16.jpg'],
            ['tiociu_text' => 'kha', 'indonesian_text' => 'kaki', 'audio_path' => 'audio/vocabularies/F.17.m4a', 'image_path' => 'images/vocabularies/F.17.jpg'],
            ['tiociu_text' => 'kha thao wu', 'indonesian_text' => 'lutut', 'audio_path' => 'audio/vocabularies/F.18.m4a', 'image_path' => 'images/vocabularies/F.18.jpg'],
            ['tiociu_text' => 'phuêi', 'indonesian_text' => 'kulit', 'audio_path' => 'audio/vocabularies/F.19.m4a', 'image_path' => 'images/vocabularies/F.19.jpg'],
            ['tiociu_text' => 'huêk', 'indonesian_text' => 'darah', 'audio_path' => 'audio/vocabularies/F.20.m4a', 'image_path' => 'images/vocabularies/F.20.jpg'],
            ['tiociu_text' => 'kuk', 'indonesian_text' => 'tulang', 'audio_path' => 'audio/vocabularies/F.21.m4a', 'image_path' => 'images/vocabularies/F.21.jpg'],
            ['tiociu_text' => 'sim cang', 'indonesian_text' => 'jantung', 'audio_path' => 'audio/vocabularies/F.22.m4a', 'image_path' => 'images/vocabularies/F.22.jpg'],
            ['tiociu_text' => 'nao', 'indonesian_text' => 'otak', 'audio_path' => 'audio/vocabularies/F.23.m4a', 'image_path' => 'images/vocabularies/F.23.jpg'],
        ];
        foreach ($vocabF as $vocab) {
            Vocabulary::create(['topic_id' => $topicF->id] + $vocab);
        }

        // Topik G: Keluarga
        $topicG = Topic::where('title', 'Keluarga')->first();
        $vocabG = [
            ['tiociu_text' => 'a pak', 'indonesian_text' => 'ayah', 'audio_path' => 'audio/vocabularies/G.1.m4a'],
            ['tiociu_text' => 'a mak', 'indonesian_text' => 'ibu', 'audio_path' => 'audio/vocabularies/G.2.m4a'],
            ['tiociu_text' => 'a hia', 'indonesian_text' => 'kakak laki-laki', 'audio_path' => 'audio/vocabularies/G.3.m4a'],
            ['tiociu_text' => 'a cê', 'indonesian_text' => 'kakak perempuan', 'audio_path' => 'audio/vocabularies/G.4.m4a'],
            ['tiociu_text' => 'a ti', 'indonesian_text' => 'adik laki-laki', 'audio_path' => 'audio/vocabularies/G.5.m4a'],
            ['tiociu_text' => 'a moi', 'indonesian_text' => 'adik perempuan', 'audio_path' => 'audio/vocabularies/G.6.m4a'],
            ['tiociu_text' => 'a kong', 'indonesian_text' => 'kakek', 'audio_path' => 'audio/vocabularies/G.7.m4a'],
            ['tiociu_text' => 'a ma', 'indonesian_text' => 'nenek', 'audio_path' => 'audio/vocabularies/G.8.m4a'],
            ['tiociu_text' => 'a pêk', 'indonesian_text' => 'paman (kakak laki-laki ayah)', 'audio_path' => 'audio/vocabularies/G.9.m4a'],
            ['tiociu_text' => 'a em', 'indonesian_text' => 'bibi (istri kakak laki-laki ayah)', 'audio_path' => 'audio/vocabularies/G.10.m4a'],
            ['tiociu_text' => 'a suk', 'indonesian_text' => 'paman (adik laki-laki ayah)', 'audio_path' => 'audio/vocabularies/G.11.m4a'],
            ['tiociu_text' => 'a sim', 'indonesian_text' => 'bibi (istri adik laki-laki ayah)', 'audio_path' => 'audio/vocabularies/G.12.m4a'],
            ['tiociu_text' => 'a kou', 'indonesian_text' => 'bibi (saudari ayah)', 'audio_path' => 'audio/vocabularies/G.13.m4a'],
            ['tiociu_text' => 'a tio', 'indonesian_text' => 'paman (suami saudari ayah/ibu)', 'audio_path' => 'audio/vocabularies/G.14.m4a'],
            ['tiociu_text' => 'a ku', 'indonesian_text' => 'paman (saudara ibu)', 'audio_path' => 'audio/vocabularies/G.15.m4a'],
            ['tiociu_text' => 'a kim', 'indonesian_text' => 'bibi (istri saudara ibu)', 'audio_path' => 'audio/vocabularies/G.16.m4a'],
            ['tiociu_text' => 'a yi', 'indonesian_text' => 'bibi (saudari ibu)', 'audio_path' => 'audio/vocabularies/G.17.m4a'],
            ['tiociu_text' => 'ang', 'indonesian_text' => 'suami', 'audio_path' => 'audio/vocabularies/G.18.m4a'],
            ['tiociu_text' => 'bou', 'indonesian_text' => 'istri', 'audio_path' => 'audio/vocabularies/G.19.m4a'],
            ['tiociu_text' => 'ta pou kia', 'indonesian_text' => 'anak laki-laki', 'audio_path' => 'audio/vocabularies/G.20.m4a'],
            ['tiociu_text' => 'ca bou kia', 'indonesian_text' => 'anak perempuan', 'audio_path' => 'audio/vocabularies/G.21.m4a'],
            ['tiociu_text' => 'sung', 'indonesian_text' => 'cucu', 'audio_path' => 'audio/vocabularies/G.22.m4a'],
            ['tiociu_text' => 'kê thêng', 'indonesian_text' => 'keluarga', 'audio_path' => 'audio/vocabularies/G.23.m4a'],
        ];
        foreach ($vocabG as $vocab) {
            Vocabulary::create(['topic_id' => $topicG->id] + $vocab);
        }

        // Topik H: Rumah
        $topicH = Topic::where('title', 'Rumah')->first();
        $vocabH = [
            ['tiociu_text' => 'chu', 'indonesian_text' => 'rumah', 'audio_path' => 'audio/vocabularies/H.1.m4a', 'image_path' => 'images/vocabularies/H.1.jpg'],
            ['tiociu_text' => 'thia', 'indonesian_text' => 'ruang tamu', 'audio_path' => 'audio/vocabularies/H.2.m4a', 'image_path' => 'images/vocabularies/H.2.jpg'],
            ['tiociu_text' => 'phang kêng', 'indonesian_text' => 'kamar', 'audio_path' => 'audio/vocabularies/H.3.m4a', 'image_path' => 'images/vocabularies/H.3.jpg'],
            ['tiociu_text' => 'êk pê', 'indonesian_text' => 'kamar mandi', 'audio_path' => 'audio/vocabularies/H.4.m4a', 'image_path' => 'images/vocabularies/H.4.jpg'],
            ['tiociu_text' => 'huêi sêk', 'indonesian_text' => 'dapur', 'audio_path' => 'audio/vocabularies/H.5.m4a', 'image_path' => 'images/vocabularies/H.5.jpg'],
            ['tiociu_text' => 'êk lao', 'indonesian_text' => 'lantai satu', 'audio_path' => 'audio/vocabularies/H.6.m4a'],
            ['tiociu_text' => 'ji lao', 'indonesian_text' => 'lantai dua', 'audio_path' => 'audio/vocabularies/H.7.m4a'],
            ['tiociu_text' => 'lao têng', 'indonesian_text' => 'lantai atas', 'audio_path' => 'audio/vocabularies/H.8.m4a'],
            ['tiociu_text' => 'lao ê', 'indonesian_text' => 'lantai bawah', 'audio_path' => 'audio/vocabularies/H.9.m4a'],
            ['tiociu_text' => 'lao thui', 'indonesian_text' => 'tangga', 'audio_path' => 'audio/vocabularies/H.10.m4a', 'image_path' => 'images/vocabularies/H.10.jpg'],
            ['tiociu_text' => 'chio', 'indonesian_text' => 'dinding', 'audio_path' => 'audio/vocabularies/H.11.m4a', 'image_path' => 'images/vocabularies/H.11.jpg'],
            ['tiociu_text' => 'mung', 'indonesian_text' => 'pintu', 'audio_path' => 'audio/vocabularies/H.12.m4a', 'image_path' => 'images/vocabularies/H.12.jpg'],
            ['tiociu_text' => 'thêng mung', 'indonesian_text' => 'jendela', 'audio_path' => 'audio/vocabularies/H.13.m4a', 'image_path' => 'images/vocabularies/H.13.jpg'],
            ['tiociu_text' => 'thêng liang pou', 'indonesian_text' => 'tirai', 'audio_path' => 'audio/vocabularies/H.14.m4a', 'image_path' => 'images/vocabularies/H.14.jpg'],
            ['tiociu_text' => 'so thao', 'indonesian_text' => 'gembok', 'audio_path' => 'audio/vocabularies/H.15.m4a', 'image_path' => 'images/vocabularies/H.15.jpg'],
            ['tiociu_text' => 'so si', 'indonesian_text' => 'kunci', 'audio_path' => 'audio/vocabularies/H.16.m4a', 'image_path' => 'images/vocabularies/H.16.jpg'],
            ['tiociu_text' => 'huêi', 'indonesian_text' => 'lampu', 'audio_path' => 'audio/vocabularies/H.17.m4a', 'image_path' => 'images/vocabularies/H.17.jpg'],
            ['tiociu_text' => 'cheng', 'indonesian_text' => 'meja', 'audio_path' => 'audio/vocabularies/H.18.m4a', 'image_path' => 'images/vocabularies/H.18.jpg'],
            ['tiociu_text' => 'yi', 'indonesian_text' => 'kursi', 'audio_path' => 'audio/vocabularies/H.19.m4a', 'image_path' => 'images/vocabularies/H.19.jpg'],
            ['tiociu_text' => 'sa huak', 'indonesian_text' => 'sofa', 'audio_path' => 'audio/vocabularies/H.20.m4a', 'image_path' => 'images/vocabularies/H.20.jpg'],
            ['tiociu_text' => 'tiang si', 'indonesian_text' => 'televisi', 'audio_path' => 'audio/vocabularies/H.21.m4a', 'image_path' => 'images/vocabularies/H.21.jpg'],
            ['tiociu_text' => 'huang si', 'indonesian_text' => 'kipas angin', 'audio_path' => 'audio/vocabularies/H.22.m4a', 'image_path' => 'images/vocabularies/H.22.jpg'],
            ['tiociu_text' => 'nê khi', 'indonesian_text' => 'AC', 'audio_path' => 'audio/vocabularies/H.23.m4a', 'image_path' => 'images/vocabularies/H.23.jpg'],
            ['tiociu_text' => 'phou', 'indonesian_text' => 'kasur', 'audio_path' => 'audio/vocabularies/H.24.m4a', 'image_path' => 'images/vocabularies/H.24.jpg'],
            ['tiociu_text' => 'ti lam pou', 'indonesian_text' => 'seprai', 'audio_path' => 'audio/vocabularies/H.25.m4a', 'image_path' => 'images/vocabularies/H.25.jpg'],
            ['tiociu_text' => 'cing thao', 'indonesian_text' => 'bantal', 'audio_path' => 'audio/vocabularies/H.26.m4a', 'image_path' => 'images/vocabularies/H.26.jpg'],
            ['tiociu_text' => 'phuêi', 'indonesian_text' => 'selimut', 'audio_path' => 'audio/vocabularies/H.27.m4a', 'image_path' => 'images/vocabularies/H.27.jpg'],
            ['tiociu_text' => 'seng tu', 'indonesian_text' => 'kulkas', 'audio_path' => 'audio/vocabularies/H.28.m4a', 'image_path' => 'images/vocabularies/H.28.jpg'],
            ['tiociu_text' => 'uêi', 'indonesian_text' => 'panci', 'audio_path' => 'audio/vocabularies/H.29.m4a', 'image_path' => 'images/vocabularies/H.29.jpg'],
            ['tiociu_text' => 'pua', 'indonesian_text' => 'piring', 'audio_path' => 'audio/vocabularies/H.30.m4a', 'image_path' => 'images/vocabularies/H.30.jpg'],
            ['tiociu_text' => 'ua', 'indonesian_text' => 'mangkuk', 'audio_path' => 'audio/vocabularies/H.31.m4a', 'image_path' => 'images/vocabularies/H.31.jpg'],
            ['tiociu_text' => 'cêng', 'indonesian_text' => 'gelas', 'audio_path' => 'audio/vocabularies/H.32.m4a', 'image_path' => 'images/vocabularies/H.32.jpg'],
            ['tiociu_text' => 'theng si', 'indonesian_text' => 'sendok', 'audio_path' => 'audio/vocabularies/H.33.m4a', 'image_path' => 'images/vocabularies/H.33.jpg'],
            ['tiociu_text' => 'chê si', 'indonesian_text' => 'garpu', 'audio_path' => 'audio/vocabularies/H.34.m4a', 'image_path' => 'images/vocabularies/H.34.jpg'],
            ['tiociu_text' => 'te', 'indonesian_text' => 'sumpit', 'audio_path' => 'audio/vocabularies/H.35.m4a', 'image_path' => 'images/vocabularies/H.35.jpg'],
            ['tiociu_text' => 'to', 'indonesian_text' => 'pisau', 'audio_path' => 'audio/vocabularies/H.36.m4a', 'image_path' => 'images/vocabularies/H.36.jpg'],
        ];
        foreach ($vocabH as $vocab) {
            Vocabulary::create(['topic_id' => $topicH->id] + $vocab);
        }

        // Topik I: Pekerjaan
        $topicI = Topic::where('title', 'Pekerjaan')->first();
        $vocabI = [
            ['tiociu_text' => 'kang', 'indonesian_text' => 'pekerjaan', 'audio_path' => 'audio/vocabularies/I.1.m4a'],
            ['tiociu_text' => 'lao kung', 'indonesian_text' => 'dokter', 'audio_path' => 'audio/vocabularies/I.2.m4a', 'image_path' => 'images/vocabularies/I.2.jpg'],
            ['tiociu_text' => 'hu se', 'indonesian_text' => 'perawat', 'audio_path' => 'audio/vocabularies/I.3.m4a', 'image_path' => 'images/vocabularies/I.3.jpg'],
            ['tiociu_text' => 'yok ci se', 'indonesian_text' => 'apoteker', 'audio_path' => 'audio/vocabularies/I.4.m4a', 'image_path' => 'images/vocabularies/I.4.jpg'],
            ['tiociu_text' => 'ching pia', 'indonesian_text' => 'polisi', 'audio_path' => 'audio/vocabularies/I.5.m4a', 'image_path' => 'images/vocabularies/I.5.jpg'],
            ['tiociu_text' => 'lok se', 'indonesian_text' => 'pengacara', 'audio_path' => 'audio/vocabularies/I.6.m4a', 'image_path' => 'images/vocabularies/I.6.jpg'],
            ['tiociu_text' => 'cak cia', 'indonesian_text' => 'penulis', 'audio_path' => 'audio/vocabularies/I.7.m4a', 'image_path' => 'images/vocabularies/I.7.jpg'],
            ['tiociu_text' => 'ki cia', 'indonesian_text' => 'jurnalis', 'audio_path' => 'audio/vocabularies/I.8.m4a', 'image_path' => 'images/vocabularies/I.8.jpg'],
            ['tiociu_text' => 'sing sê', 'indonesian_text' => 'guru', 'audio_path' => 'audio/vocabularies/I.9.m4a', 'image_path' => 'images/vocabularies/I.9.jpg'],
            ['tiociu_text' => 'co chang nang', 'indonesian_text' => 'petani', 'audio_path' => 'audio/vocabularies/I.10.m4a', 'image_path' => 'images/vocabularies/I.10.jpg'],
            ['tiociu_text' => 'he ming', 'indonesian_text' => 'melayan', 'audio_path' => 'audio/vocabularies/I.11.m4a', 'image_path' => 'images/vocabularies/I.11.jpg'],
            ['tiociu_text' => 'huêi thao', 'indonesian_text' => 'juru masak', 'audio_path' => 'audio/vocabularies/I.12.m4a', 'image_path' => 'images/vocabularies/I.12.jpg'],
            ['tiociu_text' => 'chia hu', 'indonesian_text' => 'sopir', 'audio_path' => 'audio/vocabularies/I.13.m4a', 'image_path' => 'images/vocabularies/I.13.jpg'],
            ['tiociu_text' => 'puêi ki se', 'indonesian_text' => 'pilot', 'audio_path' => 'audio/vocabularies/I.14.m4a', 'image_path' => 'images/vocabularies/I.14.jpg'],
            ['tiociu_text' => 'kang thia se', 'indonesian_text' => 'insinyur', 'audio_path' => 'audio/vocabularies/I.15.m4a', 'image_path' => 'images/vocabularies/I.15.jpg'],
            ['tiociu_text' => 'sêng li nang', 'indonesian_text' => 'pengusaha', 'audio_path' => 'audio/vocabularies/I.16.m4a', 'image_path' => 'images/vocabularies/I.16.jpg'],
            ['tiociu_text' => 'kang nang', 'indonesian_text' => 'karyawan', 'audio_path' => 'audio/vocabularies/I.17.m4a', 'image_path' => 'images/vocabularies/I.17.jpg'],
            ['tiociu_text' => 'co kang', 'indonesian_text' => 'bekerja', 'audio_path' => 'audio/vocabularies/I.18.m4a'],
        ];
        foreach ($vocabI as $vocab) {
            Vocabulary::create(['topic_id' => $topicI->id] + $vocab);
        }

        // Topik J: Kata Sifat Umum
        $topicJ = Topic::where('title', 'Kata Sifat Umum')->first();
        $vocabJ = [
            ['tiociu_text' => 'ho', 'indonesian_text' => 'baik', 'audio_path' => 'audio/vocabularies/J.1.m4a', 'image_path' => 'images/vocabularies/J.1.jpg'],
            ['tiociu_text' => 'mo', 'indonesian_text' => 'buruk', 'audio_path' => 'audio/vocabularies/J.2.m4a', 'image_path' => 'images/vocabularies/J.2.jpg'],
            ['tiociu_text' => 'tua', 'indonesian_text' => 'besar', 'audio_path' => 'audio/vocabularies/J.3.m4a', 'image_path' => 'images/vocabularies/J.3.jpg'],
            ['tiociu_text' => 'soi', 'indonesian_text' => 'kecil', 'audio_path' => 'audio/vocabularies/J.4.m4a', 'image_path' => 'images/vocabularies/J.4.jpg'],
            ['tiociu_text' => 'teng', 'indonesian_text' => 'panjang', 'audio_path' => 'audio/vocabularies/J.5.m4a', 'image_path' => 'images/vocabularies/J.5.jpg'],
            ['tiociu_text' => 'to', 'indonesian_text' => 'pendek', 'audio_path' => 'audio/vocabularies/J.6.m4a', 'image_path' => 'images/vocabularies/J.6.jpg'],
            ['tiociu_text' => 'coi', 'indonesian_text' => 'banyak', 'audio_path' => 'audio/vocabularies/J.7.m4a', 'image_path' => 'images/vocabularies/J.7.jpg'],
            ['tiociu_text' => 'cio', 'indonesian_text' => 'sedikit', 'audio_path' => 'audio/vocabularies/J.8.m4a', 'image_path' => 'images/vocabularies/J.8.jpg'],
            ['tiociu_text' => 'phi', 'indonesian_text' => 'murah', 'audio_path' => 'audio/vocabularies/J.9.m4a', 'image_path' => 'images/vocabularies/J.9.jpg'],
            ['tiociu_text' => 'kui', 'indonesian_text' => 'mahal', 'audio_path' => 'audio/vocabularies/J.10.m4a', 'image_path' => 'images/vocabularies/J.10.jpg'],
            ['tiociu_text' => 'juak', 'indonesian_text' => 'panas', 'audio_path' => 'audio/vocabularies/J.11.m4a', 'image_path' => 'images/vocabularies/J.11.jpg'],
            ['tiociu_text' => 'ngang', 'indonesian_text' => 'dingin', 'audio_path' => 'audio/vocabularies/J.12.m4a', 'image_path' => 'images/vocabularies/J.12.jpg'],
            ['tiociu_text' => 'mê', 'indonesian_text' => 'cepat', 'audio_path' => 'audio/vocabularies/J.13.m4a', 'image_path' => 'images/vocabularies/J.13.jpg'],
            ['tiociu_text' => 'mang', 'indonesian_text' => 'lambat', 'audio_path' => 'audio/vocabularies/J.14.m4a', 'image_path' => 'images/vocabularies/J.14.jpg'],
            ['tiociu_text' => 'keng', 'indonesian_text' => 'dekat', 'audio_path' => 'audio/vocabularies/J.15.m4a', 'image_path' => 'images/vocabularies/J.15.jpg'],
            ['tiociu_text' => 'hng', 'indonesian_text' => 'jauh', 'audio_path' => 'audio/vocabularies/J.16.m4a', 'image_path' => 'images/vocabularies/J.16.jpg'],
            ['tiociu_text' => 'sêng', 'indonesian_text' => 'baru', 'audio_path' => 'audio/vocabularies/J.17.m4a', 'image_path' => 'images/vocabularies/J.17.jpg'],
            ['tiociu_text' => 'lao', 'indonesian_text' => 'lama', 'audio_path' => 'audio/vocabularies/J.18.m4a', 'image_path' => 'images/vocabularies/J.18.jpg'],
            ['tiociu_text' => 'suak', 'indonesian_text' => 'tampan', 'audio_path' => 'audio/vocabularies/J.19.m4a', 'image_path' => 'images/vocabularies/J.19.jpg'],
            ['tiociu_text' => 'ngia', 'indonesian_text' => 'cantik', 'audio_path' => 'audio/vocabularies/J.20.m4a', 'image_path' => 'images/vocabularies/J.20.jpg'],
            ['tiociu_text' => 'bai', 'indonesian_text' => 'jelek', 'audio_path' => 'audio/vocabularies/J.21.m4a', 'image_path' => 'images/vocabularies/J.21.jpg'],
            ['tiociu_text' => 'chêng khik', 'indonesian_text' => 'bersih', 'audio_path' => 'audio/vocabularies/J.22.m4a', 'image_path' => 'images/vocabularies/J.22.jpg'],
            ['tiociu_text' => 'lak tak', 'indonesian_text' => 'kotor', 'audio_path' => 'audio/vocabularies/J.23.m4a', 'image_path' => 'images/vocabularies/J.23.jpg'],
            ['tiociu_text' => 'hua hi', 'indonesian_text' => 'senang', 'audio_path' => 'audio/vocabularies/J.24.m4a', 'image_path' => 'images/vocabularies/J.24.jpg'],
            ['tiociu_text' => 'hêk', 'indonesian_text' => 'lelah', 'audio_path' => 'audio/vocabularies/J.25.m4a', 'image_path' => 'images/vocabularies/J.25.jpg'],
            ['tiociu_text' => 'thia', 'indonesian_text' => 'sakit', 'audio_path' => 'audio/vocabularies/J.26.m4a', 'image_path' => 'images/vocabularies/J.26.jpg'],
        ];
        foreach ($vocabJ as $vocab) {
            Vocabulary::create(['topic_id' => $topicJ->id] + $vocab);
        }

        // Topik K: Warna
        $topicK = Topic::where('title', 'Warna')->first();
        $vocabK = [
            ['tiociu_text' => 'sêk', 'indonesian_text' => 'warna', 'audio_path' => 'audio/vocabularies/K.1.m4a'],
            ['tiociu_text' => 'ou sêk', 'indonesian_text' => 'warna hitam', 'audio_path' => 'audio/vocabularies/K.2.m4a', 'image_path' => 'images/vocabularies/K.2.jpg'],
            ['tiociu_text' => 'pêk sêk', 'indonesian_text' => 'warna putih', 'audio_path' => 'audio/vocabularies/K.3.m4a', 'image_path' => 'images/vocabularies/K.3.jpg'],
            ['tiociu_text' => 'ang sêk', 'indonesian_text' => 'warna merah', 'audio_path' => 'audio/vocabularies/K.4.m4a', 'image_path' => 'images/vocabularies/K.4.jpg'],
            ['tiociu_text' => 'nam sêk', 'indonesian_text' => 'warna biru', 'audio_path' => 'audio/vocabularies/K.5.m4a', 'image_path' => 'images/vocabularies/K.5.jpg'],
            ['tiociu_text' => 'ng sêk', 'indonesian_text' => 'warna kuning', 'audio_path' => 'audio/vocabularies/K.6.m4a', 'image_path' => 'images/vocabularies/K.6.jpg'],
            ['tiociu_text' => 'chê sêk', 'indonesian_text' => 'warna hijau', 'audio_path' => 'audio/vocabularies/K.7.m4a', 'image_path' => 'images/vocabularies/K.7.jpg'],
            ['tiociu_text' => 'kio huêi sêk', 'indonesian_text' => 'warna ungu', 'audio_path' => 'audio/vocabularies/K.8.m4a', 'image_path' => 'images/vocabularies/K.8.jpg'],
            ['tiociu_text' => 'huêi hu sêk', 'indonesian_text' => 'warna abu-abu', 'audio_path' => 'audio/vocabularies/K.9.m4a', 'image_path' => 'images/vocabularies/K.9.jpg'],
            ['tiociu_text' => 'chiang ang sêk', 'indonesian_text' => 'warna pink', 'audio_path' => 'audio/vocabularies/K.10.m4a', 'image_path' => 'images/vocabularies/K.10.jpg'],
            ['tiociu_text' => 'kim sêk', 'indonesian_text' => 'warna emas', 'audio_path' => 'audio/vocabularies/K.11.m4a', 'image_path' => 'images/vocabularies/K.11.jpg'],
        ];
        foreach ($vocabK as $vocab) {
            Vocabulary::create(['topic_id' => $topicK->id] + $vocab);
        }

        // Topik L: Hewan
        $topicL = Topic::where('title', 'Hewan')->first();
        $vocabL = [
            ['tiociu_text' => 'ngiao', 'indonesian_text' => 'kucing', 'audio_path' => 'audio/vocabularies/L.1.m4a', 'image_path' => 'images/vocabularies/L.1.jpg'],
            ['tiociu_text' => 'kao', 'indonesian_text' => 'anjing', 'audio_path' => 'audio/vocabularies/L.2.m4a', 'image_path' => 'images/vocabularies/L.2.jpg'],
            ['tiociu_text' => 'ngiao che', 'indonesian_text' => 'tikus', 'audio_path' => 'audio/vocabularies/L.3.m4a', 'image_path' => 'images/vocabularies/L.3.jpg'],
            ['tiociu_text' => 'pêk thou', 'indonesian_text' => 'kelinci', 'audio_path' => 'audio/vocabularies/L.4.m4a', 'image_path' => 'images/vocabularies/L.4.jpg'],
            ['tiociu_text' => 'bê', 'indonesian_text' => 'kuda', 'audio_path' => 'audio/vocabularies/L.5.m4a', 'image_path' => 'images/vocabularies/L.5.jpg'],
            ['tiociu_text' => 'gu', 'indonesian_text' => 'sapi', 'audio_path' => 'audio/vocabularies/L.6.m4a', 'image_path' => 'images/vocabularies/L.6.jpg'],
            ['tiociu_text' => 'yo', 'indonesian_text' => 'kambing', 'audio_path' => 'audio/vocabularies/L.7.m4a', 'image_path' => 'images/vocabularies/L.7.jpg'],
            ['tiociu_text' => 'te', 'indonesian_text' => 'babi', 'audio_path' => 'audio/vocabularies/L.8.m4a', 'image_path' => 'images/vocabularies/L.8.jpg'],
            ['tiociu_text' => 'sai', 'indonesian_text' => 'singa', 'audio_path' => 'audio/vocabularies/L.9.m4a', 'image_path' => 'images/vocabularies/L.9.jpg'],
            ['tiociu_text' => 'lao hou', 'indonesian_text' => 'harimau', 'audio_path' => 'audio/vocabularies/L.10.m4a', 'image_path' => 'images/vocabularies/L.10.jpg'],
            ['tiociu_text' => 'lang', 'indonesian_text' => 'serigala', 'audio_path' => 'audio/vocabularies/L.11.m4a', 'image_path' => 'images/vocabularies/L.11.jpg'],
            ['tiociu_text' => 'têk', 'indonesian_text' => 'rusa', 'audio_path' => 'audio/vocabularies/L.12.m4a', 'image_path' => 'images/vocabularies/L.12.jpg'],
            ['tiociu_text' => 'teng am têk', 'indonesian_text' => 'jerapah', 'audio_path' => 'audio/vocabularies/L.13.m4a', 'image_path' => 'images/vocabularies/L.13.jpg'],
            ['tiociu_text' => 'chio', 'indonesian_text' => 'gajah', 'audio_path' => 'audio/vocabularies/L.14.m4a', 'image_path' => 'images/vocabularies/L.14.jpg'],
            ['tiociu_text' => 'him', 'indonesian_text' => 'beruang', 'audio_path' => 'audio/vocabularies/L.15.m4a', 'image_path' => 'images/vocabularies/L.15.jpg'],
            ['tiociu_text' => 'him ngiao', 'indonesian_text' => 'panda', 'audio_path' => 'audio/vocabularies/L.16.m4a', 'image_path' => 'images/vocabularies/L.16.jpg'],
            ['tiociu_text' => 'lao kao', 'indonesian_text' => 'monyet', 'audio_path' => 'audio/vocabularies/L.17.m4a', 'image_path' => 'images/vocabularies/L.17.jpg'],
            ['tiociu_text' => 'lok thok', 'indonesian_text' => 'unta', 'audio_path' => 'audio/vocabularies/L.18.m4a', 'image_path' => 'images/vocabularies/L.18.jpg'],
            ['tiociu_text' => 'pik po', 'indonesian_text' => 'kelelawar', 'audio_path' => 'audio/vocabularies/L.19.m4a', 'image_path' => 'images/vocabularies/L.19.jpg'],
            ['tiociu_text' => 'ciao', 'indonesian_text' => 'burung', 'audio_path' => 'audio/vocabularies/L.20.m4a', 'image_path' => 'images/vocabularies/L.20.jpg'],
            ['tiociu_text' => 'koi', 'indonesian_text' => 'ayam', 'audio_path' => 'audio/vocabularies/L.21.m4a', 'image_path' => 'images/vocabularies/L.21.jpg'],
            ['tiociu_text' => 'ak', 'indonesian_text' => 'bebek', 'audio_path' => 'audio/vocabularies/L.22.m4a', 'image_path' => 'images/vocabularies/L.22.jpg'],
            ['tiociu_text' => 'hang ku', 'indonesian_text' => 'kura-kura', 'audio_path' => 'audio/vocabularies/L.23.m4a', 'image_path' => 'images/vocabularies/L.23.jpg'],
            ['tiociu_text' => 'ci lêng', 'indonesian_text' => 'cicak', 'audio_path' => 'audio/vocabularies/L.24.m4a', 'image_path' => 'images/vocabularies/L.24.jpg'],
            ['tiociu_text' => 'cua', 'indonesian_text' => 'ular', 'audio_path' => 'audio/vocabularies/L.25.m4a', 'image_path' => 'images/vocabularies/L.25.jpg'],
            ['tiociu_text' => 'ba kia', 'indonesian_text' => 'buaya', 'audio_path' => 'audio/vocabularies/L.26.m4a', 'image_path' => 'images/vocabularies/L.26.jpg'],
            ['tiociu_text' => 'kak po', 'indonesian_text' => 'katak', 'audio_path' => 'audio/vocabularies/L.27.m4a', 'image_path' => 'images/vocabularies/L.27.jpg'],
            ['tiociu_text' => 'thang', 'indonesian_text' => 'cacing', 'audio_path' => 'audio/vocabularies/L.28.m4a', 'image_path' => 'images/vocabularies/L.28.jpg'],
            ['tiociu_text' => 'ti tu', 'indonesian_text' => 'laba-laba', 'audio_path' => 'audio/vocabularies/L.29.m4a', 'image_path' => 'images/vocabularies/L.29.jpg'],
            ['tiociu_text' => 'ka cuak', 'indonesian_text' => 'kecoak', 'audio_path' => 'audio/vocabularies/L.30.m4a', 'image_path' => 'images/vocabularies/L.30.jpg'],
            ['tiociu_text' => 'mang', 'indonesian_text' => 'nyamuk', 'audio_path' => 'audio/vocabularies/L.31.m4a', 'image_path' => 'images/vocabularies/L.31.jpg'],
            ['tiociu_text' => 'hou sêng', 'indonesian_text' => 'lalat', 'audio_path' => 'audio/vocabularies/L.32.m4a', 'image_path' => 'images/vocabularies/L.32.jpg'],
            ['tiociu_text' => 'bik phang', 'indonesian_text' => 'lebah', 'audio_path' => 'audio/vocabularies/L.33.m4a', 'image_path' => 'images/vocabularies/L.33.jpg'],
            ['tiociu_text' => 'buê yak', 'indonesian_text' => 'kupu-kupu', 'audio_path' => 'audio/vocabularies/L.34.m4a', 'image_path' => 'images/vocabularies/L.34.jpg'],
            ['tiociu_text' => 'he', 'indonesian_text' => 'ikan', 'audio_path' => 'audio/vocabularies/L.35.m4a', 'image_path' => 'images/vocabularies/L.35.jpg'],
            ['tiociu_text' => 'jiu he', 'indonesian_text' => 'cumi-cumi', 'audio_path' => 'audio/vocabularies/L.36.m4a', 'image_path' => 'images/vocabularies/L.36.jpg'],
            ['tiociu_text' => 'bak tao', 'indonesian_text' => 'gurita', 'audio_path' => 'audio/vocabularies/L.37.m4a', 'image_path' => 'images/vocabularies/L.37.jpg'],
            ['tiociu_text' => 'hê', 'indonesian_text' => 'udang', 'audio_path' => 'audio/vocabularies/L.38.m4a', 'image_path' => 'images/vocabularies/L.38.jpg'],
            ['tiociu_text' => 'hoi', 'indonesian_text' => 'kepiting', 'audio_path' => 'audio/vocabularies/L.39.m4a', 'image_path' => 'images/vocabularies/L.39.jpg'],
        ];
        foreach ($vocabL as $vocab) {
            Vocabulary::create(['topic_id' => $topicL->id] + $vocab);
        }

        // Topik M: Makanan & Minuman
        $topicM = Topic::where('title', 'Makanan & Minuman')->first();
        $vocabM = [
            ['tiociu_text' => 'bi', 'indonesian_text' => 'beras', 'audio_path' => 'audio/vocabularies/M.1.m4a', 'image_path' => 'images/vocabularies/M.1.jpg'],
            ['tiociu_text' => 'peng', 'indonesian_text' => 'nasi', 'audio_path' => 'audio/vocabularies/M.2.m4a', 'image_path' => 'images/vocabularies/M.2.jpg'],
            ['tiociu_text' => 'muêi', 'indonesian_text' => 'bubur', 'audio_path' => 'audio/vocabularies/M.3.m4a', 'image_path' => 'images/vocabularies/M.3.jpg'],
            ['tiociu_text' => 'mi', 'indonesian_text' => 'mi', 'audio_path' => 'audio/vocabularies/M.4.m4a', 'image_path' => 'images/vocabularies/M.4.jpg'],
            ['tiociu_text' => 'lo ti', 'indonesian_text' => 'roti', 'audio_path' => 'audio/vocabularies/M.5.m4a', 'image_path' => 'images/vocabularies/M.5.jpg'],
            ['tiociu_text' => 'koi bak', 'indonesian_text' => 'daging ayam', 'audio_path' => 'audio/vocabularies/M.6.m4a', 'image_path' => 'images/vocabularies/M.6.jpg'],
            ['tiociu_text' => 'ak bak', 'indonesian_text' => 'daging bebek', 'audio_path' => 'audio/vocabularies/M.7.m4a', 'image_path' => 'images/vocabularies/M.7.jpg'],
            ['tiociu_text' => 'gu bak', 'indonesian_text' => 'daging sapi', 'audio_path' => 'audio/vocabularies/M.8.m4a', 'image_path' => 'images/vocabularies/M.8.jpg'],
            ['tiociu_text' => 'yo bak', 'indonesian_text' => 'daging kambing', 'audio_path' => 'audio/vocabularies/M.9.m4a', 'image_path' => 'images/vocabularies/M.9.jpg'],
            ['tiociu_text' => 'te bak', 'indonesian_text' => 'daging babi', 'audio_path' => 'audio/vocabularies/M.10.m4a', 'image_path' => 'images/vocabularies/M.10.jpg'],
            ['tiociu_text' => 'hai chi', 'indonesian_text' => 'makanan laut', 'audio_path' => 'audio/vocabularies/M.11.m4a', 'image_path' => 'images/vocabularies/M.11.jpg'],
            ['tiociu_text' => 'neng', 'indonesian_text' => 'telur', 'audio_path' => 'audio/vocabularies/M.12.m4a', 'image_path' => 'images/vocabularies/M.12.jpg'],
            ['tiociu_text' => 'chai', 'indonesian_text' => 'sayur', 'audio_path' => 'audio/vocabularies/M.13.m4a', 'image_path' => 'images/vocabularies/M.13.jpg'],
            ['tiociu_text' => 'chê kuê', 'indonesian_text' => 'buah', 'audio_path' => 'audio/vocabularies/M.14.m4a', 'image_path' => 'images/vocabularies/M.14.jpg'],
            ['tiociu_text' => 'yam', 'indonesian_text' => 'garam', 'audio_path' => 'audio/vocabularies/M.15.m4a', 'image_path' => 'images/vocabularies/M.15.jpg'],
            ['tiociu_text' => 'theng', 'indonesian_text' => 'gula', 'audio_path' => 'audio/vocabularies/M.16.m4a', 'image_path' => 'images/vocabularies/M.16.jpg'],
            ['tiociu_text' => 'cui', 'indonesian_text' => 'air', 'audio_path' => 'audio/vocabularies/M.17.m4a', 'image_path' => 'images/vocabularies/M.17.jpg'],
            ['tiociu_text' => 'tê', 'indonesian_text' => 'teh', 'audio_path' => 'audio/vocabularies/M.18.m4a', 'image_path' => 'images/vocabularies/M.18.jpg'],
            ['tiociu_text' => 'ko pi', 'indonesian_text' => 'kopi', 'audio_path' => 'audio/vocabularies/M.19.m4a', 'image_path' => 'images/vocabularies/M.19.jpg'],
            ['tiociu_text' => 'ni', 'indonesian_text' => 'susu', 'audio_path' => 'audio/vocabularies/M.20.m4a', 'image_path' => 'images/vocabularies/M.20.jpg'],
            ['tiociu_text' => 'ciu', 'indonesian_text' => 'minuman beralkohol', 'audio_path' => 'audio/vocabularies/M.21.m4a', 'image_path' => 'images/vocabularies/M.21.jpg'],
            ['tiociu_text' => 'ciak', 'indonesian_text' => 'makan/minum', 'audio_path' => 'audio/vocabularies/M.22.m4a', 'image_path' => 'images/vocabularies/M.22.jpg'],
            ['tiociu_text' => 'ho ciak', 'indonesian_text' => 'enak', 'audio_path' => 'audio/vocabularies/M.23.m4a', 'image_path' => 'images/vocabularies/M.23.jpg'],
            ['tiociu_text' => 'mo ciak', 'indonesian_text' => 'tidak enak', 'audio_path' => 'audio/vocabularies/M.24.m4a', 'image_path' => 'images/vocabularies/M.24.jpg'],
            ['tiociu_text' => 'tiam', 'indonesian_text' => 'manis', 'audio_path' => 'audio/vocabularies/M.25.m4a'],
            ['tiociu_text' => 'kiam', 'indonesian_text' => 'asin', 'audio_path' => 'audio/vocabularies/M.26.m4a'],
            ['tiociu_text' => 'sem', 'indonesian_text' => 'asam', 'audio_path' => 'audio/vocabularies/M.27.m4a'],
            ['tiociu_text' => 'hiam', 'indonesian_text' => 'pedas', 'audio_path' => 'audio/vocabularies/M.28.m4a'],
            ['tiociu_text' => 'khou', 'indonesian_text' => 'pahit', 'audio_path' => 'audio/vocabularies/M.29.m4a'],
            ['tiociu_text' => 'pêk cia', 'indonesian_text' => 'tawar', 'audio_path' => 'audio/vocabularies/M.30.m4a'],
            ['tiociu_text' => 'tou khung', 'indonesian_text' => 'lapar', 'audio_path' => 'audio/vocabularies/M.31.m4a'],
            ['tiociu_text' => 'tou pa', 'indonesian_text' => 'kenyang', 'audio_path' => 'audio/vocabularies/M.32.m4a'],
        ];
        foreach ($vocabM as $vocab) {
            Vocabulary::create(['topic_id' => $topicM->id] + $vocab);
        }

        // Topik N: Sayuran
        $topicN = Topic::where('title', 'Sayuran')->first();
        $vocabN = [
            ['tiociu_text' => 'phang chai', 'indonesian_text' => 'selada', 'audio_path' => 'audio/vocabularies/N.1.m4a', 'image_path' => 'images/vocabularies/N.1.jpg'],
            ['tiociu_text' => 'ko lê chai', 'indonesian_text' => 'kol', 'audio_path' => 'audio/vocabularies/N.2.m4a', 'image_path' => 'images/vocabularies/N.2.jpg'],
            ['tiociu_text' => 'pêk chai', 'indonesian_text' => 'sawi putih', 'audio_path' => 'audio/vocabularies/N.3.m4a', 'image_path' => 'images/vocabularies/N.3.jpg'],
            ['tiociu_text' => 'hai chai', 'indonesian_text' => 'bayam', 'audio_path' => 'audio/vocabularies/N.4.m4a', 'image_path' => 'images/vocabularies/N.4.jpg'],
            ['tiociu_text' => 'êng chai', 'indonesian_text' => 'kangkung', 'audio_path' => 'audio/vocabularies/N.5.m4a', 'image_path' => 'images/vocabularies/N.5.jpg'],
            ['tiociu_text' => 'chai huêi', 'indonesian_text' => 'kembang kol', 'audio_path' => 'audio/vocabularies/N.6.m4a', 'image_path' => 'images/vocabularies/N.6.jpg'],
            ['tiociu_text' => 'chê chai huêi', 'indonesian_text' => 'brokoli', 'audio_path' => 'audio/vocabularies/N.7.m4a', 'image_path' => 'images/vocabularies/N.7.jpg'],
            ['tiociu_text' => 'kang tang', 'indonesian_text' => 'kentang', 'audio_path' => 'audio/vocabularies/N.8.m4a', 'image_path' => 'images/vocabularies/N.8.jpg'],
            ['tiociu_text' => 'ang chai thao', 'indonesian_text' => 'wortel', 'audio_path' => 'audio/vocabularies/N.9.m4a', 'image_path' => 'images/vocabularies/N.9.jpg'],
            ['tiociu_text' => 'jia gong', 'indonesian_text' => 'jagung', 'audio_path' => 'audio/vocabularies/N.10.m4a', 'image_path' => 'images/vocabularies/N.10.jpg'],
            ['tiociu_text' => 'tao', 'indonesian_text' => 'kacang', 'audio_path' => 'audio/vocabularies/N.11.m4a', 'image_path' => 'images/vocabularies/N.11.jpg'],
            ['tiociu_text' => 'tao gê', 'indonesian_text' => 'tauge', 'audio_path' => 'audio/vocabularies/N.12.m4a', 'image_path' => 'images/vocabularies/N.12.jpg'],
            ['tiociu_text' => 'chai tao', 'indonesian_text' => 'kacang panjang', 'audio_path' => 'audio/vocabularies/N.13.m4a', 'image_path' => 'images/vocabularies/N.13.jpg'],
            ['tiociu_text' => 'kio', 'indonesian_text' => 'terong', 'audio_path' => 'audio/vocabularies/N.14.m4a', 'image_path' => 'images/vocabularies/N.14.jpg'],
            ['tiociu_text' => 'ang mo kio', 'indonesian_text' => 'tomat', 'audio_path' => 'audio/vocabularies/N.15.m4a', 'image_path' => 'images/vocabularies/N.15.jpg'],
            ['tiociu_text' => 'hiam cio', 'indonesian_text' => 'cabai', 'audio_path' => 'audio/vocabularies/N.16.m4a', 'image_path' => 'images/vocabularies/N.16.jpg'],
            ['tiociu_text' => 'seng thao', 'indonesian_text' => 'bawang putih', 'audio_path' => 'audio/vocabularies/N.17.m4a', 'image_path' => 'images/vocabularies/N.17.jpg'],
            ['tiociu_text' => 'chang kia', 'indonesian_text' => 'bawang merah', 'audio_path' => 'audio/vocabularies/N.18.m4a', 'image_path' => 'images/vocabularies/N.18.jpg'],
            ['tiociu_text' => 'huang chang', 'indonesian_text' => 'bawang bombai', 'audio_path' => 'audio/vocabularies/N.19.m4a', 'image_path' => 'images/vocabularies/N.19.jpg'],
            ['tiociu_text' => 'chang', 'indonesian_text' => 'daun bawang', 'audio_path' => 'audio/vocabularies/N.20.m4a', 'image_path' => 'images/vocabularies/N.20.jpg'],
        ];
        foreach ($vocabN as $vocab) {
            Vocabulary::create(['topic_id' => $topicN->id] + $vocab);
        }

        // Topik O: Buah-Buahan
        $topicO = Topic::where('title', 'Buah-Buahan')->first();
        $vocabO = [
            ['tiociu_text' => 'phêng kuê', 'indonesian_text' => 'apel', 'audio_path' => 'audio/vocabularies/O.1.m4a', 'image_path' => 'images/vocabularies/O.1.jpg'],
            ['tiociu_text' => 'lai', 'indonesian_text' => 'pir', 'audio_path' => 'audio/vocabularies/O.2.m4a', 'image_path' => 'images/vocabularies/O.2.jpg'],
            ['tiociu_text' => 'ka', 'indonesian_text' => 'jeruk', 'audio_path' => 'audio/vocabularies/O.3.m4a', 'image_path' => 'images/vocabularies/O.3.jpg'],
            ['tiociu_text' => 'seng ka', 'indonesian_text' => 'jeruk nipis', 'audio_path' => 'audio/vocabularies/O.4.m4a', 'image_path' => 'images/vocabularies/O.4.jpg'],
            ['tiociu_text' => 'lêng mong', 'indonesian_text' => 'lemon', 'audio_path' => 'audio/vocabularies/O.5.m4a', 'image_path' => 'images/vocabularies/O.5.jpg'],
            ['tiociu_text' => 'ang lai', 'indonesian_text' => 'nanas', 'audio_path' => 'audio/vocabularies/O.6.m4a', 'image_path' => 'images/vocabularies/O.6.jpg'],
            ['tiociu_text' => 'king cio', 'indonesian_text' => 'pisang', 'audio_path' => 'audio/vocabularies/O.7.m4a', 'image_path' => 'images/vocabularies/O.7.jpg'],
            ['tiociu_text' => 'suai', 'indonesian_text' => 'mangga', 'audio_path' => 'audio/vocabularies/O.8.m4a', 'image_path' => 'images/vocabularies/O.8.jpg'],
            ['tiociu_text' => 'ni kuêi', 'indonesian_text' => 'pepaya', 'audio_path' => 'audio/vocabularies/O.9.m4a', 'image_path' => 'images/vocabularies/O.9.jpg'],
            ['tiociu_text' => 'phu tho', 'indonesian_text' => 'anggur', 'audio_path' => 'audio/vocabularies/O.10.m4a', 'image_path' => 'images/vocabularies/O.10.jpg'],
            ['tiociu_text' => 'chao buê', 'indonesian_text' => 'stroberi', 'audio_path' => 'audio/vocabularies/O.11.m4a', 'image_path' => 'images/vocabularies/O.11.jpg'],
            ['tiociu_text' => 'si kuêi', 'indonesian_text' => 'semangka', 'audio_path' => 'audio/vocabularies/O.12.m4a', 'image_path' => 'images/vocabularies/O.12.jpg'],
            ['tiociu_text' => 'ya', 'indonesian_text' => 'kelapa', 'audio_path' => 'audio/vocabularies/O.13.m4a', 'image_path' => 'images/vocabularies/O.13.jpg'],
            ['tiociu_text' => 'liu liang', 'indonesian_text' => 'durian', 'audio_path' => 'audio/vocabularies/O.14.m4a', 'image_path' => 'images/vocabularies/O.14.jpg'],
        ];
        foreach ($vocabO as $vocab) {
            Vocabulary::create(['topic_id' => $topicO->id] + $vocab);
        }

        // Topik P: Kata Kerja Dasar
        $topicP = Topic::where('title', 'Kata Kerja Dasar')->first();
        $vocabP = [
            ['tiociu_text' => 'lai', 'indonesian_text' => 'datang', 'audio_path' => 'audio/vocabularies/P.1.m4a', 'image_path' => 'images/vocabularies/P.1.jpg'],
            ['tiociu_text' => 'khe', 'indonesian_text' => 'pergi', 'audio_path' => 'audio/vocabularies/P.2.m4a', 'image_path' => 'images/vocabularies/P.2.jpg'],
            ['tiociu_text' => 'teng', 'indonesian_text' => 'pulang', 'audio_path' => 'audio/vocabularies/P.3.m4a', 'image_path' => 'images/vocabularies/P.3.jpg'],
            ['tiociu_text' => 'thoi', 'indonesian_text' => 'melihat', 'audio_path' => 'audio/vocabularies/P.4.m4a', 'image_path' => 'images/vocabularies/P.4.jpg'],
            ['tiociu_text' => 'thak', 'indonesian_text' => 'membaca', 'audio_path' => 'audio/vocabularies/P.5.m4a', 'image_path' => 'images/vocabularies/P.5.jpg'],
            ['tiociu_text' => 'thia', 'indonesian_text' => 'mendengar', 'audio_path' => 'audio/vocabularies/P.6.m4a', 'image_path' => 'images/vocabularies/P.6.jpg'],
            ['tiociu_text' => 'ta', 'indonesian_text' => 'berbicara', 'audio_path' => 'audio/vocabularies/P.7.m4a', 'image_path' => 'images/vocabularies/P.7.jpg'],
            ['tiociu_text' => 'mung', 'indonesian_text' => 'bertanya', 'audio_path' => 'audio/vocabularies/P.8.m4a', 'image_path' => 'images/vocabularies/P.8.jpg'],
            ['tiociu_text' => 'êng', 'indonesian_text' => 'menjawab', 'audio_path' => 'audio/vocabularies/P.9.m4a', 'image_path' => 'images/vocabularies/P.9.jpg'],
            ['tiociu_text' => 'chio', 'indonesian_text' => 'tertawa', 'audio_path' => 'audio/vocabularies/P.10.m4a', 'image_path' => 'images/vocabularies/P.10.jpg'],
            ['tiociu_text' => 'khao', 'indonesian_text' => 'menangis', 'audio_path' => 'audio/vocabularies/P.11.m4a', 'image_path' => 'images/vocabularies/P.11.jpg'],
            ['tiociu_text' => 'sia', 'indonesian_text' => 'menulis', 'audio_path' => 'audio/vocabularies/P.12.m4a', 'image_path' => 'images/vocabularies/P.12.jpg'],
            ['tiociu_text' => 'co', 'indonesian_text' => 'membuat/mengerjakan', 'audio_path' => 'audio/vocabularies/P.13.m4a', 'image_path' => 'images/vocabularies/P.13.jpg'],
            ['tiociu_text' => 'uk', 'indonesian_text' => 'tidur', 'audio_path' => 'audio/vocabularies/P.14.m4a', 'image_path' => 'images/vocabularies/P.14.jpg'],
            ['tiociu_text' => 'cao chê', 'indonesian_text' => 'bangun tidur', 'audio_path' => 'audio/vocabularies/P.15.m4a', 'image_path' => 'images/vocabularies/P.15.jpg'],
            ['tiociu_text' => 'ok ce', 'indonesian_text' => 'belajar', 'audio_path' => 'audio/vocabularies/P.16.m4a', 'image_path' => 'images/vocabularies/P.16.jpg'],
            ['tiociu_text' => 'seng', 'indonesian_text' => 'bermain', 'audio_path' => 'audio/vocabularies/P.17.m4a', 'image_path' => 'images/vocabularies/P.17.jpg'],
            ['tiociu_text' => 'cang êk', 'indonesian_text' => 'mandi', 'audio_path' => 'audio/vocabularies/P.18.m4a', 'image_path' => 'images/vocabularies/P.18.jpg'],
            ['tiociu_text' => 'chêng sa', 'indonesian_text' => 'berpakaian', 'audio_path' => 'audio/vocabularies/P.19.m4a', 'image_path' => 'images/vocabularies/P.19.jpg'],
            ['tiociu_text' => 'buêi', 'indonesian_text' => 'membeli', 'audio_path' => 'audio/vocabularies/P.20.m4a', 'image_path' => 'images/vocabularies/P.20.jpg'],
            ['tiociu_text' => 'buêi', 'indonesian_text' => 'menjual', 'audio_path' => 'audio/vocabularies/P.21.m4a', 'image_path' => 'images/vocabularies/P.21.jpg'],
            ['tiociu_text' => 'khok', 'indonesian_text' => 'memberi', 'audio_path' => 'audio/vocabularies/P.22.m4a', 'image_path' => 'images/vocabularies/P.22.jpg'],
            ['tiociu_text' => 'khiok', 'indonesian_text' => 'mengambil', 'audio_path' => 'audio/vocabularies/P.23.m4a', 'image_path' => 'images/vocabularies/P.23.jpg'],
            ['tiociu_text' => 'pang', 'indonesian_text' => 'meletakkan', 'audio_path' => 'audio/vocabularies/P.24.m4a', 'image_path' => 'images/vocabularies/P.24.jpg'],
            ['tiociu_text' => 'yong', 'indonesian_text' => 'menggunakan', 'audio_path' => 'audio/vocabularies/P.25.m4a', 'image_path' => 'images/vocabularies/P.25.jpg'],
            ['tiociu_text' => 'sio hu', 'indonesian_text' => 'membantu', 'audio_path' => 'audio/vocabularies/P.26.m4a', 'image_path' => 'images/vocabularies/P.26.jpg'],
            ['tiociu_text' => 'chuêi', 'indonesian_text' => 'mencari', 'audio_path' => 'audio/vocabularies/P.27.m4a', 'image_path' => 'images/vocabularies/P.27.jpg'],
            ['tiociu_text' => 'tang', 'indonesian_text' => 'menunggu', 'audio_path' => 'audio/vocabularies/P.28.m4a', 'image_path' => 'images/vocabularies/P.28.jpg'],
            ['tiociu_text' => 'kia', 'indonesian_text' => 'berjalan', 'audio_path' => 'audio/vocabularies/P.29.m4a', 'image_path' => 'images/vocabularies/P.29.jpg'],
            ['tiociu_text' => 'cao', 'indonesian_text' => 'berlari', 'audio_path' => 'audio/vocabularies/P.30.m4a', 'image_path' => 'images/vocabularies/P.30.jpg'],
            ['tiociu_text' => 'khia', 'indonesian_text' => 'berdiri', 'audio_path' => 'audio/vocabularies/P.31.m4a', 'image_path' => 'images/vocabularies/P.31.jpg'],
            ['tiociu_text' => 'co', 'indonesian_text' => 'duduk', 'audio_path' => 'audio/vocabularies/P.32.m4a', 'image_path' => 'images/vocabularies/P.32.jpg'],
        ];
        foreach ($vocabP as $vocab) {
            Vocabulary::create(['topic_id' => $topicP->id] + $vocab);
        }

        // Topik Q: Tempat & Arah
        $topicQ = Topic::where('title', 'Tempat & Arah')->first();
        $vocabQ = [
            ['tiociu_text' => 'ok teng', 'indonesian_text' => 'sekolah', 'audio_path' => 'audio/vocabularies/Q.1.m4a', 'image_path' => 'images/vocabularies/Q.1.jpg'],
            ['tiociu_text' => 'pa sak', 'indonesian_text' => 'pasar', 'audio_path' => 'audio/vocabularies/Q.2.m4a', 'image_path' => 'images/vocabularies/Q.2.jpg'],
            ['tiociu_text' => 'tiam', 'indonesian_text' => 'toko', 'audio_path' => 'audio/vocabularies/Q.3.m4a', 'image_path' => 'images/vocabularies/Q.3.jpg'],
            ['tiociu_text' => 'kong si', 'indonesian_text' => 'kantor', 'audio_path' => 'audio/vocabularies/Q.4.m4a', 'image_path' => 'images/vocabularies/Q.4.jpg'],
            ['tiociu_text' => 'nging hang', 'indonesian_text' => 'bank', 'audio_path' => 'audio/vocabularies/Q.5.m4a', 'image_path' => 'images/vocabularies/Q.5.jpg'],
            ['tiociu_text' => 'ciak kuang', 'indonesian_text' => 'restoran', 'audio_path' => 'audio/vocabularies/Q.6.m4a', 'image_path' => 'images/vocabularies/Q.6.jpg'],
            ['tiociu_text' => 'lao kung chu', 'indonesian_text' => 'rumah sakit', 'audio_path' => 'audio/vocabularies/Q.7.m4a', 'image_path' => 'images/vocabularies/Q.7.jpg'],
            ['tiociu_text' => 'lou', 'indonesian_text' => 'jalan', 'audio_path' => 'audio/vocabularies/Q.8.m4a', 'image_path' => 'images/vocabularies/Q.8.jpg'],
            ['tiociu_text' => 'to ...', 'indonesian_text' => 'di ...', 'audio_path' => 'audio/vocabularies/Q.9.m4a'],
            ['tiociu_text' => 'to ci ko', 'indonesian_text' => 'di sini', 'audio_path' => 'audio/vocabularies/Q.10.m4a', 'image_path' => 'images/vocabularies/Q.10.jpg'],
            ['tiociu_text' => 'to hi ko', 'indonesian_text' => 'di sana', 'audio_path' => 'audio/vocabularies/Q.11.m4a', 'image_path' => 'images/vocabularies/Q.11.jpg'],
            ['tiociu_text' => 'têng kuang', 'indonesian_text' => 'atas', 'audio_path' => 'audio/vocabularies/Q.12.m4a', 'image_path' => 'images/vocabularies/Q.12.jpg'],
            ['tiociu_text' => 'ê kha', 'indonesian_text' => 'bawah', 'audio_path' => 'audio/vocabularies/Q.13.m4a', 'image_path' => 'images/vocabularies/Q.13.jpg'],
            ['tiociu_text' => 'gua khao', 'indonesian_text' => 'luar', 'audio_path' => 'audio/vocabularies/Q.14.m4a', 'image_path' => 'images/vocabularies/Q.14.jpg'],
            ['tiociu_text' => 'lai toi', 'indonesian_text' => 'dalam', 'audio_path' => 'audio/vocabularies/Q.15.m4a', 'image_path' => 'images/vocabularies/Q.15.jpg'],
            ['tiociu_text' => 'to chiu', 'indonesian_text' => 'kiri', 'audio_path' => 'audio/vocabularies/Q.16.m4a', 'image_path' => 'images/vocabularies/Q.16.jpg'],
            ['tiociu_text' => 'cia chiu', 'indonesian_text' => 'kanan', 'audio_path' => 'audio/vocabularies/Q.17.m4a', 'image_path' => 'images/vocabularies/Q.17.jpg'],
            ['tiociu_text' => 'thao cêng', 'indonesian_text' => 'depan', 'audio_path' => 'audio/vocabularies/Q.18.m4a', 'image_path' => 'images/vocabularies/Q.18.jpg'],
            ['tiociu_text' => 'lêng tang', 'indonesian_text' => 'tengah', 'audio_path' => 'audio/vocabularies/Q.19.m4a', 'image_path' => 'images/vocabularies/Q.19.jpg'],
            ['tiociu_text' => 'ao buêi', 'indonesian_text' => 'belakang', 'audio_path' => 'audio/vocabularies/Q.20.m4a', 'image_path' => 'images/vocabularies/Q.20.jpg'],
            ['tiociu_text' => 'têk', 'indonesian_text' => 'lurus', 'audio_path' => 'audio/vocabularies/Q.21.m4a', 'image_path' => 'images/vocabularies/Q.21.jpg'],
        ];
        foreach ($vocabQ as $vocab) {
            Vocabulary::create(['topic_id' => $topicQ->id] + $vocab);
        }

        // Topik R: Transportasi
        $topicR = Topic::where('title', 'Transportasi')->first();
        $vocabR = [
            ['tiociu_text' => 'chia', 'indonesian_text' => 'mobil', 'audio_path' => 'audio/vocabularies/R.1.m4a', 'image_path' => 'images/vocabularies/R.1.jpg'],
            ['tiociu_text' => 'kha chia', 'indonesian_text' => 'sepeda', 'audio_path' => 'audio/vocabularies/R.2.m4a', 'image_path' => 'images/vocabularies/R.2.jpg'],
            ['tiociu_text' => 'mo to', 'indonesian_text' => 'sepeda motor', 'audio_path' => 'audio/vocabularies/R.3.m4a', 'image_path' => 'images/vocabularies/R.3.jpg'],
            ['tiociu_text' => 'têk si', 'indonesian_text' => 'taksi', 'audio_path' => 'audio/vocabularies/R.4.m4a', 'image_path' => 'images/vocabularies/R.4.jpg'],
            ['tiociu_text' => 'ba', 'indonesian_text' => 'bus', 'audio_path' => 'audio/vocabularies/R.5.m4a', 'image_path' => 'images/vocabularies/R.5.jpg'],
            ['tiociu_text' => 'huêi chia', 'indonesian_text' => 'kereta', 'audio_path' => 'audio/vocabularies/R.6.m4a', 'image_path' => 'images/vocabularies/R.6.jpg'],
            ['tiociu_text' => 'cung', 'indonesian_text' => 'kapal', 'audio_path' => 'audio/vocabularies/R.7.m4a', 'image_path' => 'images/vocabularies/R.7.jpg'],
            ['tiociu_text' => 'puêi ki', 'indonesian_text' => 'pesawat', 'audio_path' => 'audio/vocabularies/R.8.m4a', 'image_path' => 'images/vocabularies/R.8.jpg'],
            ['tiociu_text' => 'cung thao', 'indonesian_text' => 'pelabuhan', 'audio_path' => 'audio/vocabularies/R.9.m4a', 'image_path' => 'images/vocabularies/R.9.jpg'],
            ['tiociu_text' => 'puêi ki tio', 'indonesian_text' => 'bandara', 'audio_path' => 'audio/vocabularies/R.10.m4a', 'image_path' => 'images/vocabularies/R.10.jpg'],
        ];
        foreach ($vocabR as $vocab) {
            Vocabulary::create(['topic_id' => $topicR->id] + $vocab);
        }
    }
}
