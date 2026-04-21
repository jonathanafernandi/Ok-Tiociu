<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Topik A: Kata Ganti Orang
        $quizA = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Kata Ganti Orang'))->first();
        $questionsA = [
            [
                'question_text' => 'Apa arti kata "wa" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "kalian" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "yi" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "ka ki" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Kata Tiociu untuk "mereka" adalah ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... nang" artinya "kami" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"pak ..." artinya "orang lain" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ci kai" artinya "..." dalam bahasa Indonesia.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/A.2.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/A.12.m4a',
            ],
        ];
        foreach ($questionsA as $question) {
            Question::create(['quiz_id' => $quizA->id] + $question);
        }

        // Topik B: Salam & Ungkapan Dasar
        $quizB = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Salam & Ungkapan Dasar'))->first();
        $questionsB = [
            [
                'question_text' => 'Apa arti kata "kam sia" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "Maaf" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Kata "ai" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "wu" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "oi tek" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "boe tong" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "sin cia ju yi" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... mia mik kai" artinya "Siapa namamu?" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"êm ..." artinya "tidak" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"oi ..." artinya "boleh" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"wa ciak pa ..." artinya "Saya sudah makan" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti frasa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/B.7.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/B.27.m4a',
            ],
            [
                'question_text' => 'Apa arti frasa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/B.31.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/B.23.m4a',
            ],
        ];
        foreach ($questionsB as $question) {
            Question::create(['quiz_id' => $quizB->id] + $question);
        }

        // Topik C: Kata Tanya
        $quizC = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Kata Tanya'))->first();
        $questionsC = [
            [
                'question_text' => 'Apa arti "mik kai" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara bertanya "di mana" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Kata tanya "ting tiang" artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... si" artinya "kapan" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"co ..." artinya "mengapa" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Kata tanya apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/C.7.m4a',
            ],
            [
                'question_text' => 'Apa arti kata tanya yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/C.6.m4a',
            ],
        ];
        foreach ($questionsC as $question) {
            Question::create(['quiz_id' => $quizC->id] + $question);
        }

        // Topik D: Angka & Bilangan
        $quizD = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Angka & Bilangan'))->first();
        $questionsD = [
            [
                'question_text' => 'Bagaimana cara mengucapkan angka "7" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "cik pek khang sa" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "20" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "cik pek" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"cheng khang puek cap" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "cik cheng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "cêk ban" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"cap ..." artinya "11" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Angka "8" dalam bahasa Tiociu adalah "...".',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"cheng ..." artinya "1.900" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... tiam sa" artinya "2,3" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Angka berapa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/D.18.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/D.29.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/D.27.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/D.30.m4a',
            ],
        ];
        foreach ($questionsD as $question) {
            Question::create(['quiz_id' => $quizD->id] + $question);
        }

        // Topik E: Waktu
        $quizE = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Waktu'))->first();
        $questionsE = [
            [
                'question_text' => 'Apa arti "ji khang ji lak ni" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "nanti" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"lui pai" dalam bahasa Tiociu berarti hari apa?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "teng kai guek" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"cik me" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "ao jik" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ci cung" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "no jik coi" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"cêk ..." artinya "satu tahun" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"si ..." artinya "empat hari" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bulan Mei dalam bahasa Tiociu adalah "... guek".',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"pai ..." artinya "hari Sabtu" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti frasa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/E.49.m4a',
            ],
            [
                'question_text' => 'Apa arti frasa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/E.51.m4a',
            ],
            [
                'question_text' => 'Apa arti frasa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/E.52.m4a',
            ],
        ];
        foreach ($questionsE as $question) {
            Question::create(['quiz_id' => $quizE->id] + $question);
        }

        // Topik F: Keluarga
        $quizF = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Keluarga'))->first();
        $questionsF = [
            [
                'question_text' => 'Apa arti "a pak" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara menyebut "keluarga" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"a kong" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "bou" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Siapa yang disebut "a suk" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "sung" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"a yi" dalam bahasa Tiociu merujuk pada ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"a ..." artinya "adik perempuan" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ta pou ..." artinya "anak laki-laki" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"a ..." artinya "bibi (saudari ayah)" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"a ..." artinya "nenek" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/F.21.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/F.9.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/F.18.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/F.14.m4a',
            ],
        ];
        foreach ($questionsF as $question) {
            Question::create(['quiz_id' => $quizF->id] + $question);
        }

        // Topik G: Warna
        $quizG = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Warna'))->first();
        $questionsG = [
            [
                'question_text' => 'Apa arti "ang sek" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "warna hitam" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"che sek" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "kim sek" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chiang ang sek" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... sek" artinya "warna biru" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... sek" artinya "warna kuning" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Kata Tiociu untuk "warna putih" adalah "... sek".',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Warna apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/G.8.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/G.9.m4a',
            ],
        ];
        foreach ($questionsG as $question) {
            Question::create(['quiz_id' => $quizG->id] + $question);
        }

        // Topik H: Makanan & Minuman
        $quizH = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Makanan & Minuman'))->first();
        $questionsH = [
            [
                'question_text' => 'Apa arti "pêng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "ikan" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"tiam" dalam bahasa Tiociu artinya rasa ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "chai" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"te" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "muei" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"sem" dalam bahasa Tiociu artinya rasa ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... ciak" artinya "tidak enak" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... bak" artinya "daging sapi" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"tou ..." artinya "lapar" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... bak" artinya "daging ayam" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/H.14.m4a',
            ],
            [
                'question_text' => 'Rasa apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/H.32.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/H.21.m4a',
            ],
            [
                'question_text' => 'Rasa apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/H.18.m4a',
            ],
        ];
        foreach ($questionsH as $question) {
            Question::create(['quiz_id' => $quizH->id] + $question);
        }

        // Topik I: Anggota Tubuh
        $quizI = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Anggota Tubuh'))->first();
        $questionsI = [
            [
                'question_text' => 'Apa arti "thau" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "tangan" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"mak" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "phi" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"mo" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "huek" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... thao wu" artinya "lutut" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... cang" artinya "jantung" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... thau" artinya "bahu" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Anggota tubuh apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/I.6.m4a',
            ],
            [
                'question_text' => 'Anggota tubuh apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/I.17.m4a',
            ],
            [
                'question_text' => 'Anggota tubuh apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/I.3.m4a',
            ],
        ];
        foreach ($questionsI as $question) {
            Question::create(['quiz_id' => $quizI->id] + $question);
        }

        // Topik J: Kata Kerja Dasar
        $quizJ = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Kata Kerja Dasar'))->first();
        $questionsJ = [
            [
                'question_text' => 'Apa arti "lai" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "tidur" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"thia" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "sio hu" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chuei" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "khê" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"khao" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"cao ..." artinya "bangun tidur" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"co ..." artinya "bekerja" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... cê" artinya "belajar" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... ek" artinya "mandi" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/J.3.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/J.4.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/J.8.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/J.10.m4a',
            ],
        ];
        foreach ($questionsJ as $question) {
            Question::create(['quiz_id' => $quizJ->id] + $question);
        }

        // Topik K: Kata Sifat Umum
        $quizK = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Kata Sifat Umum'))->first();
        $questionsK = [
            [
                'question_text' => 'Apa arti "tua" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "mahal" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"me" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "lak tak" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"hek" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "kêng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... khik" artinya "bersih" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"hua ..." artinya "senang" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Kata Tiociu untuk "dingin" adalah "...".',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/K.7.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/K.11.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/K.17.m4a',
            ],
        ];
        foreach ($questionsK as $question) {
            Question::create(['quiz_id' => $quizK->id] + $question);
        }

        // Topik L: Tempat & Arah
        $quizL = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Tempat & Arah'))->first();
        $questionsL = [
            [
                'question_text' => 'Apa arti "ok têng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "pasar" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"to chiu" dalam bahasa Tiociu artinya arah ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "thao ceng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"teng kuang" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "lou" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ciak ..." artinya "restoran" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"to ... ko" artinya "di sini" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... chiu" artinya "kanan" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/L.8.m4a',
            ],
            [
                'question_text' => 'Arah apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/L.21.m4a',
            ],
            [
                'question_text' => 'Posisi apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/L.15.m4a',
            ],
        ];
        foreach ($questionsL as $question) {
            Question::create(['quiz_id' => $quizL->id] + $question);
        }
    }
}
