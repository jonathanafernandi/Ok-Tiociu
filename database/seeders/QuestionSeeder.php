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
                'question_text' => 'Apa arti "kam sia" dalam bahasa Indonesia?',
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
                'question_text' => 'Apa arti "oi têk" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "boê tong" dalam bahasa Indonesia?',
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
                'question_text' => '"em ..." artinya "tidak" dalam bahasa Tiociu.',
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
                'question_text' => 'Apa arti "cik pêk khang sa" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "20" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "cik pêk" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chêng khang puêk cap" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "cik chêng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "cek ban" dalam bahasa Indonesia?',
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
                'question_text' => '"chêng ..." artinya "1.900" dalam bahasa Tiociu.',
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
                'question_text' => 'Apa arti "têng kai guêk" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"cik mê" dalam bahasa Tiociu artinya ....',
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
                'question_text' => '"cek ..." artinya "satu tahun" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"si ..." artinya "empat hari" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bulan Mei dalam bahasa Tiociu adalah "... guêk".',
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

        // Topik F: Anggota Tubuh
        $quizF = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Anggota Tubuh'))->first();
        $questionsF = [
            [
                'question_text' => 'Apa arti "thao" dalam bahasa Indonesia?',
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
                'question_text' => 'Apa arti "huêk" dalam bahasa Indonesia?',
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
                'question_text' => '"... thao" artinya "bahu" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Anggota tubuh apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/F.6.m4a',
            ],
            [
                'question_text' => 'Anggota tubuh apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/F.17.m4a',
            ],
            [
                'question_text' => 'Anggota tubuh apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/F.3.m4a',
            ],
        ];
        foreach ($questionsF as $question) {
            Question::create(['quiz_id' => $quizF->id] + $question);
        }

        // Topik G: Keluarga
        $quizG = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Keluarga'))->first();
        $questionsG = [
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
                'audio_path' => 'audio/vocabularies/G.21.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/G.9.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/G.18.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/G.14.m4a',
            ],
        ];
        foreach ($questionsG as $question) {
            Question::create(['quiz_id' => $quizG->id] + $question);
        }

        // Topik H: Rumah
        $quizH = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Rumah'))->first();
        $questionsH = [
            [
                'question_text' => 'Apa arti "chu" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "kamar" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"uêi" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "thêng mung" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"phou" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "cheng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chê si" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"lao ..." artinya "tangga" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"cing ..." artinya "bantal" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... si" artinya "televisi" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"so ..." artinya "gembok" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/H.4.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/H.8.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/H.28.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/H.33.m4a',
            ],
        ];
        foreach ($questionsH as $question) {
            Question::create(['quiz_id' => $quizH->id] + $question);
        }

        // Topik I: Pekerjaan
        $quizI = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Pekerjaan'))->first();
        $questionsI = [
            [
                'question_text' => 'Apa arti "lao kung" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "polisi" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"seng li nang" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "huêi thao" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"sing sê" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... se" artinya "perawat" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... cia" artinya "jurnalis" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"puêi ki ..." artinya "pilot" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... nang" artinya "karyawan" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/I.4.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/I.13.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/I.6.m4a',
            ],
        ];
        foreach ($questionsI as $question) {
            Question::create(['quiz_id' => $quizI->id] + $question);
        }

        // Topik J: Kata Sifat Umum
        $quizJ = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Kata Sifat Umum'))->first();
        $questionsJ = [
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
                'question_text' => '"mê" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "lak tak" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"hêk" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "keng" dalam bahasa Indonesia?',
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
                'audio_path' => 'audio/vocabularies/J.7.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/J.11.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/J.17.m4a',
            ],
        ];
        foreach ($questionsJ as $question) {
            Question::create(['quiz_id' => $quizJ->id] + $question);
        }

        // Topik K: Warna
        $quizK = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Warna'))->first();
        $questionsK = [
            [
                'question_text' => 'Apa arti "ang sêk" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "warna hitam" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chê sêk" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "kim sêk" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chiang ang sêk" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... sêk" artinya "warna biru" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... sêk" artinya "warna kuning" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Kata Tiociu untuk "warna putih" adalah "... sêk".',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Warna apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/K.8.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/K.9.m4a',
            ],
        ];
        foreach ($questionsK as $question) {
            Question::create(['quiz_id' => $quizK->id] + $question);
        }

        // Topik L: Hewan
        $quizL = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Hewan'))->first();
        $questionsL = [
            [
                'question_text' => 'Apa arti "ngiao" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "harimau" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ciao" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "buê yak" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ba kia" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "hoi" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"him" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"lao ..." artinya "monyet" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"teng am ..." artinya "jerapah" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... lêng" artinya "cicak" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... he" artinya "cumi-cumi" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Hewan apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/L.3.m4a',
            ],
            [
                'question_text' => 'Hewan apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/L.25.m4a',
            ],
            [
                'question_text' => 'Hewan apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/L.31.m4a',
            ],
            [
                'question_text' => 'Hewan apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/L.30.m4a',
            ],
        ];
        foreach ($questionsL as $question) {
            Question::create(['quiz_id' => $quizL->id] + $question);
        }

        // Topik M: Makanan & Minuman
        $quizM = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Makanan & Minuman'))->first();
        $questionsM = [
            [
                'question_text' => 'Apa arti "peng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "gula" dalam bahasa Tiociu?',
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
                'question_text' => '"tê" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "muêi" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"sêm" dalam bahasa Tiociu artinya rasa ....',
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
                'audio_path' => 'audio/vocabularies/M.12.m4a',
            ],
            [
                'question_text' => 'Rasa apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/M.28.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/M.17.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/M.14.m4a',
            ],
        ];
        foreach ($questionsM as $question) {
            Question::create(['quiz_id' => $quizM->id] + $question);
        }

        // Topik N: Sayuran
        $quizN = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Sayuran'))->first();
        $questionsN = [
            [
                'question_text' => 'Apa arti "êng chai" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "sawi putih" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ang mo kio" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "ko lê chai" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chai tao" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chai ..." artinya "kembang kol" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... chai thao" artinya "wortel" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... kia" artinya "bawang merah" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"tao ..." artinya "tauge" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Sayur apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/N.8.m4a',
            ],
            [
                'question_text' => 'Sayur apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/N.16.m4a',
            ],
            [
                'question_text' => 'Sayur apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/N.17.m4a',
            ],
        ];
        foreach ($questionsN as $question) {
            Question::create(['quiz_id' => $quizN->id] + $question);
        }

        // Topik O: Buah-Buahan
        $quizO = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Buah-Buahan'))->first();
        $questionsO = [
            [
                'question_text' => 'Apa arti "ni kuêi" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "jeruk" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"lêng mong" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "phu tho" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"suai" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... ka" artinya "jeruk nipis" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ang ..." artinya "nanas" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"chao ..." artinya "stroberi" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... kuêi" artinya "semangka" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Sayur apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/O.1.m4a',
            ],
            [
                'question_text' => 'Sayur apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/O.7.m4a',
            ],
            [
                'question_text' => 'Sayur apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/O.14.m4a',
            ],
        ];
        foreach ($questionsO as $question) {
            Question::create(['quiz_id' => $quizO->id] + $question);
        }

        // Topik P: Kata Kerja Dasar
        $quizP = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Kata Kerja Dasar'))->first();
        $questionsP = [
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
                'question_text' => '"chuêi" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "khe" dalam bahasa Indonesia?',
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
                'question_text' => '"... sa" artinya "berpakaian" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... ce" artinya "belajar" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... êk" artinya "mandi" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/P.3.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/P.4.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/P.8.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/P.10.m4a',
            ],
        ];
        foreach ($questionsP as $question) {
            Question::create(['quiz_id' => $quizP->id] + $question);
        }

        // Topik Q: Tempat & Arah
        $quizQ = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Tempat & Arah'))->first();
        $questionsQ = [
            [
                'question_text' => 'Apa arti "ok teng" dalam bahasa Indonesia?',
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
                'question_text' => 'Apa arti "thao cêng" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"têng kuang" dalam bahasa Tiociu artinya ....',
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
                'audio_path' => 'audio/vocabularies/Q.7.m4a',
            ],
            [
                'question_text' => 'Arah apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/Q.20.m4a',
            ],
            [
                'question_text' => 'Posisi apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/Q.14.m4a',
            ],
        ];
        foreach ($questionsQ as $question) {
            Question::create(['quiz_id' => $quizQ->id] + $question);
        }

        // Topik R: Transportasi
        $quizR = Quiz::whereHas('topic', fn($query) => $query->where('title', 'Transportasi'))->first();
        $questionsR = [
            [
                'question_text' => 'Apa arti "cung" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Bagaimana cara mengucapkan "taksi" dalam bahasa Tiociu?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"ba" dalam bahasa Tiociu artinya ....',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti "mo to" dalam bahasa Indonesia?',
                'question_type' => 'PG',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... chia" artinya "sepeda" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... ki" artinya "pesawat" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => '"... chia" artinya "kereta" dalam bahasa Tiociu.',
                'question_type' => 'IS',
                'audio_path' => null,
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/R.1.m4a',
            ],
            [
                'question_text' => 'Rasa apa yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/R.10.m4a',
            ],
            [
                'question_text' => 'Apa arti kata yang diucapkan?',
                'question_type' => 'AU',
                'audio_path' => 'audio/vocabularies/R.9.m4a',
            ],
        ];
        foreach ($questionsR as $question) {
            Question::create(['quiz_id' => $quizR->id] + $question);
        }
    }
}
