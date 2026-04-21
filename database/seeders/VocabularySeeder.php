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
            ['tiociu_text' => 'wa', 'indonesian_text' => 'saya', 'audio_path' => 'audio/vocabularies/A.1.m4a'],
            ['tiociu_text' => 'lê', 'indonesian_text' => 'kamu', 'audio_path' => 'audio/vocabularies/A.2.m4a'],
            ['tiociu_text' => 'yi', 'indonesian_text' => 'dia', 'audio_path' => 'audio/vocabularies/A.3.m4a'],
            ['tiociu_text' => 'wa nang', 'indonesian_text' => 'kami', 'audio_path' => 'audio/vocabularies/A.4.m4a'],
            ['tiociu_text' => 'nang', 'indonesian_text' => 'kita', 'audio_path' => 'audio/vocabularies/A.5.m4a'],
            ['tiociu_text' => 'ning nang', 'indonesian_text' => 'kalian', 'audio_path' => 'audio/vocabularies/A.6.m4a'],
            ['tiociu_text' => 'yi nang', 'indonesian_text' => 'mereka', 'audio_path' => 'audio/vocabularies/A.7.m4a'],
            ['tiociu_text' => 'nang', 'indonesian_text' => 'orang', 'audio_path' => 'audio/vocabularies/A.8.m4a'],
            ['tiociu_text' => 'ka ki', 'indonesian_text' => 'diri sendiri', 'audio_path' => 'audio/vocabularies/A.9.m4a'],
            ['tiociu_text' => 'pak nang', 'indonesian_text' => 'orang lain', 'audio_path' => 'audio/vocabularies/A.10.m4a'],
            ['tiociu_text' => 'ci kai', 'indonesian_text' => 'ini', 'audio_path' => 'audio/vocabularies/A.11.m4a'],
            ['tiociu_text' => 'hi kai', 'indonesian_text' => 'itu', 'audio_path' => 'audio/vocabularies/A.12.m4a'],
        ];
        foreach ($vocabA as $vocab) {
            Vocabulary::create(['topic_id' => $topicA->id] + $vocab);
        }

        // Topik B: Salam & Ungkapan Dasar
        $topicB = Topic::where('title', 'Salam & Ungkapan Dasar')->first();
        $vocabB = [
            ['tiociu_text' => 'lê ho', 'indonesian_text' => 'Halo', 'audio_path' => 'audio/vocabularies/B.1.m4a'],
            ['tiociu_text' => 'ta ke ho', 'indonesian_text' => 'Halo semua', 'audio_path' => 'audio/vocabularies/B.2.m4a'],
            ['tiociu_text' => 'lê ciak pa boe?', 'indonesian_text' => 'Apakah kamu sudah makan?', 'audio_path' => 'audio/vocabularies/B.3.m4a'],
            ['tiociu_text' => 'wa ciak pa liao', 'indonesian_text' => 'Saya sudah makan', 'audio_path' => 'audio/vocabularies/B.4.m4a'],
            ['tiociu_text' => 'kam sia', 'indonesian_text' => 'Terima kasih', 'audio_path' => 'audio/vocabularies/B.5.m4a'],
            ['tiociu_text' => 'tui êm cu', 'indonesian_text' => 'Maaf', 'audio_path' => 'audio/vocabularies/B.6.m4a'],
            ['tiociu_text' => 'boe co ni', 'indonesian_text' => 'Tidak apa-apa', 'audio_path' => 'audio/vocabularies/B.7.m4a'],
            ['tiociu_text' => 'lê mia mik kai?', 'indonesian_text' => 'Siapa namamu?', 'audio_path' => 'audio/vocabularies/B.8.m4a'],
            ['tiociu_text' => 'wa mia ...', 'indonesian_text' => 'Nama saya ...', 'audio_path' => 'audio/vocabularies/B.9.m4a'],
            ['tiociu_text' => 'si', 'indonesian_text' => 'ya', 'audio_path' => 'audio/vocabularies/B.10.m4a'],
            ['tiociu_text' => 'êm si', 'indonesian_text' => 'tidak', 'audio_path' => 'audio/vocabularies/B.11.m4a'],
            ['tiociu_text' => 'tiok', 'indonesian_text' => 'benar', 'audio_path' => 'audio/vocabularies/B.12.m4a'],
            ['tiociu_text' => 'êm tiok', 'indonesian_text' => 'salah', 'audio_path' => 'audio/vocabularies/B.13.m4a'],
            ['tiociu_text' => 'ai', 'indonesian_text' => 'mau', 'audio_path' => 'audio/vocabularies/B.14.m4a'],
            ['tiociu_text' => 'mai', 'indonesian_text' => 'tidak mau', 'audio_path' => 'audio/vocabularies/B.15.m4a'],
            ['tiociu_text' => 'oi tek', 'indonesian_text' => 'bisa', 'audio_path' => 'audio/vocabularies/B.16.m4a'],
            ['tiociu_text' => 'boe tek', 'indonesian_text' => 'tidak bisa', 'audio_path' => 'audio/vocabularies/B.17.m4a'],
            ['tiociu_text' => 'oi sai', 'indonesian_text' => 'boleh', 'audio_path' => 'audio/vocabularies/B.18.m4a'],
            ['tiociu_text' => 'boe sai', 'indonesian_text' => 'tidak boleh', 'audio_path' => 'audio/vocabularies/B.19.m4a'],
            ['tiociu_text' => 'oi cai', 'indonesian_text' => 'mengetahui', 'audio_path' => 'audio/vocabularies/B.20.m4a'],
            ['tiociu_text' => 'êm cai', 'indonesian_text' => 'tidak tahu', 'audio_path' => 'audio/vocabularies/B.21.m4a'],
            ['tiociu_text' => 'ki tek', 'indonesian_text' => 'ingat', 'audio_path' => 'audio/vocabularies/B.22.m4a'],
            ['tiociu_text' => 'êm ki tek', 'indonesian_text' => 'lupa', 'audio_path' => 'audio/vocabularies/B.23.m4a'],
            ['tiociu_text' => 'oi tong', 'indonesian_text' => 'mengerti', 'audio_path' => 'audio/vocabularies/B.24.m4a'],
            ['tiociu_text' => 'boe tong', 'indonesian_text' => 'tidak mengerti', 'audio_path' => 'audio/vocabularies/B.25.m4a'],
            ['tiociu_text' => 'pak', 'indonesian_text' => 'kenal', 'audio_path' => 'audio/vocabularies/B.26.m4a'],
            ['tiociu_text' => 'êm pak', 'indonesian_text' => 'tidak kenal', 'audio_path' => 'audio/vocabularies/B.27.m4a'],
            ['tiociu_text' => 'wu', 'indonesian_text' => 'ada', 'audio_path' => 'audio/vocabularies/B.28.m4a'],
            ['tiociu_text' => 'bo', 'indonesian_text' => 'tidak ada', 'audio_path' => 'audio/vocabularies/B.29.m4a'],
            ['tiociu_text' => 'ho', 'indonesian_text' => 'oke', 'audio_path' => 'audio/vocabularies/B.30.m4a'],
            ['tiociu_text' => 'se jik hua hi', 'indonesian_text' => 'Selamat ulang tahun', 'audio_path' => 'audio/vocabularies/B.31.m4a'],
            ['tiociu_text' => 'sin cia ju yi', 'indonesian_text' => 'Selamat Tahun Baru Imlek', 'audio_path' => 'audio/vocabularies/B.32.m4a'],
        ];
        foreach ($vocabB as $vocab) {
            Vocabulary::create(['topic_id' => $topicB->id] + $vocab);
        }

        // Topik C: Kata Tanya
        $topicC = Topic::where('title', 'Kata Tanya')->first();
        $vocabC = [
            ['tiociu_text' => 'mik kai', 'indonesian_text' => 'apa', 'audio_path' => 'audio/vocabularies/C.1.m4a'],
            ['tiociu_text' => 'ting tiang', 'indonesian_text' => 'siapa', 'audio_path' => 'audio/vocabularies/C.2.m4a'],
            ['tiociu_text' => 'to di ko', 'indonesian_text' => 'di mana', 'audio_path' => 'audio/vocabularies/C.3.m4a'],
            ['tiociu_text' => 'tiang si', 'indonesian_text' => 'kapan', 'audio_path' => 'audio/vocabularies/C.4.m4a'],
            ['tiociu_text' => 'co ni', 'indonesian_text' => 'mengapa', 'audio_path' => 'audio/vocabularies/C.5.m4a'],
            ['tiociu_text' => 'co ni muek', 'indonesian_text' => 'bagaimana', 'audio_path' => 'audio/vocabularies/C.6.m4a'],
            ['tiociu_text' => 'diok coi', 'indonesian_text' => 'berapa', 'audio_path' => 'audio/vocabularies/C.7.m4a'],
        ];
        foreach ($vocabC as $vocab) {
            Vocabulary::create(['topic_id' => $topicC->id] + $vocab);
        }

        // Topik D: Angka & Bilangan
        $topicD = Topic::where('title', 'Angka & Bilangan')->first();
        $vocabD = [
            ['tiociu_text' => 'khang', 'indonesian_text' => '0', 'audio_path' => 'audio/vocabularies/D.1.m4a'],
            ['tiociu_text' => 'cek', 'indonesian_text' => '1', 'audio_path' => 'audio/vocabularies/D.2.m4a'],
            ['tiociu_text' => 'no', 'indonesian_text' => '2', 'audio_path' => 'audio/vocabularies/D.3.m4a'],
            ['tiociu_text' => 'sa', 'indonesian_text' => '3', 'audio_path' => 'audio/vocabularies/D.4.m4a'],
            ['tiociu_text' => 'si', 'indonesian_text' => '4', 'audio_path' => 'audio/vocabularies/D.5.m4a'],
            ['tiociu_text' => 'ngou', 'indonesian_text' => '5', 'audio_path' => 'audio/vocabularies/D.6.m4a'],
            ['tiociu_text' => 'lak', 'indonesian_text' => '6', 'audio_path' => 'audio/vocabularies/D.7.m4a'],
            ['tiociu_text' => 'chek', 'indonesian_text' => '7', 'audio_path' => 'audio/vocabularies/D.8.m4a'],
            ['tiociu_text' => 'puek', 'indonesian_text' => '8', 'audio_path' => 'audio/vocabularies/D.9.m4a'],
            ['tiociu_text' => 'kao', 'indonesian_text' => '9', 'audio_path' => 'audio/vocabularies/D.10.m4a'],
            ['tiociu_text' => 'cap', 'indonesian_text' => '10', 'audio_path' => 'audio/vocabularies/D.11.m4a'],
            ['tiociu_text' => 'cap ek', 'indonesian_text' => '11', 'audio_path' => 'audio/vocabularies/D.12.m4a'],
            ['tiociu_text' => 'cap ji', 'indonesian_text' => '12', 'audio_path' => 'audio/vocabularies/D.13.m4a'],
            ['tiociu_text' => 'ji cap', 'indonesian_text' => '20', 'audio_path' => 'audio/vocabularies/D.14.m4a'],
            ['tiociu_text' => 'cik pek', 'indonesian_text' => '100', 'audio_path' => 'audio/vocabularies/D.15.m4a'],
            ['tiociu_text' => 'cik pek khang sa', 'indonesian_text' => '103', 'audio_path' => 'audio/vocabularies/D.16.m4a'],
            ['tiociu_text' => 'cik pek si', 'indonesian_text' => '140', 'audio_path' => 'audio/vocabularies/D.17.m4a'],
            ['tiociu_text' => 'cik pek ngou cap lak', 'indonesian_text' => '156', 'audio_path' => 'audio/vocabularies/D.18.m4a'],
            ['tiociu_text' => 'cik cheng', 'indonesian_text' => '1.000', 'audio_path' => 'audio/vocabularies/D.19.m4a'],
            ['tiociu_text' => 'cheng khang chek', 'indonesian_text' => '1.007', 'audio_path' => 'audio/vocabularies/D.20.m4a'],
            ['tiociu_text' => 'cheng khang puek cap', 'indonesian_text' => '1.080', 'audio_path' => 'audio/vocabularies/D.21.m4a'],
            ['tiociu_text' => 'cheng kao', 'indonesian_text' => '1.900', 'audio_path' => 'audio/vocabularies/D.22.m4a'],
            ['tiociu_text' => 'cêk ban', 'indonesian_text' => '10.000', 'audio_path' => 'audio/vocabularies/D.23.m4a'],
            ['tiociu_text' => 'cêk tiao', 'indonesian_text' => '1.000.000', 'audio_path' => 'audio/vocabularies/D.24.m4a'],
            ['tiociu_text' => 'ji tiam sa', 'indonesian_text' => '2,3', 'audio_path' => 'audio/vocabularies/D.25.m4a'],
            ['tiociu_text' => 'si cap ngou pa siang', 'indonesian_text' => '45%', 'audio_path' => 'audio/vocabularies/D.26.m4a'],
            ['tiociu_text' => 'cik pua', 'indonesian_text' => 'setengah', 'audio_path' => 'audio/vocabularies/D.27.m4a'],
            ['tiociu_text' => 'toi ek', 'indonesian_text' => 'pertama', 'audio_path' => 'audio/vocabularies/D.28.m4a'],
            ['tiociu_text' => 'toi ji', 'indonesian_text' => 'kedua', 'audio_path' => 'audio/vocabularies/D.29.m4a'],
            ['tiociu_text' => 'ek ho', 'indonesian_text' => 'nomor 1', 'audio_path' => 'audio/vocabularies/D.30.m4a'],
        ];
        foreach ($vocabD as $vocab) {
            Vocabulary::create(['topic_id' => $topicD->id] + $vocab);
        }

        // Topik E: Waktu
        $topicE = Topic::where('title', 'Waktu')->first();
        $vocabE = [
            ['tiociu_text' => 'ci cung', 'indonesian_text' => 'sekarang', 'audio_path' => 'audio/vocabularies/E.1.m4a'],
            ['tiociu_text' => 'ku ca', 'indonesian_text' => 'dulu', 'audio_path' => 'audio/vocabularies/E.2.m4a'],
            ['tiociu_text' => 'tang e', 'indonesian_text' => 'nanti', 'audio_path' => 'audio/vocabularies/E.3.m4a'],
            ['tiociu_text' => 'ji khang ji lak ni', 'indonesian_text' => 'tahun 2026', 'audio_path' => 'audio/vocabularies/E.4.m4a'],
            ['tiociu_text' => 'king ni', 'indonesian_text' => 'tahun ini', 'audio_path' => 'audio/vocabularies/E.5.m4a'],
            ['tiociu_text' => 'ku ni', 'indonesian_text' => 'tahun lalu', 'audio_path' => 'audio/vocabularies/E.6.m4a'],
            ['tiociu_text' => 'me ni', 'indonesian_text' => 'tahun depan', 'audio_path' => 'audio/vocabularies/E.7.m4a'],
            ['tiociu_text' => 'cêk ni', 'indonesian_text' => 'satu tahun', 'audio_path' => 'audio/vocabularies/E.8.m4a'],
            ['tiociu_text' => 'ek guek', 'indonesian_text' => 'Januari', 'audio_path' => 'audio/vocabularies/E.9.m4a'],
            ['tiociu_text' => 'ji guek', 'indonesian_text' => 'Februari', 'audio_path' => 'audio/vocabularies/E.10.m4a'],
            ['tiociu_text' => 'sa guek', 'indonesian_text' => 'Maret', 'audio_path' => 'audio/vocabularies/E.11.m4a'],
            ['tiociu_text' => 'si guek', 'indonesian_text' => 'April', 'audio_path' => 'audio/vocabularies/E.12.m4a'],
            ['tiociu_text' => 'ngou guek', 'indonesian_text' => 'Mei', 'audio_path' => 'audio/vocabularies/E.13.m4a'],
            ['tiociu_text' => 'lak guek', 'indonesian_text' => 'Juni', 'audio_path' => 'audio/vocabularies/E.14.m4a'],
            ['tiociu_text' => 'chek guek', 'indonesian_text' => 'Juli', 'audio_path' => 'audio/vocabularies/E.15.m4a'],
            ['tiociu_text' => 'puek guek', 'indonesian_text' => 'Agustus', 'audio_path' => 'audio/vocabularies/E.16.m4a'],
            ['tiociu_text' => 'kao guek', 'indonesian_text' => 'September', 'audio_path' => 'audio/vocabularies/E.17.m4a'],
            ['tiociu_text' => 'cap guek', 'indonesian_text' => 'Oktober', 'audio_path' => 'audio/vocabularies/E.18.m4a'],
            ['tiociu_text' => 'cap ek guek', 'indonesian_text' => 'November', 'audio_path' => 'audio/vocabularies/E.19.m4a'],
            ['tiociu_text' => 'cap ji guek', 'indonesian_text' => 'Desember', 'audio_path' => 'audio/vocabularies/E.20.m4a'],
            ['tiociu_text' => 'ci kai guek', 'indonesian_text' => 'bulan ini', 'audio_path' => 'audio/vocabularies/E.21.m4a'],
            ['tiociu_text' => 'teng kai guek', 'indonesian_text' => 'bulan lalu', 'audio_path' => 'audio/vocabularies/E.22.m4a'],
            ['tiociu_text' => 'e kai guek', 'indonesian_text' => 'bulan depan', 'audio_path' => 'audio/vocabularies/E.23.m4a'],
            ['tiociu_text' => 'no kai guek', 'indonesian_text' => 'dua bulan', 'audio_path' => 'audio/vocabularies/E.24.m4a'],
            ['tiociu_text' => 'ci kai lui pai', 'indonesian_text' => 'minggu ini', 'audio_path' => 'audio/vocabularies/E.25.m4a'],
            ['tiociu_text' => 'teng kai lui pai', 'indonesian_text' => 'minggu lalu', 'audio_path' => 'audio/vocabularies/E.26.m4a'],
            ['tiociu_text' => 'e kai lui pai', 'indonesian_text' => 'minggu depan', 'audio_path' => 'audio/vocabularies/E.27.m4a'],
            ['tiociu_text' => 'sa kai lui pai', 'indonesian_text' => 'tiga minggu', 'audio_path' => 'audio/vocabularies/E.28.m4a'],
            ['tiociu_text' => 'ji cap ek ho', 'indonesian_text' => 'tanggal 21', 'audio_path' => 'audio/vocabularies/E.29.m4a'],
            ['tiociu_text' => 'pai ek', 'indonesian_text' => 'Senin', 'audio_path' => 'audio/vocabularies/E.30.m4a'],
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
            ['tiociu_text' => 'pua me', 'indonesian_text' => 'tengah malam', 'audio_path' => 'audio/vocabularies/E.43.m4a'],
            ['tiociu_text' => 'ca khi', 'indonesian_text' => 'pagi', 'audio_path' => 'audio/vocabularies/E.44.m4a'],
            ['tiociu_text' => 'e kua', 'indonesian_text' => 'siang/sore', 'audio_path' => 'audio/vocabularies/E.45.m4a'],
            ['tiociu_text' => 'cik me', 'indonesian_text' => 'malam', 'audio_path' => 'audio/vocabularies/E.46.m4a'],
            ['tiociu_text' => 'pua me cap ji tiam', 'indonesian_text' => 'jam 12 tengah malam', 'audio_path' => 'audio/vocabularies/E.47.m4a'],
            ['tiociu_text' => '[ca khi] [ek tiam] [ji cap sa hung]', 'indonesian_text' => 'jam 1.23 pagi', 'audio_path' => 'audio/vocabularies/E.48.m4a'],
            ['tiociu_text' => 'e kua si tiam pua', 'indonesian_text' => 'jam 4.30 sore', 'audio_path' => 'audio/vocabularies/E.49.m4a'],
            ['tiociu_text' => '[cik me] [lak tiam] [si cap ngou hung]', 'indonesian_text' => 'jam 6.45 malam', 'audio_path' => 'audio/vocabularies/E.50.m4a'],
            ['tiociu_text' => 'chek tiam ceng', 'indonesian_text' => 'tujuh jam', 'audio_path' => 'audio/vocabularies/E.51.m4a'],
            ['tiociu_text' => 'ngou cap lak hung ceng', 'indonesian_text' => 'lima puluh enam menit', 'audio_path' => 'audio/vocabularies/E.52.m4a'],
            ['tiociu_text' => '[ek kao chek cap lak ni] [sa guek] [ji cap ek ho] [lui pai] [e kua] [ek tiam] [sa cap puek hung]', 'indonesian_text' => 'Minggu, 21 maret 1976 jam 1.38 siang', 'audio_path' => 'audio/vocabularies/E.53.m4a'],
        ];
        foreach ($vocabE as $vocab) {
            Vocabulary::create(['topic_id' => $topicE->id] + $vocab);
        }

        // Topik F: Keluarga
        $topicF = Topic::where('title', 'Keluarga')->first();
        $vocabF = [
            ['tiociu_text' => 'a pak', 'indonesian_text' => 'ayah', 'audio_path' => 'audio/vocabularies/F.1.m4a'],
            ['tiociu_text' => 'a mak', 'indonesian_text' => 'ibu', 'audio_path' => 'audio/vocabularies/F.2.m4a'],
            ['tiociu_text' => 'a hia', 'indonesian_text' => 'kakak laki-laki', 'audio_path' => 'audio/vocabularies/F.3.m4a'],
            ['tiociu_text' => 'a ce', 'indonesian_text' => 'kakak perempuan', 'audio_path' => 'audio/vocabularies/F.4.m4a'],
            ['tiociu_text' => 'a ti', 'indonesian_text' => 'adik laki-laki', 'audio_path' => 'audio/vocabularies/F.5.m4a'],
            ['tiociu_text' => 'a moi', 'indonesian_text' => 'adik perempuan', 'audio_path' => 'audio/vocabularies/F.6.m4a'],
            ['tiociu_text' => 'a kong', 'indonesian_text' => 'kakek', 'audio_path' => 'audio/vocabularies/F.7.m4a'],
            ['tiociu_text' => 'a ma', 'indonesian_text' => 'nenek', 'audio_path' => 'audio/vocabularies/F.8.m4a'],
            ['tiociu_text' => 'a pek', 'indonesian_text' => 'paman (kakak laki-laki ayah)', 'audio_path' => 'audio/vocabularies/F.9.m4a'],
            ['tiociu_text' => 'a êm', 'indonesian_text' => 'bibi (istri kakak laki-laki ayah)', 'audio_path' => 'audio/vocabularies/F.10.m4a'],
            ['tiociu_text' => 'a suk', 'indonesian_text' => 'paman (adik laki-laki ayah)', 'audio_path' => 'audio/vocabularies/F.11.m4a'],
            ['tiociu_text' => 'a sim', 'indonesian_text' => 'bibi (istri adik laki-laki ayah)', 'audio_path' => 'audio/vocabularies/F.12.m4a'],
            ['tiociu_text' => 'a kou', 'indonesian_text' => 'bibi (saudari ayah)', 'audio_path' => 'audio/vocabularies/F.13.m4a'],
            ['tiociu_text' => 'a tio', 'indonesian_text' => 'paman (suami saudari ayah/ibu)', 'audio_path' => 'audio/vocabularies/F.14.m4a'],
            ['tiociu_text' => 'a ku', 'indonesian_text' => 'paman (saudara ibu)', 'audio_path' => 'audio/vocabularies/F.15.m4a'],
            ['tiociu_text' => 'a kim', 'indonesian_text' => 'bibi (istri saudara ibu)', 'audio_path' => 'audio/vocabularies/F.16.m4a'],
            ['tiociu_text' => 'a yi', 'indonesian_text' => 'bibi (saudari ibu)', 'audio_path' => 'audio/vocabularies/F.17.m4a'],
            ['tiociu_text' => 'ang', 'indonesian_text' => 'suami', 'audio_path' => 'audio/vocabularies/F.18.m4a'],
            ['tiociu_text' => 'bou', 'indonesian_text' => 'istri', 'audio_path' => 'audio/vocabularies/F.19.m4a'],
            ['tiociu_text' => 'ta pou kia', 'indonesian_text' => 'anak laki-laki', 'audio_path' => 'audio/vocabularies/F.20.m4a'],
            ['tiociu_text' => 'ca bou kia', 'indonesian_text' => 'anak perempuan', 'audio_path' => 'audio/vocabularies/F.21.m4a'],
            ['tiociu_text' => 'sung', 'indonesian_text' => 'cucu', 'audio_path' => 'audio/vocabularies/F.22.m4a'],
            ['tiociu_text' => 'ke theng', 'indonesian_text' => 'keluarga', 'audio_path' => 'audio/vocabularies/F.23.m4a'],
        ];
        foreach ($vocabF as $vocab) {
            Vocabulary::create(['topic_id' => $topicF->id] + $vocab);
        }

        // Topik G: Warna
        $topicG = Topic::where('title', 'Warna')->first();
        $vocabG = [
            ['tiociu_text' => 'sek', 'indonesian_text' => 'warna', 'audio_path' => 'audio/vocabularies/G.1.m4a'],
            ['tiociu_text' => 'ou sek', 'indonesian_text' => 'warna hitam', 'audio_path' => 'audio/vocabularies/G.2.m4a'],
            ['tiociu_text' => 'pek sek', 'indonesian_text' => 'warna putih', 'audio_path' => 'audio/vocabularies/G.3.m4a'],
            ['tiociu_text' => 'ang sek', 'indonesian_text' => 'warna merah', 'audio_path' => 'audio/vocabularies/G.4.m4a'],
            ['tiociu_text' => 'nam sek', 'indonesian_text' => 'warna biru', 'audio_path' => 'audio/vocabularies/G.5.m4a'],
            ['tiociu_text' => 'ng sek', 'indonesian_text' => 'warna kuning', 'audio_path' => 'audio/vocabularies/G.6.m4a'],
            ['tiociu_text' => 'che sek', 'indonesian_text' => 'warna hijau', 'audio_path' => 'audio/vocabularies/G.7.m4a'],
            ['tiociu_text' => 'kio huei sek', 'indonesian_text' => 'warna ungu', 'audio_path' => 'audio/vocabularies/G.8.m4a'],
            ['tiociu_text' => 'huei hu sek', 'indonesian_text' => 'warna abu-abu', 'audio_path' => 'audio/vocabularies/G.9.m4a'],
            ['tiociu_text' => 'chiang ang sek', 'indonesian_text' => 'warna pink', 'audio_path' => 'audio/vocabularies/G.10.m4a'],
            ['tiociu_text' => 'kim sek', 'indonesian_text' => 'warna emas', 'audio_path' => 'audio/vocabularies/G.11.m4a'],
        ];
        foreach ($vocabG as $vocab) {
            Vocabulary::create(['topic_id' => $topicG->id] + $vocab);
        }

        // Topik H: Makanan & Minuman
        $topicH = Topic::where('title', 'Makanan & Minuman')->first();
        $vocabH = [
            ['tiociu_text' => 'bi', 'indonesian_text' => 'beras', 'audio_path' => 'audio/vocabularies/H.1.m4a'],
            ['tiociu_text' => 'pêng', 'indonesian_text' => 'nasi', 'audio_path' => 'audio/vocabularies/H.2.m4a'],
            ['tiociu_text' => 'muei', 'indonesian_text' => 'bubur', 'audio_path' => 'audio/vocabularies/H.3.m4a'],
            ['tiociu_text' => 'mi', 'indonesian_text' => 'mi', 'audio_path' => 'audio/vocabularies/H.4.m4a'],
            ['tiociu_text' => 'lo ti', 'indonesian_text' => 'roti', 'audio_path' => 'audio/vocabularies/H.5.m4a'],
            ['tiociu_text' => 'koi bak', 'indonesian_text' => 'daging ayam', 'audio_path' => 'audio/vocabularies/H.6.m4a'],
            ['tiociu_text' => 'ak bak', 'indonesian_text' => 'daging bebek', 'audio_path' => 'audio/vocabularies/H.7.m4a'],
            ['tiociu_text' => 'gu bak', 'indonesian_text' => 'daging sapi', 'audio_path' => 'audio/vocabularies/H.8.m4a'],
            ['tiociu_text' => 'yo bak', 'indonesian_text' => 'daging kambing', 'audio_path' => 'audio/vocabularies/H.9.m4a'],
            ['tiociu_text' => 'tê bak', 'indonesian_text' => 'daging babi', 'audio_path' => 'audio/vocabularies/H.10.m4a'],
            ['tiociu_text' => 'hê', 'indonesian_text' => 'ikan', 'audio_path' => 'audio/vocabularies/H.11.m4a'],
            ['tiociu_text' => 'he', 'indonesian_text' => 'udang', 'audio_path' => 'audio/vocabularies/H.12.m4a'],
            ['tiociu_text' => 'hoi', 'indonesian_text' => 'kepiting', 'audio_path' => 'audio/vocabularies/H.13.m4a'],
            ['tiociu_text' => 'nêng', 'indonesian_text' => 'telur', 'audio_path' => 'audio/vocabularies/H.14.m4a'],
            ['tiociu_text' => 'chai', 'indonesian_text' => 'sayur', 'audio_path' => 'audio/vocabularies/H.15.m4a'],
            ['tiociu_text' => 'che kue', 'indonesian_text' => 'buah', 'audio_path' => 'audio/vocabularies/H.16.m4a'],
            ['tiociu_text' => 'tao', 'indonesian_text' => 'kacang', 'audio_path' => 'audio/vocabularies/H.17.m4a'],
            ['tiociu_text' => 'tao hu', 'indonesian_text' => 'tahu', 'audio_path' => 'audio/vocabularies/H.18.m4a'],
            ['tiociu_text' => 'yam', 'indonesian_text' => 'garam', 'audio_path' => 'audio/vocabularies/H.19.m4a'],
            ['tiociu_text' => 'thêng', 'indonesian_text' => 'gula', 'audio_path' => 'audio/vocabularies/H.20.m4a'],
            ['tiociu_text' => 'cui', 'indonesian_text' => 'air', 'audio_path' => 'audio/vocabularies/H.21.m4a'],
            ['tiociu_text' => 'te', 'indonesian_text' => 'teh', 'audio_path' => 'audio/vocabularies/H.22.m4a'],
            ['tiociu_text' => 'ko pi', 'indonesian_text' => 'kopi', 'audio_path' => 'audio/vocabularies/H.23.m4a'],
            ['tiociu_text' => 'ni', 'indonesian_text' => 'susu', 'audio_path' => 'audio/vocabularies/H.24.m4a'],
            ['tiociu_text' => 'ciu', 'indonesian_text' => 'minuman beralkohol', 'audio_path' => 'audio/vocabularies/H.25.m4a'],
            ['tiociu_text' => 'ciak', 'indonesian_text' => 'makan/minum', 'audio_path' => 'audio/vocabularies/H.26.m4a'],
            ['tiociu_text' => 'ho ciak', 'indonesian_text' => 'enak', 'audio_path' => 'audio/vocabularies/H.27.m4a'],
            ['tiociu_text' => 'mo ciak', 'indonesian_text' => 'tidak enak', 'audio_path' => 'audio/vocabularies/H.28.m4a'],
            ['tiociu_text' => 'tiam', 'indonesian_text' => 'manis', 'audio_path' => 'audio/vocabularies/H.29.m4a'],
            ['tiociu_text' => 'kiam', 'indonesian_text' => 'asin', 'audio_path' => 'audio/vocabularies/H.30.m4a'],
            ['tiociu_text' => 'sêm', 'indonesian_text' => 'asam', 'audio_path' => 'audio/vocabularies/H.31.m4a'],
            ['tiociu_text' => 'hiam', 'indonesian_text' => 'pedas', 'audio_path' => 'audio/vocabularies/H.32.m4a'],
            ['tiociu_text' => 'khou', 'indonesian_text' => 'pahit', 'audio_path' => 'audio/vocabularies/H.33.m4a'],
            ['tiociu_text' => 'pek cia', 'indonesian_text' => 'tawar', 'audio_path' => 'audio/vocabularies/H.34.m4a'],
            ['tiociu_text' => 'tou khung', 'indonesian_text' => 'lapar', 'audio_path' => 'audio/vocabularies/H.35.m4a'],
            ['tiociu_text' => 'tou pa', 'indonesian_text' => 'kenyang', 'audio_path' => 'audio/vocabularies/H.36.m4a'],
        ];
        foreach ($vocabH as $vocab) {
            Vocabulary::create(['topic_id' => $topicH->id] + $vocab);
        }

        // Topik I: Anggota Tubuh
        $topicI = Topic::where('title', 'Anggota Tubuh')->first();
        $vocabI = [
            ['tiociu_text' => 'thao', 'indonesian_text' => 'kepala', 'audio_path' => 'audio/vocabularies/I.1.m4a'],
            ['tiociu_text' => 'mo', 'indonesian_text' => 'rambut', 'audio_path' => 'audio/vocabularies/I.2.m4a'],
            ['tiociu_text' => 'meng', 'indonesian_text' => 'wajah', 'audio_path' => 'audio/vocabularies/I.3.m4a'],
            ['tiociu_text' => 'mak', 'indonesian_text' => 'mata', 'audio_path' => 'audio/vocabularies/I.4.m4a'],
            ['tiociu_text' => 'phi', 'indonesian_text' => 'hidung', 'audio_path' => 'audio/vocabularies/I.5.m4a'],
            ['tiociu_text' => 'chui', 'indonesian_text' => 'mulut', 'audio_path' => 'audio/vocabularies/I.6.m4a'],
            ['tiociu_text' => 'khi', 'indonesian_text' => 'gigi', 'audio_path' => 'audio/vocabularies/I.7.m4a'],
            ['tiociu_text' => 'cik', 'indonesian_text' => 'lidah', 'audio_path' => 'audio/vocabularies/I.8.m4a'],
            ['tiociu_text' => 'hi', 'indonesian_text' => 'telinga', 'audio_path' => 'audio/vocabularies/I.9.m4a'],
            ['tiociu_text' => 'am', 'indonesian_text' => 'leher', 'audio_path' => 'audio/vocabularies/I.10.m4a'],
            ['tiociu_text' => 'koi thao', 'indonesian_text' => 'bahu', 'audio_path' => 'audio/vocabularies/I.11.m4a'],
            ['tiociu_text' => 'heng', 'indonesian_text' => 'dada', 'audio_path' => 'audio/vocabularies/I.12.m4a'],
            ['tiociu_text' => 'tou', 'indonesian_text' => 'perut', 'audio_path' => 'audio/vocabularies/I.13.m4a'],
            ['tiociu_text' => 'ka ciak', 'indonesian_text' => 'punggung', 'audio_path' => 'audio/vocabularies/I.14.m4a'],
            ['tiociu_text' => 'chiu', 'indonesian_text' => 'tangan', 'audio_path' => 'audio/vocabularies/I.15.m4a'],
            ['tiociu_text' => 'cêng kak', 'indonesian_text' => 'kuku', 'audio_path' => 'audio/vocabularies/I.16.m4a'],
            ['tiociu_text' => 'kha', 'indonesian_text' => 'kaki', 'audio_path' => 'audio/vocabularies/I.17.m4a'],
            ['tiociu_text' => 'kha thao wu', 'indonesian_text' => 'lutut', 'audio_path' => 'audio/vocabularies/I.18.m4a'],
            ['tiociu_text' => 'phuei', 'indonesian_text' => 'kulit', 'audio_path' => 'audio/vocabularies/I.19.m4a'],
            ['tiociu_text' => 'huek', 'indonesian_text' => 'darah', 'audio_path' => 'audio/vocabularies/I.20.m4a'],
            ['tiociu_text' => 'kuk', 'indonesian_text' => 'tulang', 'audio_path' => 'audio/vocabularies/I.21.m4a'],
            ['tiociu_text' => 'sim cang', 'indonesian_text' => 'jantung', 'audio_path' => 'audio/vocabularies/I.22.m4a'],
            ['tiociu_text' => 'nao', 'indonesian_text' => 'otak', 'audio_path' => 'audio/vocabularies/I.23.m4a'],
        ];
        foreach ($vocabI as $vocab) {
            Vocabulary::create(['topic_id' => $topicI->id] + $vocab);
        }

        // Topik J: Kata Kerja Dasar
        $topicJ = Topic::where('title', 'Kata Kerja Dasar')->first();
        $vocabJ = [
            ['tiociu_text' => 'lai', 'indonesian_text' => 'datang', 'audio_path' => 'audio/vocabularies/J.1.m4a'],
            ['tiociu_text' => 'khê', 'indonesian_text' => 'pergi', 'audio_path' => 'audio/vocabularies/J.2.m4a'],
            ['tiociu_text' => 'têng', 'indonesian_text' => 'pulang', 'audio_path' => 'audio/vocabularies/J.3.m4a'],
            ['tiociu_text' => 'thoi', 'indonesian_text' => 'melihat', 'audio_path' => 'audio/vocabularies/J.4.m4a'],
            ['tiociu_text' => 'thak', 'indonesian_text' => 'membaca', 'audio_path' => 'audio/vocabularies/J.5.m4a'],
            ['tiociu_text' => 'thia', 'indonesian_text' => 'mendengar', 'audio_path' => 'audio/vocabularies/J.6.m4a'],
            ['tiociu_text' => 'ta', 'indonesian_text' => 'berbicara', 'audio_path' => 'audio/vocabularies/J.7.m4a'],
            ['tiociu_text' => 'mung', 'indonesian_text' => 'bertanya', 'audio_path' => 'audio/vocabularies/J.8.m4a'],
            ['tiociu_text' => 'eng', 'indonesian_text' => 'menjawab', 'audio_path' => 'audio/vocabularies/J.9.m4a'],
            ['tiociu_text' => 'chio', 'indonesian_text' => 'tertawa', 'audio_path' => 'audio/vocabularies/J.10.m4a'],
            ['tiociu_text' => 'khao', 'indonesian_text' => 'menangis', 'audio_path' => 'audio/vocabularies/J.11.m4a'],
            ['tiociu_text' => 'sia', 'indonesian_text' => 'menulis', 'audio_path' => 'audio/vocabularies/J.12.m4a'],
            ['tiociu_text' => 'co', 'indonesian_text' => 'membuat/mengerjakan', 'audio_path' => 'audio/vocabularies/J.13.m4a'],
            ['tiociu_text' => 'uk', 'indonesian_text' => 'tidur', 'audio_path' => 'audio/vocabularies/J.14.m4a'],
            ['tiociu_text' => 'cao che', 'indonesian_text' => 'bangun tidur', 'audio_path' => 'audio/vocabularies/J.15.m4a'],
            ['tiociu_text' => 'ok cê', 'indonesian_text' => 'belajar', 'audio_path' => 'audio/vocabularies/J.16.m4a'],
            ['tiociu_text' => 'co kang', 'indonesian_text' => 'bekerja', 'audio_path' => 'audio/vocabularies/J.17.m4a'],
            ['tiociu_text' => 'sêng', 'indonesian_text' => 'bermain', 'audio_path' => 'audio/vocabularies/J.18.m4a'],
            ['tiociu_text' => 'cang ek', 'indonesian_text' => 'mandi', 'audio_path' => 'audio/vocabularies/J.19.m4a'],
            ['tiociu_text' => 'cheng sa', 'indonesian_text' => 'berpakaian', 'audio_path' => 'audio/vocabularies/J.20.m4a'],
            ['tiociu_text' => 'buei', 'indonesian_text' => 'membeli', 'audio_path' => 'audio/vocabularies/J.21.m4a'],
            ['tiociu_text' => 'buei', 'indonesian_text' => 'menjual', 'audio_path' => 'audio/vocabularies/J.22.m4a'],
            ['tiociu_text' => 'khok', 'indonesian_text' => 'memberi', 'audio_path' => 'audio/vocabularies/J.23.m4a'],
            ['tiociu_text' => 'khiok', 'indonesian_text' => 'mengambil', 'audio_path' => 'audio/vocabularies/J.24.m4a'],
            ['tiociu_text' => 'pang', 'indonesian_text' => 'meletakkan', 'audio_path' => 'audio/vocabularies/J.25.m4a'],
            ['tiociu_text' => 'yong', 'indonesian_text' => 'menggunakan', 'audio_path' => 'audio/vocabularies/J.26.m4a'],
            ['tiociu_text' => 'sio hu', 'indonesian_text' => 'membantu', 'audio_path' => 'audio/vocabularies/J.27.m4a'],
            ['tiociu_text' => 'chuei', 'indonesian_text' => 'mencari', 'audio_path' => 'audio/vocabularies/J.28.m4a'],
            ['tiociu_text' => 'tang', 'indonesian_text' => 'menunggu', 'audio_path' => 'audio/vocabularies/J.29.m4a'],
            ['tiociu_text' => 'kia', 'indonesian_text' => 'berjalan', 'audio_path' => 'audio/vocabularies/J.30.m4a'],
            ['tiociu_text' => 'cao', 'indonesian_text' => 'berlari', 'audio_path' => 'audio/vocabularies/J.31.m4a'],
            ['tiociu_text' => 'khia', 'indonesian_text' => 'berdiri', 'audio_path' => 'audio/vocabularies/J.32.m4a'],
            ['tiociu_text' => 'co', 'indonesian_text' => 'duduk', 'audio_path' => 'audio/vocabularies/J.33.m4a'],
        ];
        foreach ($vocabJ as $vocab) {
            Vocabulary::create(['topic_id' => $topicJ->id] + $vocab);
        }

        // Topik K: Kata Sifat Umum
        $topicK = Topic::where('title', 'Kata Sifat Umum')->first();
        $vocabK = [
            ['tiociu_text' => 'ho', 'indonesian_text' => 'baik', 'audio_path' => 'audio/vocabularies/K.1.m4a'],
            ['tiociu_text' => 'mo', 'indonesian_text' => 'buruk', 'audio_path' => 'audio/vocabularies/K.2.m4a'],
            ['tiociu_text' => 'tua', 'indonesian_text' => 'besar', 'audio_path' => 'audio/vocabularies/K.3.m4a'],
            ['tiociu_text' => 'soi', 'indonesian_text' => 'kecil', 'audio_path' => 'audio/vocabularies/K.4.m4a'],
            ['tiociu_text' => 'têng', 'indonesian_text' => 'panjang', 'audio_path' => 'audio/vocabularies/K.5.m4a'],
            ['tiociu_text' => 'to', 'indonesian_text' => 'pendek', 'audio_path' => 'audio/vocabularies/K.6.m4a'],
            ['tiociu_text' => 'coi', 'indonesian_text' => 'banyak', 'audio_path' => 'audio/vocabularies/K.7.m4a'],
            ['tiociu_text' => 'cio', 'indonesian_text' => 'sedikit', 'audio_path' => 'audio/vocabularies/K.8.m4a'],
            ['tiociu_text' => 'phi', 'indonesian_text' => 'murah', 'audio_path' => 'audio/vocabularies/K.9.m4a'],
            ['tiociu_text' => 'kui', 'indonesian_text' => 'mahal', 'audio_path' => 'audio/vocabularies/K.10.m4a'],
            ['tiociu_text' => 'juak', 'indonesian_text' => 'panas', 'audio_path' => 'audio/vocabularies/K.11.m4a'],
            ['tiociu_text' => 'ngang', 'indonesian_text' => 'dingin', 'audio_path' => 'audio/vocabularies/K.12.m4a'],
            ['tiociu_text' => 'me', 'indonesian_text' => 'cepat', 'audio_path' => 'audio/vocabularies/K.13.m4a'],
            ['tiociu_text' => 'mang', 'indonesian_text' => 'lambat', 'audio_path' => 'audio/vocabularies/K.14.m4a'],
            ['tiociu_text' => 'kêng', 'indonesian_text' => 'dekat', 'audio_path' => 'audio/vocabularies/K.15.m4a'],
            ['tiociu_text' => 'hng', 'indonesian_text' => 'jauh', 'audio_path' => 'audio/vocabularies/K.16.m4a'],
            ['tiociu_text' => 'seng', 'indonesian_text' => 'baru', 'audio_path' => 'audio/vocabularies/K.17.m4a'],
            ['tiociu_text' => 'lao', 'indonesian_text' => 'lama', 'audio_path' => 'audio/vocabularies/K.18.m4a'],
            ['tiociu_text' => 'suak', 'indonesian_text' => 'tampan', 'audio_path' => 'audio/vocabularies/K.19.m4a'],
            ['tiociu_text' => 'ngia', 'indonesian_text' => 'cantik', 'audio_path' => 'audio/vocabularies/K.20.m4a'],
            ['tiociu_text' => 'bai', 'indonesian_text' => 'jelek', 'audio_path' => 'audio/vocabularies/K.21.m4a'],
            ['tiociu_text' => 'cheng khik', 'indonesian_text' => 'bersih', 'audio_path' => 'audio/vocabularies/K.22.m4a'],
            ['tiociu_text' => 'lak tak', 'indonesian_text' => 'kotor', 'audio_path' => 'audio/vocabularies/K.23.m4a'],
            ['tiociu_text' => 'hua hi', 'indonesian_text' => 'senang', 'audio_path' => 'audio/vocabularies/K.24.m4a'],
            ['tiociu_text' => 'hek', 'indonesian_text' => 'lelah', 'audio_path' => 'audio/vocabularies/K.25.m4a'],
            ['tiociu_text' => 'thia', 'indonesian_text' => 'sakit', 'audio_path' => 'audio/vocabularies/K.26.m4a'],
        ];
        foreach ($vocabK as $vocab) {
            Vocabulary::create(['topic_id' => $topicK->id] + $vocab);
        }

        // Topik L: Tempat & Arah
        $topicL = Topic::where('title', 'Tempat & Arah')->first();
        $vocabL = [
            ['tiociu_text' => 'lai', 'indonesian_text' => 'rumah', 'audio_path' => 'audio/vocabularies/L.1.m4a'],
            ['tiociu_text' => 'ok têng', 'indonesian_text' => 'sekolah', 'audio_path' => 'audio/vocabularies/L.2.m4a'],
            ['tiociu_text' => 'pa sak', 'indonesian_text' => 'pasar', 'audio_path' => 'audio/vocabularies/L.3.m4a'],
            ['tiociu_text' => 'tiam', 'indonesian_text' => 'toko', 'audio_path' => 'audio/vocabularies/L.4.m4a'],
            ['tiociu_text' => 'kong si', 'indonesian_text' => 'kantor', 'audio_path' => 'audio/vocabularies/L.5.m4a'],
            ['tiociu_text' => 'nging hang', 'indonesian_text' => 'bank', 'audio_path' => 'audio/vocabularies/L.6.m4a'],
            ['tiociu_text' => 'ciak kuang', 'indonesian_text' => 'restoran', 'audio_path' => 'audio/vocabularies/L.7.m4a'],
            ['tiociu_text' => 'lao kung chu', 'indonesian_text' => 'rumah sakit', 'audio_path' => 'audio/vocabularies/L.8.m4a'],
            ['tiociu_text' => 'lou', 'indonesian_text' => 'jalan', 'audio_path' => 'audio/vocabularies/L.9.m4a'],
            ['tiociu_text' => 'to ...', 'indonesian_text' => 'di ...', 'audio_path' => 'audio/vocabularies/L.10.m4a'],
            ['tiociu_text' => 'to ci ko', 'indonesian_text' => 'di sini', 'audio_path' => 'audio/vocabularies/L.11.m4a'],
            ['tiociu_text' => 'to hi ko', 'indonesian_text' => 'di sana', 'audio_path' => 'audio/vocabularies/L.12.m4a'],
            ['tiociu_text' => 'teng kuang', 'indonesian_text' => 'atas', 'audio_path' => 'audio/vocabularies/L.13.m4a'],
            ['tiociu_text' => 'e kha', 'indonesian_text' => 'bawah', 'audio_path' => 'audio/vocabularies/L.14.m4a'],
            ['tiociu_text' => 'gua khao', 'indonesian_text' => 'luar', 'audio_path' => 'audio/vocabularies/L.15.m4a'],
            ['tiociu_text' => 'lai toi', 'indonesian_text' => 'dalam', 'audio_path' => 'audio/vocabularies/L.16.m4a'],
            ['tiociu_text' => 'to chiu', 'indonesian_text' => 'kiri', 'audio_path' => 'audio/vocabularies/L.17.m4a'],
            ['tiociu_text' => 'cia chiu', 'indonesian_text' => 'kanan', 'audio_path' => 'audio/vocabularies/L.18.m4a'],
            ['tiociu_text' => 'thao ceng', 'indonesian_text' => 'depan', 'audio_path' => 'audio/vocabularies/L.19.m4a'],
            ['tiociu_text' => 'leng tang', 'indonesian_text' => 'tengah', 'audio_path' => 'audio/vocabularies/L.20.m4a'],
            ['tiociu_text' => 'ao buei', 'indonesian_text' => 'belakang', 'audio_path' => 'audio/vocabularies/L.21.m4a'],
            ['tiociu_text' => 'tek', 'indonesian_text' => 'lurus', 'audio_path' => 'audio/vocabularies/L.22.m4a'],
        ];
        foreach ($vocabL as $vocab) {
            Vocabulary::create(['topic_id' => $topicL->id] + $vocab);
        }
    }
}
