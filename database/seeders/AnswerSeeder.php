<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Topic;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Topik A: Kata Ganti Orang
        $topicA = Topic::where('title', 'Kata Ganti Orang')->first();
        $quizA = Quiz::where('topic_id', $topicA->id)->first();
        $questionA = Question::where('quiz_id', $quizA->id)->orderBy('id')->get()->values();
        $answersA = [
            // Question 1
            ['question_id' => $questionA[0]->id, 'answer_text' => 'kamu', 'is_correct' => false],
            ['question_id' => $questionA[0]->id, 'answer_text' => 'dia', 'is_correct' => false],
            ['question_id' => $questionA[0]->id, 'answer_text' => 'kami', 'is_correct' => false],
            ['question_id' => $questionA[0]->id, 'answer_text' => 'saya', 'is_correct' => true],

            // Question 2
            ['question_id' => $questionA[1]->id, 'answer_text' => 'yi nang', 'is_correct' => false],
            ['question_id' => $questionA[1]->id, 'answer_text' => 'wa nang', 'is_correct' => false],
            ['question_id' => $questionA[1]->id, 'answer_text' => 'nang', 'is_correct' => false],
            ['question_id' => $questionA[1]->id, 'answer_text' => 'ning nang', 'is_correct' => true],

            // Question 3
            ['question_id' => $questionA[2]->id, 'answer_text' => 'saya', 'is_correct' => false],
            ['question_id' => $questionA[2]->id, 'answer_text' => 'kamu', 'is_correct' => false],
            ['question_id' => $questionA[2]->id, 'answer_text' => 'dia', 'is_correct' => true],
            ['question_id' => $questionA[2]->id, 'answer_text' => 'mereka', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionA[3]->id, 'answer_text' => 'diri sendiri', 'is_correct' => true],
            ['question_id' => $questionA[3]->id, 'answer_text' => 'orang lain', 'is_correct' => false],
            ['question_id' => $questionA[3]->id, 'answer_text' => 'ini', 'is_correct' => false],
            ['question_id' => $questionA[3]->id, 'answer_text' => 'itu', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionA[4]->id, 'answer_text' => 'wa nang', 'is_correct' => false],
            ['question_id' => $questionA[4]->id, 'answer_text' => 'nang', 'is_correct' => false],
            ['question_id' => $questionA[4]->id, 'answer_text' => 'ning nang', 'is_correct' => false],
            ['question_id' => $questionA[4]->id, 'answer_text' => 'yi nang', 'is_correct' => true],

            // Question 6
            ['question_id' => $questionA[5]->id, 'answer_text' => 'yi', 'is_correct' => false],
            ['question_id' => $questionA[5]->id, 'answer_text' => 'le', 'is_correct' => false],
            ['question_id' => $questionA[5]->id, 'answer_text' => 'wa', 'is_correct' => true],
            ['question_id' => $questionA[5]->id, 'answer_text' => 'ning', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionA[6]->id, 'answer_text' => 'ki', 'is_correct' => false],
            ['question_id' => $questionA[6]->id, 'answer_text' => 'nang', 'is_correct' => true],
            ['question_id' => $questionA[6]->id, 'answer_text' => 'wa', 'is_correct' => false],
            ['question_id' => $questionA[6]->id, 'answer_text' => 'le', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionA[7]->id, 'answer_text' => 'itu', 'is_correct' => false],
            ['question_id' => $questionA[7]->id, 'answer_text' => 'diri sendiri', 'is_correct' => false],
            ['question_id' => $questionA[7]->id, 'answer_text' => 'ini', 'is_correct' => true],
            ['question_id' => $questionA[7]->id, 'answer_text' => 'orang lain', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionA[8]->id, 'answer_text' => 'saya', 'is_correct' => false],
            ['question_id' => $questionA[8]->id, 'answer_text' => 'kamu', 'is_correct' => true],
            ['question_id' => $questionA[8]->id, 'answer_text' => 'dia', 'is_correct' => false],
            ['question_id' => $questionA[8]->id, 'answer_text' => 'kami', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionA[9]->id, 'answer_text' => 'ini', 'is_correct' => false],
            ['question_id' => $questionA[9]->id, 'answer_text' => 'itu', 'is_correct' => true],
            ['question_id' => $questionA[9]->id, 'answer_text' => 'diri sendiri', 'is_correct' => false],
            ['question_id' => $questionA[9]->id, 'answer_text' => 'orang lain', 'is_correct' => false],
        ];
        foreach ($answersA as $answer) {
            Answer::create($answer);
        }

        // Topik B: Salam & Ungkapan Dasar
        $topicB = Topic::where('title', 'Salam & Ungkapan Dasar')->first();
        $quizB = Quiz::where('topic_id', $topicB->id)->first();
        $questionB = Question::where('quiz_id', $quizB->id)->orderBy('id')->get()->values();
        $answersB = [
            // Question 1
            ['question_id' => $questionB[0]->id, 'answer_text' => 'Halo', 'is_correct' => false],
            ['question_id' => $questionB[0]->id, 'answer_text' => 'Maaf', 'is_correct' => false],
            ['question_id' => $questionB[0]->id, 'answer_text' => 'Terima kasih', 'is_correct' => true],
            ['question_id' => $questionB[0]->id, 'answer_text' => 'Tidak apa-apa', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionB[1]->id, 'answer_text' => 'kam sia', 'is_correct' => false],
            ['question_id' => $questionB[1]->id, 'answer_text' => 'tui em cu', 'is_correct' => true],
            ['question_id' => $questionB[1]->id, 'answer_text' => 'boê co ni', 'is_correct' => false],
            ['question_id' => $questionB[1]->id, 'answer_text' => 'le ho', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionB[2]->id, 'answer_text' => 'tidak mau', 'is_correct' => false],
            ['question_id' => $questionB[2]->id, 'answer_text' => 'mengetahui', 'is_correct' => false],
            ['question_id' => $questionB[2]->id, 'answer_text' => 'mau', 'is_correct' => true],
            ['question_id' => $questionB[2]->id, 'answer_text' => 'tidak tahu', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionB[3]->id, 'answer_text' => 'tidak ada', 'is_correct' => false],
            ['question_id' => $questionB[3]->id, 'answer_text' => 'ada', 'is_correct' => true],
            ['question_id' => $questionB[3]->id, 'answer_text' => 'ingat', 'is_correct' => false],
            ['question_id' => $questionB[3]->id, 'answer_text' => 'mengerti', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionB[4]->id, 'answer_text' => 'mengerti', 'is_correct' => false],
            ['question_id' => $questionB[4]->id, 'answer_text' => 'tidak bisa', 'is_correct' => false],
            ['question_id' => $questionB[4]->id, 'answer_text' => 'bisa', 'is_correct' => true],
            ['question_id' => $questionB[4]->id, 'answer_text' => 'tidak mengerti', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionB[5]->id, 'answer_text' => 'tidak ada', 'is_correct' => false],
            ['question_id' => $questionB[5]->id, 'answer_text' => 'tidak kenal', 'is_correct' => false],
            ['question_id' => $questionB[5]->id, 'answer_text' => 'tidak mengerti', 'is_correct' => true],
            ['question_id' => $questionB[5]->id, 'answer_text' => 'lupa', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionB[6]->id, 'answer_text' => 'Selamat ulang tahun', 'is_correct' => false],
            ['question_id' => $questionB[6]->id, 'answer_text' => 'Selamat Tahun Baru Imlek', 'is_correct' => true],
            ['question_id' => $questionB[6]->id, 'answer_text' => 'Halo semua', 'is_correct' => false],
            ['question_id' => $questionB[6]->id, 'answer_text' => 'Tidak apa-apa', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionB[7]->id, 'answer_text' => 'le', 'is_correct' => true],
            ['question_id' => $questionB[7]->id, 'answer_text' => 'yi', 'is_correct' => false],
            ['question_id' => $questionB[7]->id, 'answer_text' => 'ning', 'is_correct' => false],
            ['question_id' => $questionB[7]->id, 'answer_text' => 'wa', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionB[8]->id, 'answer_text' => 'cai', 'is_correct' => false],
            ['question_id' => $questionB[8]->id, 'answer_text' => 'ki têk', 'is_correct' => false],
            ['question_id' => $questionB[8]->id, 'answer_text' => 'si', 'is_correct' => true],
            ['question_id' => $questionB[8]->id, 'answer_text' => 'pak', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionB[9]->id, 'answer_text' => 'cai', 'is_correct' => false],
            ['question_id' => $questionB[9]->id, 'answer_text' => 'tong', 'is_correct' => false],
            ['question_id' => $questionB[9]->id, 'answer_text' => 'pak', 'is_correct' => false],
            ['question_id' => $questionB[9]->id, 'answer_text' => 'sai', 'is_correct' => true],

            // Question 11
            ['question_id' => $questionB[10]->id, 'answer_text' => 'boê', 'is_correct' => false],
            ['question_id' => $questionB[10]->id, 'answer_text' => 'kai', 'is_correct' => false],
            ['question_id' => $questionB[10]->id, 'answer_text' => 'liao', 'is_correct' => true],
            ['question_id' => $questionB[10]->id, 'answer_text' => 'bo', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionB[11]->id, 'answer_text' => 'Halo semua', 'is_correct' => false],
            ['question_id' => $questionB[11]->id, 'answer_text' => 'Maaf', 'is_correct' => false],
            ['question_id' => $questionB[11]->id, 'answer_text' => 'Terima kasih', 'is_correct' => false],
            ['question_id' => $questionB[11]->id, 'answer_text' => 'Tidak apa-apa', 'is_correct' => true],

            // Question 13
            ['question_id' => $questionB[12]->id, 'answer_text' => 'kenal', 'is_correct' => false],
            ['question_id' => $questionB[12]->id, 'answer_text' => 'tidak kenal', 'is_correct' => true],
            ['question_id' => $questionB[12]->id, 'answer_text' => 'ada', 'is_correct' => false],
            ['question_id' => $questionB[12]->id, 'answer_text' => 'tidak ada', 'is_correct' => false],

            // Question 14
            ['question_id' => $questionB[13]->id, 'answer_text' => 'Selamat ulang tahun', 'is_correct' => true],
            ['question_id' => $questionB[13]->id, 'answer_text' => 'Selamat Tahun Baru Imlek', 'is_correct' => false],
            ['question_id' => $questionB[13]->id, 'answer_text' => 'Saya sudah makan', 'is_correct' => false],
            ['question_id' => $questionB[13]->id, 'answer_text' => 'Tidak apa-apa', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionB[14]->id, 'answer_text' => 'ingat', 'is_correct' => false],
            ['question_id' => $questionB[14]->id, 'answer_text' => 'lupa', 'is_correct' => true],
            ['question_id' => $questionB[14]->id, 'answer_text' => 'benar', 'is_correct' => false],
            ['question_id' => $questionB[14]->id, 'answer_text' => 'salah', 'is_correct' => false],
        ];
        foreach ($answersB as $answer) {
            Answer::create($answer);
        }

        // Topik C: Kata Tanya
        $topicC = Topic::where('title', 'Kata Tanya')->first();
        $quizC = Quiz::where('topic_id', $topicC->id)->first();
        $questionC = Question::where('quiz_id', $quizC->id)->orderBy('id')->get()->values();
        $answersC = [
            // Question 1
            ['question_id' => $questionC[0]->id, 'answer_text' => 'apa', 'is_correct' => true],
            ['question_id' => $questionC[0]->id, 'answer_text' => 'siapa', 'is_correct' => false],
            ['question_id' => $questionC[0]->id, 'answer_text' => 'di mana', 'is_correct' => false],
            ['question_id' => $questionC[0]->id, 'answer_text' => 'kapan', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionC[1]->id, 'answer_text' => 'tiang si', 'is_correct' => false],
            ['question_id' => $questionC[1]->id, 'answer_text' => 'co ni', 'is_correct' => false],
            ['question_id' => $questionC[1]->id, 'answer_text' => 'to di ko', 'is_correct' => true],
            ['question_id' => $questionC[1]->id, 'answer_text' => 'ting tiang', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionC[2]->id, 'answer_text' => 'apa', 'is_correct' => false],
            ['question_id' => $questionC[2]->id, 'answer_text' => 'kapan', 'is_correct' => false],
            ['question_id' => $questionC[2]->id, 'answer_text' => 'siapa', 'is_correct' => true],
            ['question_id' => $questionC[2]->id, 'answer_text' => 'di mana', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionC[3]->id, 'answer_text' => 'co', 'is_correct' => false],
            ['question_id' => $questionC[3]->id, 'answer_text' => 'muêk', 'is_correct' => false],
            ['question_id' => $questionC[3]->id, 'answer_text' => 'tiang', 'is_correct' => true],
            ['question_id' => $questionC[3]->id, 'answer_text' => 'mik', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionC[4]->id, 'answer_text' => 'coi', 'is_correct' => false],
            ['question_id' => $questionC[4]->id, 'answer_text' => 'kai', 'is_correct' => false],
            ['question_id' => $questionC[4]->id, 'answer_text' => 'ni', 'is_correct' => true],
            ['question_id' => $questionC[4]->id, 'answer_text' => 'si', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionC[5]->id, 'answer_text' => 'diok coi', 'is_correct' => true],
            ['question_id' => $questionC[5]->id, 'answer_text' => 'co ni', 'is_correct' => false],
            ['question_id' => $questionC[5]->id, 'answer_text' => 'to di ko', 'is_correct' => false],
            ['question_id' => $questionC[5]->id, 'answer_text' => 'tiang si', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionC[6]->id, 'answer_text' => 'mengapa', 'is_correct' => false],
            ['question_id' => $questionC[6]->id, 'answer_text' => 'bagaimana', 'is_correct' => true],
            ['question_id' => $questionC[6]->id, 'answer_text' => 'berapa', 'is_correct' => false],
            ['question_id' => $questionC[6]->id, 'answer_text' => 'kapan', 'is_correct' => false],
        ];
        foreach ($answersC as $answer) {
            Answer::create($answer);
        }

        // Topik D: Angka & Bilangan
        $topicD = Topic::where('title', 'Angka & Bilangan')->first();
        $quizD = Quiz::where('topic_id', $topicD->id)->first();
        $questionD = Question::where('quiz_id', $quizD->id)->orderBy('id')->get()->values();
        $answersD = [
            // Question 1
            ['question_id' => $questionD[0]->id, 'answer_text' => 'lak', 'is_correct' => false],
            ['question_id' => $questionD[0]->id, 'answer_text' => 'chêk', 'is_correct' => true],
            ['question_id' => $questionD[0]->id, 'answer_text' => 'puêk', 'is_correct' => false],
            ['question_id' => $questionD[0]->id, 'answer_text' => 'kao', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionD[1]->id, 'answer_text' => '100', 'is_correct' => false],
            ['question_id' => $questionD[1]->id, 'answer_text' => '103', 'is_correct' => true],
            ['question_id' => $questionD[1]->id, 'answer_text' => '104', 'is_correct' => false],
            ['question_id' => $questionD[1]->id, 'answer_text' => '130', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionD[2]->id, 'answer_text' => 'cap ji', 'is_correct' => false],
            ['question_id' => $questionD[2]->id, 'answer_text' => 'ji cap', 'is_correct' => true],
            ['question_id' => $questionD[2]->id, 'answer_text' => 'no cap', 'is_correct' => false],
            ['question_id' => $questionD[2]->id, 'answer_text' => 'cap no', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionD[3]->id, 'answer_text' => '10', 'is_correct' => false],
            ['question_id' => $questionD[3]->id, 'answer_text' => '100', 'is_correct' => true],
            ['question_id' => $questionD[3]->id, 'answer_text' => '1.000', 'is_correct' => false],
            ['question_id' => $questionD[3]->id, 'answer_text' => '10.000', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionD[4]->id, 'answer_text' => '1.008', 'is_correct' => false],
            ['question_id' => $questionD[4]->id, 'answer_text' => '1.080', 'is_correct' => true],
            ['question_id' => $questionD[4]->id, 'answer_text' => '1.800', 'is_correct' => false],
            ['question_id' => $questionD[4]->id, 'answer_text' => '1.880', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionD[5]->id, 'answer_text' => '1.000.000', 'is_correct' => false],
            ['question_id' => $questionD[5]->id, 'answer_text' => '100.000', 'is_correct' => false],
            ['question_id' => $questionD[5]->id, 'answer_text' => '1.000', 'is_correct' => true],
            ['question_id' => $questionD[5]->id, 'answer_text' => '10.000', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionD[6]->id, 'answer_text' => '1.000', 'is_correct' => false],
            ['question_id' => $questionD[6]->id, 'answer_text' => '100.000', 'is_correct' => false],
            ['question_id' => $questionD[6]->id, 'answer_text' => '10.000', 'is_correct' => true],
            ['question_id' => $questionD[6]->id, 'answer_text' => '1.000.000', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionD[7]->id, 'answer_text' => 'cik', 'is_correct' => false],
            ['question_id' => $questionD[7]->id, 'answer_text' => 'êk', 'is_correct' => true],
            ['question_id' => $questionD[7]->id, 'answer_text' => 'cêk', 'is_correct' => false],
            ['question_id' => $questionD[7]->id, 'answer_text' => 'chêk', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionD[8]->id, 'answer_text' => 'êk', 'is_correct' => false],
            ['question_id' => $questionD[8]->id, 'answer_text' => 'pêk', 'is_correct' => false],
            ['question_id' => $questionD[8]->id, 'answer_text' => 'puêk', 'is_correct' => true],
            ['question_id' => $questionD[8]->id, 'answer_text' => 'chêk', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionD[9]->id, 'answer_text' => 'khang', 'is_correct' => false],
            ['question_id' => $questionD[9]->id, 'answer_text' => 'chêk', 'is_correct' => false],
            ['question_id' => $questionD[9]->id, 'answer_text' => 'puêk', 'is_correct' => false],
            ['question_id' => $questionD[9]->id, 'answer_text' => 'kao', 'is_correct' => true],

            // Question 11
            ['question_id' => $questionD[10]->id, 'answer_text' => 'cek', 'is_correct' => false],
            ['question_id' => $questionD[10]->id, 'answer_text' => 'no', 'is_correct' => false],
            ['question_id' => $questionD[10]->id, 'answer_text' => 'ji', 'is_correct' => true],
            ['question_id' => $questionD[10]->id, 'answer_text' => 'cap', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionD[11]->id, 'answer_text' => '150', 'is_correct' => false],
            ['question_id' => $questionD[11]->id, 'answer_text' => '156', 'is_correct' => true],
            ['question_id' => $questionD[11]->id, 'answer_text' => '160', 'is_correct' => false],
            ['question_id' => $questionD[11]->id, 'answer_text' => '165', 'is_correct' => false],

            // Question 13
            ['question_id' => $questionD[12]->id, 'answer_text' => 'pertama', 'is_correct' => false],
            ['question_id' => $questionD[12]->id, 'answer_text' => 'kedua', 'is_correct' => true],
            ['question_id' => $questionD[12]->id, 'answer_text' => 'keempat', 'is_correct' => false],
            ['question_id' => $questionD[12]->id, 'answer_text' => 'ketujuh', 'is_correct' => false],

            // Question 14
            ['question_id' => $questionD[13]->id, 'answer_text' => 'satu', 'is_correct' => false],
            ['question_id' => $questionD[13]->id, 'answer_text' => 'setengah', 'is_correct' => true],
            ['question_id' => $questionD[13]->id, 'answer_text' => 'sepertiga', 'is_correct' => false],
            ['question_id' => $questionD[13]->id, 'answer_text' => 'seperempat', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionD[14]->id, 'answer_text' => 'nomor 1', 'is_correct' => true],
            ['question_id' => $questionD[14]->id, 'answer_text' => 'nomor 2', 'is_correct' => false],
            ['question_id' => $questionD[14]->id, 'answer_text' => 'nomor 7', 'is_correct' => false],
            ['question_id' => $questionD[14]->id, 'answer_text' => 'nomor 8', 'is_correct' => false],
        ];
        foreach ($answersD as $answer) {
            Answer::create($answer);
        }

        // Topik E: Waktu
        $topicE = Topic::where('title', 'Waktu')->first();
        $quizE = Quiz::where('topic_id', $topicE->id)->first();
        $questionE = Question::where('quiz_id', $quizE->id)->orderBy('id')->get()->values();
        $answersE = [
            // Question 1
            ['question_id' => $questionE[0]->id, 'answer_text' => 'tahun 2006', 'is_correct' => false],
            ['question_id' => $questionE[0]->id, 'answer_text' => 'tahun 2026', 'is_correct' => true],
            ['question_id' => $questionE[0]->id, 'answer_text' => 'tahun 2060', 'is_correct' => false],
            ['question_id' => $questionE[0]->id, 'answer_text' => 'tahun 2062', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionE[1]->id, 'answer_text' => 'ku ca', 'is_correct' => false],
            ['question_id' => $questionE[1]->id, 'answer_text' => 'ci cung', 'is_correct' => false],
            ['question_id' => $questionE[1]->id, 'answer_text' => 'tang ê', 'is_correct' => true],
            ['question_id' => $questionE[1]->id, 'answer_text' => 'king ni', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionE[2]->id, 'answer_text' => 'Kamis', 'is_correct' => false],
            ['question_id' => $questionE[2]->id, 'answer_text' => 'Jumat', 'is_correct' => false],
            ['question_id' => $questionE[2]->id, 'answer_text' => 'Sabtu', 'is_correct' => false],
            ['question_id' => $questionE[2]->id, 'answer_text' => 'Minggu', 'is_correct' => true],

            // Question 4
            ['question_id' => $questionE[3]->id, 'answer_text' => 'bulan lalu', 'is_correct' => false],
            ['question_id' => $questionE[3]->id, 'answer_text' => 'bulan ini', 'is_correct' => false],
            ['question_id' => $questionE[3]->id, 'answer_text' => 'bulan depan', 'is_correct' => true],
            ['question_id' => $questionE[3]->id, 'answer_text' => '2 bulan lalu', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionE[4]->id, 'answer_text' => 'pagi', 'is_correct' => false],
            ['question_id' => $questionE[4]->id, 'answer_text' => 'siang/sore', 'is_correct' => false],
            ['question_id' => $questionE[4]->id, 'answer_text' => 'malam', 'is_correct' => true],
            ['question_id' => $questionE[4]->id, 'answer_text' => 'tengah malam', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionE[5]->id, 'answer_text' => 'hari ini', 'is_correct' => false],
            ['question_id' => $questionE[5]->id, 'answer_text' => 'kemarin', 'is_correct' => false],
            ['question_id' => $questionE[5]->id, 'answer_text' => 'lusa', 'is_correct' => true],
            ['question_id' => $questionE[5]->id, 'answer_text' => 'besok', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionE[6]->id, 'answer_text' => 'dulu', 'is_correct' => false],
            ['question_id' => $questionE[6]->id, 'answer_text' => 'nanti', 'is_correct' => false],
            ['question_id' => $questionE[6]->id, 'answer_text' => 'sekarang', 'is_correct' => true],
            ['question_id' => $questionE[6]->id, 'answer_text' => 'hari ini', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionE[7]->id, 'answer_text' => 'lusa', 'is_correct' => false],
            ['question_id' => $questionE[7]->id, 'answer_text' => 'hari ini', 'is_correct' => false],
            ['question_id' => $questionE[7]->id, 'answer_text' => 'kemarin', 'is_correct' => false],
            ['question_id' => $questionE[7]->id, 'answer_text' => 'dua hari lalu', 'is_correct' => true],

            // Question 9
            ['question_id' => $questionE[8]->id, 'answer_text' => 'ni', 'is_correct' => true],
            ['question_id' => $questionE[8]->id, 'answer_text' => 'guêk', 'is_correct' => false],
            ['question_id' => $questionE[8]->id, 'answer_text' => 'jik', 'is_correct' => false],
            ['question_id' => $questionE[8]->id, 'answer_text' => 'pai', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionE[9]->id, 'answer_text' => 'ni', 'is_correct' => false],
            ['question_id' => $questionE[9]->id, 'answer_text' => 'guêk', 'is_correct' => false],
            ['question_id' => $questionE[9]->id, 'answer_text' => 'jik', 'is_correct' => true],
            ['question_id' => $questionE[9]->id, 'answer_text' => 'pai', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionE[10]->id, 'answer_text' => 'ngou', 'is_correct' => true],
            ['question_id' => $questionE[10]->id, 'answer_text' => 'lak', 'is_correct' => false],
            ['question_id' => $questionE[10]->id, 'answer_text' => 'chêk', 'is_correct' => false],
            ['question_id' => $questionE[10]->id, 'answer_text' => 'puêk', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionE[11]->id, 'answer_text' => 'sa', 'is_correct' => false],
            ['question_id' => $questionE[11]->id, 'answer_text' => 'si', 'is_correct' => false],
            ['question_id' => $questionE[11]->id, 'answer_text' => 'ngou', 'is_correct' => false],
            ['question_id' => $questionE[11]->id, 'answer_text' => 'lak', 'is_correct' => true],

            // Question 13
            ['question_id' => $questionE[12]->id, 'answer_text' => 'jam 4 pagi', 'is_correct' => false],
            ['question_id' => $questionE[12]->id, 'answer_text' => 'jam 4.30 pagi', 'is_correct' => false],
            ['question_id' => $questionE[12]->id, 'answer_text' => 'jam 4 sore', 'is_correct' => false],
            ['question_id' => $questionE[12]->id, 'answer_text' => 'jam 4.30 sore', 'is_correct' => true],

            // Question 14
            ['question_id' => $questionE[13]->id, 'answer_text' => 'enam jam', 'is_correct' => false],
            ['question_id' => $questionE[13]->id, 'answer_text' => 'tujuh jam', 'is_correct' => true],
            ['question_id' => $questionE[13]->id, 'answer_text' => 'delapan jam', 'is_correct' => false],
            ['question_id' => $questionE[13]->id, 'answer_text' => 'sembilan jam', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionE[14]->id, 'answer_text' => 'lima puluh menit', 'is_correct' => false],
            ['question_id' => $questionE[14]->id, 'answer_text' => 'lima puluh enam menit', 'is_correct' => true],
            ['question_id' => $questionE[14]->id, 'answer_text' => 'enam puluh menit', 'is_correct' => false],
            ['question_id' => $questionE[14]->id, 'answer_text' => 'enam puluh lima menit', 'is_correct' => false],
        ];
        foreach ($answersE as $answer) {
            Answer::create($answer);
        }

        // Topik F: Anggota Tubuh
        $topicF = Topic::where('title', 'Anggota Tubuh')->first();
        $quizF = Quiz::where('topic_id', $topicF->id)->first();
        $questionF = Question::where('quiz_id', $quizF->id)->orderBy('id')->get()->values();
        $answersF = [
            // Question 1
            ['question_id' => $questionF[0]->id, 'answer_text' => 'rambut', 'is_correct' => false],
            ['question_id' => $questionF[0]->id, 'answer_text' => 'wajah', 'is_correct' => false],
            ['question_id' => $questionF[0]->id, 'answer_text' => 'kepala', 'is_correct' => true],
            ['question_id' => $questionF[0]->id, 'answer_text' => 'leher', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionF[1]->id, 'answer_text' => 'kha', 'is_correct' => false],
            ['question_id' => $questionF[1]->id, 'answer_text' => 'chiu', 'is_correct' => true],
            ['question_id' => $questionF[1]->id, 'answer_text' => 'tou', 'is_correct' => false],
            ['question_id' => $questionF[1]->id, 'answer_text' => 'hêng', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionF[2]->id, 'answer_text' => 'hidung', 'is_correct' => false],
            ['question_id' => $questionF[2]->id, 'answer_text' => 'mulut', 'is_correct' => false],
            ['question_id' => $questionF[2]->id, 'answer_text' => 'telinga', 'is_correct' => false],
            ['question_id' => $questionF[2]->id, 'answer_text' => 'mata', 'is_correct' => true],

            // Question 4
            ['question_id' => $questionF[3]->id, 'answer_text' => 'lidah', 'is_correct' => false],
            ['question_id' => $questionF[3]->id, 'answer_text' => 'hidung', 'is_correct' => true],
            ['question_id' => $questionF[3]->id, 'answer_text' => 'mulut', 'is_correct' => false],
            ['question_id' => $questionF[3]->id, 'answer_text' => 'leher', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionF[4]->id, 'answer_text' => 'mulut', 'is_correct' => false],
            ['question_id' => $questionF[4]->id, 'answer_text' => 'mata', 'is_correct' => false],
            ['question_id' => $questionF[4]->id, 'answer_text' => 'wajah', 'is_correct' => false],
            ['question_id' => $questionF[4]->id, 'answer_text' => 'rambut', 'is_correct' => true],

            // Question 6
            ['question_id' => $questionF[5]->id, 'answer_text' => 'kulit', 'is_correct' => false],
            ['question_id' => $questionF[5]->id, 'answer_text' => 'otak', 'is_correct' => false],
            ['question_id' => $questionF[5]->id, 'answer_text' => 'darah', 'is_correct' => true],
            ['question_id' => $questionF[5]->id, 'answer_text' => 'tulang', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionF[6]->id, 'answer_text' => 'chiu', 'is_correct' => false],
            ['question_id' => $questionF[6]->id, 'answer_text' => 'kha', 'is_correct' => true],
            ['question_id' => $questionF[6]->id, 'answer_text' => 'koi', 'is_correct' => false],
            ['question_id' => $questionF[6]->id, 'answer_text' => 'ceng', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionF[7]->id, 'answer_text' => 'nao', 'is_correct' => false],
            ['question_id' => $questionF[7]->id, 'answer_text' => 'sim', 'is_correct' => true],
            ['question_id' => $questionF[7]->id, 'answer_text' => 'kuk', 'is_correct' => false],
            ['question_id' => $questionF[7]->id, 'answer_text' => 'phuêi', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionF[8]->id, 'answer_text' => 'mak', 'is_correct' => false],
            ['question_id' => $questionF[8]->id, 'answer_text' => 'chiu', 'is_correct' => false],
            ['question_id' => $questionF[8]->id, 'answer_text' => 'koi', 'is_correct' => true],
            ['question_id' => $questionF[8]->id, 'answer_text' => 'kha', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionF[9]->id, 'answer_text' => 'hidung', 'is_correct' => false],
            ['question_id' => $questionF[9]->id, 'answer_text' => 'mata', 'is_correct' => false],
            ['question_id' => $questionF[9]->id, 'answer_text' => 'mulut', 'is_correct' => true],
            ['question_id' => $questionF[9]->id, 'answer_text' => 'telinga', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionF[10]->id, 'answer_text' => 'tangan', 'is_correct' => false],
            ['question_id' => $questionF[10]->id, 'answer_text' => 'perut', 'is_correct' => false],
            ['question_id' => $questionF[10]->id, 'answer_text' => 'kaki', 'is_correct' => true],
            ['question_id' => $questionF[10]->id, 'answer_text' => 'punggung', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionF[11]->id, 'answer_text' => 'kepala', 'is_correct' => false],
            ['question_id' => $questionF[11]->id, 'answer_text' => 'rambut', 'is_correct' => false],
            ['question_id' => $questionF[11]->id, 'answer_text' => 'wajah', 'is_correct' => true],
            ['question_id' => $questionF[11]->id, 'answer_text' => 'leher', 'is_correct' => false],
        ];
        foreach ($answersF as $answer) {
            Answer::create($answer);
        }

        // Topik G: Keluarga
        $topicG = Topic::where('title', 'Keluarga')->first();
        $quizG = Quiz::where('topic_id', $topicG->id)->first();
        $questionG = Question::where('quiz_id', $quizG->id)->orderBy('id')->get()->values();
        $answersG = [
            // Question 1
            ['question_id' => $questionG[0]->id, 'answer_text' => 'kakek', 'is_correct' => false],
            ['question_id' => $questionG[0]->id, 'answer_text' => 'ayah', 'is_correct' => true],
            ['question_id' => $questionG[0]->id, 'answer_text' => 'suami', 'is_correct' => false],
            ['question_id' => $questionG[0]->id, 'answer_text' => 'cucu', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionG[1]->id, 'answer_text' => 'ta pou kia', 'is_correct' => false],
            ['question_id' => $questionG[1]->id, 'answer_text' => 'ca bou kia', 'is_correct' => false],
            ['question_id' => $questionG[1]->id, 'answer_text' => 'kê thêng', 'is_correct' => true],
            ['question_id' => $questionG[1]->id, 'answer_text' => 'sung', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionG[2]->id, 'answer_text' => 'cucu', 'is_correct' => false],
            ['question_id' => $questionG[2]->id, 'answer_text' => 'kakek', 'is_correct' => true],
            ['question_id' => $questionG[2]->id, 'answer_text' => 'ayah', 'is_correct' => false],
            ['question_id' => $questionG[2]->id, 'answer_text' => 'suami', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionG[3]->id, 'answer_text' => 'ibu', 'is_correct' => false],
            ['question_id' => $questionG[3]->id, 'answer_text' => 'nenek', 'is_correct' => false],
            ['question_id' => $questionG[3]->id, 'answer_text' => 'cucu', 'is_correct' => false],
            ['question_id' => $questionG[3]->id, 'answer_text' => 'istri', 'is_correct' => true],

            // Question 5
            ['question_id' => $questionG[4]->id, 'answer_text' => 'paman (kakak laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionG[4]->id, 'answer_text' => 'paman (adik laki-laki ayah)', 'is_correct' => true],
            ['question_id' => $questionG[4]->id, 'answer_text' => 'paman (suami saudari ayah/ibu)', 'is_correct' => false],
            ['question_id' => $questionG[4]->id, 'answer_text' => 'paman (saudara ibu)', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionG[5]->id, 'answer_text' => 'cucu', 'is_correct' => true],
            ['question_id' => $questionG[5]->id, 'answer_text' => 'suami', 'is_correct' => false],
            ['question_id' => $questionG[5]->id, 'answer_text' => 'istri', 'is_correct' => false],
            ['question_id' => $questionG[5]->id, 'answer_text' => 'ibu', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionG[6]->id, 'answer_text' => 'bibi (istri kakak laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionG[6]->id, 'answer_text' => 'bibi (istri adik laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionG[6]->id, 'answer_text' => 'bibi (saudari ayah)', 'is_correct' => false],
            ['question_id' => $questionG[6]->id, 'answer_text' => 'bibi (saudari ibu)', 'is_correct' => true],

            // Question 8
            ['question_id' => $questionG[7]->id, 'answer_text' => 'cê', 'is_correct' => false],
            ['question_id' => $questionG[7]->id, 'answer_text' => 'moi', 'is_correct' => true],
            ['question_id' => $questionG[7]->id, 'answer_text' => 'sim', 'is_correct' => false],
            ['question_id' => $questionG[7]->id, 'answer_text' => 'kim', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionG[8]->id, 'answer_text' => 'sung', 'is_correct' => false],
            ['question_id' => $questionG[8]->id, 'answer_text' => 'ang', 'is_correct' => false],
            ['question_id' => $questionG[8]->id, 'answer_text' => 'kia', 'is_correct' => true],
            ['question_id' => $questionG[8]->id, 'answer_text' => 'hia', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionG[9]->id, 'answer_text' => 'sim', 'is_correct' => false],
            ['question_id' => $questionG[9]->id, 'answer_text' => 'kou', 'is_correct' => true],
            ['question_id' => $questionG[9]->id, 'answer_text' => 'em', 'is_correct' => false],
            ['question_id' => $questionG[9]->id, 'answer_text' => 'yi', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionG[10]->id, 'answer_text' => 'êm', 'is_correct' => false],
            ['question_id' => $questionG[10]->id, 'answer_text' => 'kou', 'is_correct' => false],
            ['question_id' => $questionG[10]->id, 'answer_text' => 'moi', 'is_correct' => false],
            ['question_id' => $questionG[10]->id, 'answer_text' => 'ma', 'is_correct' => true],

            // Question 12
            ['question_id' => $questionG[11]->id, 'answer_text' => 'cucu', 'is_correct' => false],
            ['question_id' => $questionG[11]->id, 'answer_text' => 'anak perempuan', 'is_correct' => true],
            ['question_id' => $questionG[11]->id, 'answer_text' => 'kakak perempuan', 'is_correct' => false],
            ['question_id' => $questionG[11]->id, 'answer_text' => 'adik perempuan', 'is_correct' => false],

            // Question 13
            ['question_id' => $questionG[12]->id, 'answer_text' => 'paman (kakak laki-laki ayah)', 'is_correct' => true],
            ['question_id' => $questionG[12]->id, 'answer_text' => 'paman (adik laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionG[12]->id, 'answer_text' => 'paman (suami saudari ayah/ibu)', 'is_correct' => false],
            ['question_id' => $questionG[12]->id, 'answer_text' => 'paman (saudara ibu)', 'is_correct' => false],

            // Question 14
            ['question_id' => $questionG[13]->id, 'answer_text' => 'suami', 'is_correct' => true],
            ['question_id' => $questionG[13]->id, 'answer_text' => 'cucu', 'is_correct' => false],
            ['question_id' => $questionG[13]->id, 'answer_text' => 'ayah', 'is_correct' => false],
            ['question_id' => $questionG[13]->id, 'answer_text' => 'kakek', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionG[14]->id, 'answer_text' => 'paman (kakak laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionG[14]->id, 'answer_text' => 'paman (adik laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionG[14]->id, 'answer_text' => 'paman (suami saudari ayah/ibu)', 'is_correct' => true],
            ['question_id' => $questionG[14]->id, 'answer_text' => 'paman (saudara ibu)', 'is_correct' => false],
        ];
        foreach ($answersG as $answer) {
            Answer::create($answer);
        }

        // Topik H: Rumah
        $topicH = Topic::where('title', 'Rumah')->first();
        $quizH = Quiz::where('topic_id', $topicH->id)->first();
        $questionH = Question::where('quiz_id', $quizH->id)->orderBy('id')->get()->values();
        $answersH = [
            // Question 1
            ['question_id' => $questionH[0]->id, 'answer_text' => 'dinding', 'is_correct' => false],
            ['question_id' => $questionH[0]->id, 'answer_text' => 'meja', 'is_correct' => false],
            ['question_id' => $questionH[0]->id, 'answer_text' => 'rumah', 'is_correct' => true],
            ['question_id' => $questionH[0]->id, 'answer_text' => 'gelas', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionH[1]->id, 'answer_text' => 'thia', 'is_correct' => false],
            ['question_id' => $questionH[1]->id, 'answer_text' => 'huêi sêk', 'is_correct' => false],
            ['question_id' => $questionH[1]->id, 'answer_text' => 'êk pê', 'is_correct' => false],
            ['question_id' => $questionH[1]->id, 'answer_text' => 'phang kêng', 'is_correct' => true],

            // Question 3
            ['question_id' => $questionH[2]->id, 'answer_text' => 'piring', 'is_correct' => false],
            ['question_id' => $questionH[2]->id, 'answer_text' => 'gelas', 'is_correct' => false],
            ['question_id' => $questionH[2]->id, 'answer_text' => 'panci', 'is_correct' => true],
            ['question_id' => $questionH[2]->id, 'answer_text' => 'mangkuk', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionH[3]->id, 'answer_text' => 'pintu', 'is_correct' => false],
            ['question_id' => $questionH[3]->id, 'answer_text' => 'dinding', 'is_correct' => false],
            ['question_id' => $questionH[3]->id, 'answer_text' => 'tirai', 'is_correct' => false],
            ['question_id' => $questionH[3]->id, 'answer_text' => 'jendela', 'is_correct' => true],

            // Question 5
            ['question_id' => $questionH[4]->id, 'answer_text' => 'bantal', 'is_correct' => false],
            ['question_id' => $questionH[4]->id, 'answer_text' => 'selimut', 'is_correct' => false],
            ['question_id' => $questionH[4]->id, 'answer_text' => 'kasur', 'is_correct' => true],
            ['question_id' => $questionH[4]->id, 'answer_text' => 'seprai', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionH[5]->id, 'answer_text' => 'lampu', 'is_correct' => false],
            ['question_id' => $questionH[5]->id, 'answer_text' => 'meja', 'is_correct' => false],
            ['question_id' => $questionH[5]->id, 'answer_text' => 'sofa', 'is_correct' => false],
            ['question_id' => $questionH[5]->id, 'answer_text' => 'kursi', 'is_correct' => true],

            // Question 7
            ['question_id' => $questionH[6]->id, 'answer_text' => 'pisau', 'is_correct' => false],
            ['question_id' => $questionH[6]->id, 'answer_text' => 'sumpit', 'is_correct' => false],
            ['question_id' => $questionH[6]->id, 'answer_text' => 'sendok', 'is_correct' => false],
            ['question_id' => $questionH[6]->id, 'answer_text' => 'garpu', 'is_correct' => true],

            // Question 8
            ['question_id' => $questionH[7]->id, 'answer_text' => 'têng', 'is_correct' => false],
            ['question_id' => $questionH[7]->id, 'answer_text' => 'thui', 'is_correct' => true],
            ['question_id' => $questionH[7]->id, 'answer_text' => 'kêng', 'is_correct' => false],
            ['question_id' => $questionH[7]->id, 'answer_text' => 'ê', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionH[8]->id, 'answer_text' => 'pou', 'is_correct' => false],
            ['question_id' => $questionH[8]->id, 'answer_text' => 'phuêi', 'is_correct' => false],
            ['question_id' => $questionH[8]->id, 'answer_text' => 'thao', 'is_correct' => true],
            ['question_id' => $questionH[8]->id, 'answer_text' => 'si', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionH[9]->id, 'answer_text' => 'huang', 'is_correct' => false],
            ['question_id' => $questionH[9]->id, 'answer_text' => 'nê', 'is_correct' => false],
            ['question_id' => $questionH[9]->id, 'answer_text' => 'tiang', 'is_correct' => true],
            ['question_id' => $questionH[9]->id, 'answer_text' => 'seng', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionH[10]->id, 'answer_text' => 'thao', 'is_correct' => true],
            ['question_id' => $questionH[10]->id, 'answer_text' => 'si', 'is_correct' => false],
            ['question_id' => $questionH[10]->id, 'answer_text' => 'mung', 'is_correct' => false],
            ['question_id' => $questionH[10]->id, 'answer_text' => 'thêng', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionH[11]->id, 'answer_text' => 'kamar', 'is_correct' => false],
            ['question_id' => $questionH[11]->id, 'answer_text' => 'dapur', 'is_correct' => false],
            ['question_id' => $questionH[11]->id, 'answer_text' => 'ruang tamu', 'is_correct' => false],
            ['question_id' => $questionH[11]->id, 'answer_text' => 'kamar mandi', 'is_correct' => true],

            // Question 13
            ['question_id' => $questionH[12]->id, 'answer_text' => 'lantai bawah', 'is_correct' => false],
            ['question_id' => $questionH[12]->id, 'answer_text' => 'lantai pertama', 'is_correct' => false],
            ['question_id' => $questionH[12]->id, 'answer_text' => 'lantai kedua', 'is_correct' => false],
            ['question_id' => $questionH[12]->id, 'answer_text' => 'lantai atas', 'is_correct' => true],

            // Question 14
            ['question_id' => $questionH[13]->id, 'answer_text' => 'AC', 'is_correct' => false],
            ['question_id' => $questionH[13]->id, 'answer_text' => 'kipas angin', 'is_correct' => false],
            ['question_id' => $questionH[13]->id, 'answer_text' => 'kulkas', 'is_correct' => true],
            ['question_id' => $questionH[13]->id, 'answer_text' => 'televisi', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionH[14]->id, 'answer_text' => 'sumpit', 'is_correct' => false],
            ['question_id' => $questionH[14]->id, 'answer_text' => 'pisau', 'is_correct' => false],
            ['question_id' => $questionH[14]->id, 'answer_text' => 'garpu', 'is_correct' => false],
            ['question_id' => $questionH[14]->id, 'answer_text' => 'sendok', 'is_correct' => true],
        ];
        foreach ($answersH as $answer) {
            Answer::create($answer);
        }

        // Topik I: Pekerjaan
        $topicI = Topic::where('title', 'Pekerjaan')->first();
        $quizI = Quiz::where('topic_id', $topicI->id)->first();
        $questionI = Question::where('quiz_id', $quizI->id)->orderBy('id')->get()->values();
        $answersI = [
            // Question 1
            ['question_id' => $questionI[0]->id, 'answer_text' => 'perawat', 'is_correct' => false],
            ['question_id' => $questionI[0]->id, 'answer_text' => 'dokter', 'is_correct' => true],
            ['question_id' => $questionI[0]->id, 'answer_text' => 'apoteker', 'is_correct' => false],
            ['question_id' => $questionI[0]->id, 'answer_text' => 'insinyur', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionI[1]->id, 'answer_text' => 'lok se', 'is_correct' => false],
            ['question_id' => $questionI[1]->id, 'answer_text' => 'ching pia', 'is_correct' => true],
            ['question_id' => $questionI[1]->id, 'answer_text' => 'cak cia', 'is_correct' => false],
            ['question_id' => $questionI[1]->id, 'answer_text' => 'ki cia', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionI[2]->id, 'answer_text' => 'karyawan', 'is_correct' => false],
            ['question_id' => $questionI[2]->id, 'answer_text' => 'petani', 'is_correct' => false],
            ['question_id' => $questionI[2]->id, 'answer_text' => 'pengusaha', 'is_correct' => true],
            ['question_id' => $questionI[2]->id, 'answer_text' => 'nelayan', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionI[3]->id, 'answer_text' => 'petani', 'is_correct' => false],
            ['question_id' => $questionI[3]->id, 'answer_text' => 'nelayan', 'is_correct' => false],
            ['question_id' => $questionI[3]->id, 'answer_text' => 'pengacara', 'is_correct' => false],
            ['question_id' => $questionI[3]->id, 'answer_text' => 'juru masak', 'is_correct' => true],

            // Question 5
            ['question_id' => $questionI[4]->id, 'answer_text' => 'penulis', 'is_correct' => false],
            ['question_id' => $questionI[4]->id, 'answer_text' => 'jurnalis', 'is_correct' => false],
            ['question_id' => $questionI[4]->id, 'answer_text' => 'guru', 'is_correct' => true],
            ['question_id' => $questionI[4]->id, 'answer_text' => 'insinyur', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionI[5]->id, 'answer_text' => 'lok', 'is_correct' => false],
            ['question_id' => $questionI[5]->id, 'answer_text' => 'yok ci', 'is_correct' => false],
            ['question_id' => $questionI[5]->id, 'answer_text' => 'hu', 'is_correct' => true],
            ['question_id' => $questionI[5]->id, 'answer_text' => 'kang thia', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionI[6]->id, 'answer_text' => 'cak', 'is_correct' => false],
            ['question_id' => $questionI[6]->id, 'answer_text' => 'ki', 'is_correct' => true],
            ['question_id' => $questionI[6]->id, 'answer_text' => 'lok', 'is_correct' => false],
            ['question_id' => $questionI[6]->id, 'answer_text' => 'huêi', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionI[7]->id, 'answer_text' => 'nang', 'is_correct' => false],
            ['question_id' => $questionI[7]->id, 'answer_text' => 'se', 'is_correct' => true],
            ['question_id' => $questionI[7]->id, 'answer_text' => 'cia', 'is_correct' => false],
            ['question_id' => $questionI[7]->id, 'answer_text' => 'thao', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionI[8]->id, 'answer_text' => 'sêng li', 'is_correct' => false],
            ['question_id' => $questionI[8]->id, 'answer_text' => 'co', 'is_correct' => false],
            ['question_id' => $questionI[8]->id, 'answer_text' => 'kang', 'is_correct' => true],
            ['question_id' => $questionI[8]->id, 'answer_text' => 'co chang', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionI[9]->id, 'answer_text' => 'dokter', 'is_correct' => false],
            ['question_id' => $questionI[9]->id, 'answer_text' => 'perawat', 'is_correct' => false],
            ['question_id' => $questionI[9]->id, 'answer_text' => 'apoteker', 'is_correct' => true],
            ['question_id' => $questionI[9]->id, 'answer_text' => 'insinyur', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionI[10]->id, 'answer_text' => 'petani', 'is_correct' => false],
            ['question_id' => $questionI[10]->id, 'answer_text' => 'sopir', 'is_correct' => true],
            ['question_id' => $questionI[10]->id, 'answer_text' => 'nelayan', 'is_correct' => false],
            ['question_id' => $questionI[10]->id, 'answer_text' => 'juru masak', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionI[11]->id, 'answer_text' => 'pilot', 'is_correct' => false],
            ['question_id' => $questionI[11]->id, 'answer_text' => 'insinyur', 'is_correct' => false],
            ['question_id' => $questionI[11]->id, 'answer_text' => 'pengacara', 'is_correct' => true],
            ['question_id' => $questionI[11]->id, 'answer_text' => 'penulis', 'is_correct' => false],
        ];
        foreach ($answersI as $answer) {
            Answer::create($answer);
        }

        // Topik J: Kata Sifat Umum
        $topicJ = Topic::where('title', 'Kata Sifat Umum')->first();
        $quizJ = Quiz::where('topic_id', $topicJ->id)->first();
        $questionJ = Question::where('quiz_id', $quizJ->id)->orderBy('id')->get()->values();
        $answersJ = [
            // Question 1
            ['question_id' => $questionJ[0]->id, 'answer_text' => 'kecil', 'is_correct' => false],
            ['question_id' => $questionJ[0]->id, 'answer_text' => 'besar', 'is_correct' => true],
            ['question_id' => $questionJ[0]->id, 'answer_text' => 'panjang', 'is_correct' => false],
            ['question_id' => $questionJ[0]->id, 'answer_text' => 'pendek', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionJ[1]->id, 'answer_text' => 'phi', 'is_correct' => false],
            ['question_id' => $questionJ[1]->id, 'answer_text' => 'kui', 'is_correct' => true],
            ['question_id' => $questionJ[1]->id, 'answer_text' => 'coi', 'is_correct' => false],
            ['question_id' => $questionJ[1]->id, 'answer_text' => 'cio', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionJ[2]->id, 'answer_text' => 'lambat', 'is_correct' => false],
            ['question_id' => $questionJ[2]->id, 'answer_text' => 'jauh', 'is_correct' => false],
            ['question_id' => $questionJ[2]->id, 'answer_text' => 'cepat', 'is_correct' => true],
            ['question_id' => $questionJ[2]->id, 'answer_text' => 'dekat', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionJ[3]->id, 'answer_text' => 'bersih', 'is_correct' => false],
            ['question_id' => $questionJ[3]->id, 'answer_text' => 'kotor', 'is_correct' => true],
            ['question_id' => $questionJ[3]->id, 'answer_text' => 'baru', 'is_correct' => false],
            ['question_id' => $questionJ[3]->id, 'answer_text' => 'lama', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionJ[4]->id, 'answer_text' => 'buruk', 'is_correct' => false],
            ['question_id' => $questionJ[4]->id, 'answer_text' => 'lelah', 'is_correct' => true],
            ['question_id' => $questionJ[4]->id, 'answer_text' => 'sakit', 'is_correct' => false],
            ['question_id' => $questionJ[4]->id, 'answer_text' => 'senang', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionJ[5]->id, 'answer_text' => 'dekat', 'is_correct' => true],
            ['question_id' => $questionJ[5]->id, 'answer_text' => 'cepat', 'is_correct' => false],
            ['question_id' => $questionJ[5]->id, 'answer_text' => 'jauh', 'is_correct' => false],
            ['question_id' => $questionJ[5]->id, 'answer_text' => 'lambat', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionJ[6]->id, 'answer_text' => 'lak', 'is_correct' => false],
            ['question_id' => $questionJ[6]->id, 'answer_text' => 'lao', 'is_correct' => false],
            ['question_id' => $questionJ[6]->id, 'answer_text' => 'chêng', 'is_correct' => true],
            ['question_id' => $questionJ[6]->id, 'answer_text' => 'sêng', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionJ[7]->id, 'answer_text' => 'hêk', 'is_correct' => false],
            ['question_id' => $questionJ[7]->id, 'answer_text' => 'hi', 'is_correct' => true],
            ['question_id' => $questionJ[7]->id, 'answer_text' => 'ho', 'is_correct' => false],
            ['question_id' => $questionJ[7]->id, 'answer_text' => 'mo', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionJ[8]->id, 'answer_text' => 'keng', 'is_correct' => false],
            ['question_id' => $questionJ[8]->id, 'answer_text' => 'ngang', 'is_correct' => true],
            ['question_id' => $questionJ[8]->id, 'answer_text' => 'mang', 'is_correct' => false],
            ['question_id' => $questionJ[8]->id, 'answer_text' => 'teng', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionJ[9]->id, 'answer_text' => 'kecil', 'is_correct' => false],
            ['question_id' => $questionJ[9]->id, 'answer_text' => 'banyak', 'is_correct' => true],
            ['question_id' => $questionJ[9]->id, 'answer_text' => 'besar', 'is_correct' => false],
            ['question_id' => $questionJ[9]->id, 'answer_text' => 'sedikit', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionJ[10]->id, 'answer_text' => 'buruk', 'is_correct' => false],
            ['question_id' => $questionJ[10]->id, 'answer_text' => 'baik', 'is_correct' => false],
            ['question_id' => $questionJ[10]->id, 'answer_text' => 'panas', 'is_correct' => true],
            ['question_id' => $questionJ[10]->id, 'answer_text' => 'dingin', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionJ[11]->id, 'answer_text' => 'baru', 'is_correct' => true],
            ['question_id' => $questionJ[11]->id, 'answer_text' => 'lama', 'is_correct' => false],
            ['question_id' => $questionJ[11]->id, 'answer_text' => 'cepat', 'is_correct' => false],
            ['question_id' => $questionJ[11]->id, 'answer_text' => 'lambat', 'is_correct' => false],
        ];
        foreach ($answersJ as $answer) {
            Answer::create($answer);
        }

        // Topik K: Warna
        $topicK = Topic::where('title', 'Warna')->first();
        $quizK = Quiz::where('topic_id', $topicK->id)->first();
        $questionK = Question::where('quiz_id', $quizK->id)->orderBy('id')->get()->values();
        $answersK = [
            // Question 1
            ['question_id' => $questionK[0]->id, 'answer_text' => 'warna biru', 'is_correct' => false],
            ['question_id' => $questionK[0]->id, 'answer_text' => 'warna merah', 'is_correct' => true],
            ['question_id' => $questionK[0]->id, 'answer_text' => 'warna kuning', 'is_correct' => false],
            ['question_id' => $questionK[0]->id, 'answer_text' => 'warna hijau', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionK[1]->id, 'answer_text' => 'pêk sêk', 'is_correct' => false],
            ['question_id' => $questionK[1]->id, 'answer_text' => 'ng sêk', 'is_correct' => false],
            ['question_id' => $questionK[1]->id, 'answer_text' => 'ou sêk', 'is_correct' => true],
            ['question_id' => $questionK[1]->id, 'answer_text' => 'nam sêk', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionK[2]->id, 'answer_text' => 'warna ungu', 'is_correct' => false],
            ['question_id' => $questionK[2]->id, 'answer_text' => 'warna abu-abu', 'is_correct' => false],
            ['question_id' => $questionK[2]->id, 'answer_text' => 'warna pink', 'is_correct' => false],
            ['question_id' => $questionK[2]->id, 'answer_text' => 'warna hijau', 'is_correct' => true],

            // Question 4
            ['question_id' => $questionK[3]->id, 'answer_text' => 'warna abu-abu', 'is_correct' => false],
            ['question_id' => $questionK[3]->id, 'answer_text' => 'warna emas', 'is_correct' => true],
            ['question_id' => $questionK[3]->id, 'answer_text' => 'warna kuning', 'is_correct' => false],
            ['question_id' => $questionK[3]->id, 'answer_text' => 'warna hijau', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionK[4]->id, 'answer_text' => 'warna merah', 'is_correct' => false],
            ['question_id' => $questionK[4]->id, 'answer_text' => 'warna ungu', 'is_correct' => false],
            ['question_id' => $questionK[4]->id, 'answer_text' => 'warna pink', 'is_correct' => true],
            ['question_id' => $questionK[4]->id, 'answer_text' => 'warna kuning', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionK[5]->id, 'answer_text' => 'ng', 'is_correct' => false],
            ['question_id' => $questionK[5]->id, 'answer_text' => 'kim', 'is_correct' => false],
            ['question_id' => $questionK[5]->id, 'answer_text' => 'nam', 'is_correct' => true],
            ['question_id' => $questionK[5]->id, 'answer_text' => 'ang', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionK[6]->id, 'answer_text' => 'ng', 'is_correct' => true],
            ['question_id' => $questionK[6]->id, 'answer_text' => 'chê', 'is_correct' => false],
            ['question_id' => $questionK[6]->id, 'answer_text' => 'ou', 'is_correct' => false],
            ['question_id' => $questionK[6]->id, 'answer_text' => 'pêk', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionK[7]->id, 'answer_text' => 'kim', 'is_correct' => false],
            ['question_id' => $questionK[7]->id, 'answer_text' => 'ang', 'is_correct' => false],
            ['question_id' => $questionK[7]->id, 'answer_text' => 'pêk', 'is_correct' => true],
            ['question_id' => $questionK[7]->id, 'answer_text' => 'nam', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionK[8]->id, 'answer_text' => 'warna putih', 'is_correct' => false],
            ['question_id' => $questionK[8]->id, 'answer_text' => 'warna biru', 'is_correct' => false],
            ['question_id' => $questionK[8]->id, 'answer_text' => 'warna ungu', 'is_correct' => true],
            ['question_id' => $questionK[8]->id, 'answer_text' => 'warna hijau', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionK[9]->id, 'answer_text' => 'warna emas', 'is_correct' => false],
            ['question_id' => $questionK[9]->id, 'answer_text' => 'warna abu-abu', 'is_correct' => true],
            ['question_id' => $questionK[9]->id, 'answer_text' => 'warna pink', 'is_correct' => false],
            ['question_id' => $questionK[9]->id, 'answer_text' => 'warna hitam', 'is_correct' => false],
        ];
        foreach ($answersK as $answer) {
            Answer::create($answer);
        }

        // Topik L: Hewan
        $topicL = Topic::where('title', 'Hewan')->first();
        $quizL = Quiz::where('topic_id', $topicL->id)->first();
        $questionL = Question::where('quiz_id', $quizL->id)->orderBy('id')->get()->values();
        $answersL = [
            // Question 1
            ['question_id' => $questionL[0]->id, 'answer_text' => 'anjing', 'is_correct' => false],
            ['question_id' => $questionL[0]->id, 'answer_text' => 'tikus', 'is_correct' => false],
            ['question_id' => $questionL[0]->id, 'answer_text' => 'kelinci', 'is_correct' => false],
            ['question_id' => $questionL[0]->id, 'answer_text' => 'kucing', 'is_correct' => true],

            // Question 2
            ['question_id' => $questionL[1]->id, 'answer_text' => 'sai', 'is_correct' => false],
            ['question_id' => $questionL[1]->id, 'answer_text' => 'lang', 'is_correct' => false],
            ['question_id' => $questionL[1]->id, 'answer_text' => 'lao hou', 'is_correct' => true],
            ['question_id' => $questionL[1]->id, 'answer_text' => 'lao kao', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionL[2]->id, 'answer_text' => 'ayam', 'is_correct' => false],
            ['question_id' => $questionL[2]->id, 'answer_text' => 'bebek', 'is_correct' => false],
            ['question_id' => $questionL[2]->id, 'answer_text' => 'burung', 'is_correct' => true],
            ['question_id' => $questionL[2]->id, 'answer_text' => 'kelelawar', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionL[3]->id, 'answer_text' => 'lebah', 'is_correct' => false],
            ['question_id' => $questionL[3]->id, 'answer_text' => 'lalat', 'is_correct' => false],
            ['question_id' => $questionL[3]->id, 'answer_text' => 'nyamuk', 'is_correct' => false],
            ['question_id' => $questionL[3]->id, 'answer_text' => 'kupu-kupu', 'is_correct' => true],

            // Question 5
            ['question_id' => $questionL[4]->id, 'answer_text' => 'ular', 'is_correct' => false],
            ['question_id' => $questionL[4]->id, 'answer_text' => 'cicak', 'is_correct' => false],
            ['question_id' => $questionL[4]->id, 'answer_text' => 'kura-kura', 'is_correct' => false],
            ['question_id' => $questionL[4]->id, 'answer_text' => 'buaya', 'is_correct' => true],

            // Question 6
            ['question_id' => $questionL[5]->id, 'answer_text' => 'ikan', 'is_correct' => false],
            ['question_id' => $questionL[5]->id, 'answer_text' => 'cumi-cumi', 'is_correct' => false],
            ['question_id' => $questionL[5]->id, 'answer_text' => 'udang', 'is_correct' => false],
            ['question_id' => $questionL[5]->id, 'answer_text' => 'kepiting', 'is_correct' => true],

            // Question 7
            ['question_id' => $questionL[6]->id, 'answer_text' => 'monyet', 'is_correct' => false],
            ['question_id' => $questionL[6]->id, 'answer_text' => 'panda', 'is_correct' => false],
            ['question_id' => $questionL[6]->id, 'answer_text' => 'beruang', 'is_correct' => true],
            ['question_id' => $questionL[6]->id, 'answer_text' => 'rusa', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionL[7]->id, 'answer_text' => 'têk', 'is_correct' => false],
            ['question_id' => $questionL[7]->id, 'answer_text' => 'kao', 'is_correct' => true],
            ['question_id' => $questionL[7]->id, 'answer_text' => 'hou', 'is_correct' => false],
            ['question_id' => $questionL[7]->id, 'answer_text' => 'thou', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionL[8]->id, 'answer_text' => 'ngiao', 'is_correct' => false],
            ['question_id' => $questionL[8]->id, 'answer_text' => 'têk', 'is_correct' => true],
            ['question_id' => $questionL[8]->id, 'answer_text' => 'he', 'is_correct' => false],
            ['question_id' => $questionL[8]->id, 'answer_text' => 'him', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionL[9]->id, 'answer_text' => 'hê', 'is_correct' => false],
            ['question_id' => $questionL[9]->id, 'answer_text' => 'he', 'is_correct' => false],
            ['question_id' => $questionL[9]->id, 'answer_text' => 'ci', 'is_correct' => true],
            ['question_id' => $questionL[9]->id, 'answer_text' => 'cua', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionL[10]->id, 'answer_text' => 'bak', 'is_correct' => false],
            ['question_id' => $questionL[10]->id, 'answer_text' => 'jiu', 'is_correct' => true],
            ['question_id' => $questionL[10]->id, 'answer_text' => 'hoi', 'is_correct' => false],
            ['question_id' => $questionL[10]->id, 'answer_text' => 'ba', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionL[11]->id, 'answer_text' => 'kucing', 'is_correct' => false],
            ['question_id' => $questionL[11]->id, 'answer_text' => 'anjing', 'is_correct' => false],
            ['question_id' => $questionL[11]->id, 'answer_text' => 'tikus', 'is_correct' => true],
            ['question_id' => $questionL[11]->id, 'answer_text' => 'kelinci', 'is_correct' => false],

            // Question 13
            ['question_id' => $questionL[12]->id, 'answer_text' => 'kura-kura', 'is_correct' => false],
            ['question_id' => $questionL[12]->id, 'answer_text' => 'buaya', 'is_correct' => false],
            ['question_id' => $questionL[12]->id, 'answer_text' => 'cicak', 'is_correct' => false],
            ['question_id' => $questionL[12]->id, 'answer_text' => 'ular', 'is_correct' => true],

            // Question 14
            ['question_id' => $questionL[13]->id, 'answer_text' => 'cacing', 'is_correct' => false],
            ['question_id' => $questionL[13]->id, 'answer_text' => 'lalat', 'is_correct' => false],
            ['question_id' => $questionL[13]->id, 'answer_text' => 'lebah', 'is_correct' => false],
            ['question_id' => $questionL[13]->id, 'answer_text' => 'nyamuk', 'is_correct' => true],

            // Question 15
            ['question_id' => $questionL[14]->id, 'answer_text' => 'kelelawar', 'is_correct' => false],
            ['question_id' => $questionL[14]->id, 'answer_text' => 'kupu-kupu', 'is_correct' => false],
            ['question_id' => $questionL[14]->id, 'answer_text' => 'katak', 'is_correct' => false],
            ['question_id' => $questionL[14]->id, 'answer_text' => 'kecoak', 'is_correct' => true],
        ];
        foreach ($answersL as $answer) {
            Answer::create($answer);
        }

        // Topik M: Makanan & Minuman
        $topicM = Topic::where('title', 'Makanan & Minuman')->first();
        $quizM = Quiz::where('topic_id', $topicM->id)->first();
        $questionM = Question::where('quiz_id', $quizM->id)->orderBy('id')->get()->values();
        $answersM = [
            // Question 1
            ['question_id' => $questionM[0]->id, 'answer_text' => 'beras', 'is_correct' => false],
            ['question_id' => $questionM[0]->id, 'answer_text' => 'nasi', 'is_correct' => true],
            ['question_id' => $questionM[0]->id, 'answer_text' => 'bubur', 'is_correct' => false],
            ['question_id' => $questionM[0]->id, 'answer_text' => 'mi', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionM[1]->id, 'answer_text' => 'theng', 'is_correct' => true],
            ['question_id' => $questionM[1]->id, 'answer_text' => 'neng', 'is_correct' => false],
            ['question_id' => $questionM[1]->id, 'answer_text' => 'cui', 'is_correct' => false],
            ['question_id' => $questionM[1]->id, 'answer_text' => 'ciu', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionM[2]->id, 'answer_text' => 'asin', 'is_correct' => false],
            ['question_id' => $questionM[2]->id, 'answer_text' => 'pedas', 'is_correct' => false],
            ['question_id' => $questionM[2]->id, 'answer_text' => 'manis', 'is_correct' => true],
            ['question_id' => $questionM[2]->id, 'answer_text' => 'asam', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionM[3]->id, 'answer_text' => 'telur', 'is_correct' => false],
            ['question_id' => $questionM[3]->id, 'answer_text' => 'buah', 'is_correct' => false],
            ['question_id' => $questionM[3]->id, 'answer_text' => 'sayur', 'is_correct' => true],
            ['question_id' => $questionM[3]->id, 'answer_text' => 'kacang', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionM[4]->id, 'answer_text' => 'kopi', 'is_correct' => false],
            ['question_id' => $questionM[4]->id, 'answer_text' => 'susu', 'is_correct' => false],
            ['question_id' => $questionM[4]->id, 'answer_text' => 'air', 'is_correct' => false],
            ['question_id' => $questionM[4]->id, 'answer_text' => 'teh', 'is_correct' => true],

            // Question 6
            ['question_id' => $questionM[5]->id, 'answer_text' => 'beras', 'is_correct' => false],
            ['question_id' => $questionM[5]->id, 'answer_text' => 'roti', 'is_correct' => false],
            ['question_id' => $questionM[5]->id, 'answer_text' => 'bubur', 'is_correct' => true],
            ['question_id' => $questionM[5]->id, 'answer_text' => 'mi', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionM[6]->id, 'answer_text' => 'manis', 'is_correct' => false],
            ['question_id' => $questionM[6]->id, 'answer_text' => 'pedas', 'is_correct' => false],
            ['question_id' => $questionM[6]->id, 'answer_text' => 'asam', 'is_correct' => true],
            ['question_id' => $questionM[6]->id, 'answer_text' => 'pahit', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionM[7]->id, 'answer_text' => 'pêk', 'is_correct' => false],
            ['question_id' => $questionM[7]->id, 'answer_text' => 'ho', 'is_correct' => false],
            ['question_id' => $questionM[7]->id, 'answer_text' => 'mo', 'is_correct' => true],
            ['question_id' => $questionM[7]->id, 'answer_text' => 'tou', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionM[8]->id, 'answer_text' => 'koi', 'is_correct' => false],
            ['question_id' => $questionM[8]->id, 'answer_text' => 'gu', 'is_correct' => true],
            ['question_id' => $questionM[8]->id, 'answer_text' => 'yo', 'is_correct' => false],
            ['question_id' => $questionM[8]->id, 'answer_text' => 'ak', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionM[9]->id, 'answer_text' => 'bak', 'is_correct' => false],
            ['question_id' => $questionM[9]->id, 'answer_text' => 'ciak', 'is_correct' => false],
            ['question_id' => $questionM[9]->id, 'answer_text' => 'pa', 'is_correct' => false],
            ['question_id' => $questionM[9]->id, 'answer_text' => 'khung', 'is_correct' => true],

            // Question 11
            ['question_id' => $questionM[10]->id, 'answer_text' => 'te', 'is_correct' => false],
            ['question_id' => $questionM[10]->id, 'answer_text' => 'koi', 'is_correct' => true],
            ['question_id' => $questionM[10]->id, 'answer_text' => 'yo', 'is_correct' => false],
            ['question_id' => $questionM[10]->id, 'answer_text' => 'ak', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionM[11]->id, 'answer_text' => 'telur', 'is_correct' => true],
            ['question_id' => $questionM[11]->id, 'answer_text' => 'susu', 'is_correct' => false],
            ['question_id' => $questionM[11]->id, 'answer_text' => 'garam', 'is_correct' => false],
            ['question_id' => $questionM[11]->id, 'answer_text' => 'nasi', 'is_correct' => false],

            // Question 13
            ['question_id' => $questionM[12]->id, 'answer_text' => 'pahit', 'is_correct' => false],
            ['question_id' => $questionM[12]->id, 'answer_text' => 'tawar', 'is_correct' => false],
            ['question_id' => $questionM[12]->id, 'answer_text' => 'pedas', 'is_correct' => true],
            ['question_id' => $questionM[12]->id, 'answer_text' => 'asam', 'is_correct' => false],

            // Question 14
            ['question_id' => $questionM[13]->id, 'answer_text' => 'kopi', 'is_correct' => false],
            ['question_id' => $questionM[13]->id, 'answer_text' => 'susu', 'is_correct' => false],
            ['question_id' => $questionM[13]->id, 'answer_text' => 'air', 'is_correct' => true],
            ['question_id' => $questionM[13]->id, 'answer_text' => 'teh', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionM[14]->id, 'answer_text' => 'roti', 'is_correct' => false],
            ['question_id' => $questionM[14]->id, 'answer_text' => 'makanan laut', 'is_correct' => false],
            ['question_id' => $questionM[14]->id, 'answer_text' => 'buah', 'is_correct' => true],
            ['question_id' => $questionM[14]->id, 'answer_text' => 'minuman beralkohol', 'is_correct' => false],
        ];
        foreach ($answersM as $answer) {
            Answer::create($answer);
        }

        // Topik N: Sayuran
        $topicN = Topic::where('title', 'Sayuran')->first();
        $quizN = Quiz::where('topic_id', $topicN->id)->first();
        $questionN = Question::where('quiz_id', $quizN->id)->orderBy('id')->get()->values();
        $answersN = [
            // Question 1
            ['question_id' => $questionN[0]->id, 'answer_text' => 'selada', 'is_correct' => false],
            ['question_id' => $questionN[0]->id, 'answer_text' => 'kol', 'is_correct' => false],
            ['question_id' => $questionN[0]->id, 'answer_text' => 'sawi putih', 'is_correct' => false],
            ['question_id' => $questionN[0]->id, 'answer_text' => 'kangkung', 'is_correct' => true],

            // Question 2
            ['question_id' => $questionN[1]->id, 'answer_text' => 'chai huêi', 'is_correct' => false],
            ['question_id' => $questionN[1]->id, 'answer_text' => 'hai chai', 'is_correct' => false],
            ['question_id' => $questionN[1]->id, 'answer_text' => 'pêk chai', 'is_correct' => true],
            ['question_id' => $questionN[1]->id, 'answer_text' => 'phang chai', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionN[2]->id, 'answer_text' => 'wortel', 'is_correct' => false],
            ['question_id' => $questionN[2]->id, 'answer_text' => 'cabai', 'is_correct' => false],
            ['question_id' => $questionN[2]->id, 'answer_text' => 'terong', 'is_correct' => false],
            ['question_id' => $questionN[2]->id, 'answer_text' => 'tomat', 'is_correct' => true],

            // Question 4
            ['question_id' => $questionN[3]->id, 'answer_text' => 'kembang kol', 'is_correct' => false],
            ['question_id' => $questionN[3]->id, 'answer_text' => 'kol', 'is_correct' => true],
            ['question_id' => $questionN[3]->id, 'answer_text' => 'sawi putih', 'is_correct' => false],
            ['question_id' => $questionN[3]->id, 'answer_text' => 'brokoli', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionN[4]->id, 'answer_text' => 'kacang', 'is_correct' => false],
            ['question_id' => $questionN[4]->id, 'answer_text' => 'kacang panjang', 'is_correct' => true],
            ['question_id' => $questionN[4]->id, 'answer_text' => 'tauge', 'is_correct' => false],
            ['question_id' => $questionN[4]->id, 'answer_text' => 'jagung', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionN[5]->id, 'answer_text' => 'kia', 'is_correct' => false],
            ['question_id' => $questionN[5]->id, 'answer_text' => 'huêi', 'is_correct' => true],
            ['question_id' => $questionN[5]->id, 'answer_text' => 'gê', 'is_correct' => false],
            ['question_id' => $questionN[5]->id, 'answer_text' => 'thao', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionN[6]->id, 'answer_text' => 'chang', 'is_correct' => false],
            ['question_id' => $questionN[6]->id, 'answer_text' => 'huang', 'is_correct' => false],
            ['question_id' => $questionN[6]->id, 'answer_text' => 'ang', 'is_correct' => true],
            ['question_id' => $questionN[6]->id, 'answer_text' => 'seng', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionN[7]->id, 'answer_text' => 'chai', 'is_correct' => false],
            ['question_id' => $questionN[7]->id, 'answer_text' => 'seng', 'is_correct' => false],
            ['question_id' => $questionN[7]->id, 'answer_text' => 'chang', 'is_correct' => true],
            ['question_id' => $questionN[7]->id, 'answer_text' => 'tao', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionN[8]->id, 'answer_text' => 'chai', 'is_correct' => false],
            ['question_id' => $questionN[8]->id, 'answer_text' => 'gê', 'is_correct' => true],
            ['question_id' => $questionN[8]->id, 'answer_text' => 'kio', 'is_correct' => false],
            ['question_id' => $questionN[8]->id, 'answer_text' => 'huêi', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionN[9]->id, 'answer_text' => 'jagung', 'is_correct' => false],
            ['question_id' => $questionN[9]->id, 'answer_text' => 'wortel', 'is_correct' => false],
            ['question_id' => $questionN[9]->id, 'answer_text' => 'kentang', 'is_correct' => true],
            ['question_id' => $questionN[9]->id, 'answer_text' => 'kacang', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionN[10]->id, 'answer_text' => 'kacang', 'is_correct' => false],
            ['question_id' => $questionN[10]->id, 'answer_text' => 'cabai', 'is_correct' => true],
            ['question_id' => $questionN[10]->id, 'answer_text' => 'tomat', 'is_correct' => false],
            ['question_id' => $questionN[10]->id, 'answer_text' => 'terong', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionN[11]->id, 'answer_text' => 'bawang bombai', 'is_correct' => false],
            ['question_id' => $questionN[11]->id, 'answer_text' => 'bawang merah', 'is_correct' => false],
            ['question_id' => $questionN[11]->id, 'answer_text' => 'bawang putih', 'is_correct' => true],
            ['question_id' => $questionN[11]->id, 'answer_text' => 'daun bawang', 'is_correct' => false],
        ];
        foreach ($answersN as $answer) {
            Answer::create($answer);
        }

        // Topik O: Buah-Buahan
        $topicO = Topic::where('title', 'Buah-Buahan')->first();
        $quizO = Quiz::where('topic_id', $topicO->id)->first();
        $questionO = Question::where('quiz_id', $quizO->id)->orderBy('id')->get()->values();
        $answersO = [
            // Question 1
            ['question_id' => $questionO[0]->id, 'answer_text' => 'semangka', 'is_correct' => false],
            ['question_id' => $questionO[0]->id, 'answer_text' => 'apel', 'is_correct' => false],
            ['question_id' => $questionO[0]->id, 'answer_text' => 'pepaya', 'is_correct' => true],
            ['question_id' => $questionO[0]->id, 'answer_text' => 'nanas', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionO[1]->id, 'answer_text' => 'lai', 'is_correct' => false],
            ['question_id' => $questionO[1]->id, 'answer_text' => 'suai', 'is_correct' => false],
            ['question_id' => $questionO[1]->id, 'answer_text' => 'ka', 'is_correct' => true],
            ['question_id' => $questionO[1]->id, 'answer_text' => 'ya', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionO[2]->id, 'answer_text' => 'jeruk', 'is_correct' => false],
            ['question_id' => $questionO[2]->id, 'answer_text' => 'jeruk nipis', 'is_correct' => false],
            ['question_id' => $questionO[2]->id, 'answer_text' => 'lemon', 'is_correct' => true],
            ['question_id' => $questionO[2]->id, 'answer_text' => 'nanas', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionO[3]->id, 'answer_text' => 'semangka', 'is_correct' => false],
            ['question_id' => $questionO[3]->id, 'answer_text' => 'kelapa', 'is_correct' => false],
            ['question_id' => $questionO[3]->id, 'answer_text' => 'stroberi', 'is_correct' => false],
            ['question_id' => $questionO[3]->id, 'answer_text' => 'anggur', 'is_correct' => true],

            // Question 5
            ['question_id' => $questionO[4]->id, 'answer_text' => 'apel', 'is_correct' => false],
            ['question_id' => $questionO[4]->id, 'answer_text' => 'mangga', 'is_correct' => true],
            ['question_id' => $questionO[4]->id, 'answer_text' => 'pir', 'is_correct' => false],
            ['question_id' => $questionO[4]->id, 'answer_text' => 'pepaya', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionO[5]->id, 'answer_text' => 'ang', 'is_correct' => false],
            ['question_id' => $questionO[5]->id, 'answer_text' => 'seng', 'is_correct' => true],
            ['question_id' => $questionO[5]->id, 'answer_text' => 'lêng', 'is_correct' => false],
            ['question_id' => $questionO[5]->id, 'answer_text' => 'phêng', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionO[6]->id, 'answer_text' => 'kuêi', 'is_correct' => false],
            ['question_id' => $questionO[6]->id, 'answer_text' => 'lai', 'is_correct' => true],
            ['question_id' => $questionO[6]->id, 'answer_text' => 'ka', 'is_correct' => false],
            ['question_id' => $questionO[6]->id, 'answer_text' => 'buê', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionO[7]->id, 'answer_text' => 'lai', 'is_correct' => false],
            ['question_id' => $questionO[7]->id, 'answer_text' => 'ka', 'is_correct' => false],
            ['question_id' => $questionO[7]->id, 'answer_text' => 'buê', 'is_correct' => true],
            ['question_id' => $questionO[7]->id, 'answer_text' => 'kuêi', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionO[8]->id, 'answer_text' => 'seng', 'is_correct' => false],
            ['question_id' => $questionO[8]->id, 'answer_text' => 'si', 'is_correct' => true],
            ['question_id' => $questionO[8]->id, 'answer_text' => 'ang', 'is_correct' => false],
            ['question_id' => $questionO[8]->id, 'answer_text' => 'ni', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionO[9]->id, 'answer_text' => 'jeruk', 'is_correct' => false],
            ['question_id' => $questionO[9]->id, 'answer_text' => 'apel', 'is_correct' => true],
            ['question_id' => $questionO[9]->id, 'answer_text' => 'jeruk nipis', 'is_correct' => false],
            ['question_id' => $questionO[9]->id, 'answer_text' => 'pir', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionO[10]->id, 'answer_text' => 'nanas', 'is_correct' => false],
            ['question_id' => $questionO[10]->id, 'answer_text' => 'mangga', 'is_correct' => false],
            ['question_id' => $questionO[10]->id, 'answer_text' => 'pisang', 'is_correct' => true],
            ['question_id' => $questionO[10]->id, 'answer_text' => 'pepaya', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionO[11]->id, 'answer_text' => 'kelapa', 'is_correct' => false],
            ['question_id' => $questionO[11]->id, 'answer_text' => 'nanas', 'is_correct' => false],
            ['question_id' => $questionO[11]->id, 'answer_text' => 'mangga', 'is_correct' => false],
            ['question_id' => $questionO[11]->id, 'answer_text' => 'durian', 'is_correct' => true],
        ];
        foreach ($answersO as $answer) {
            Answer::create($answer);
        }

        // Topik P: Kata Kerja Dasar
        $topicP = Topic::where('title', 'Kata Kerja Dasar')->first();
        $quizP = Quiz::where('topic_id', $topicP->id)->first();
        $questionP = Question::where('quiz_id', $quizP->id)->orderBy('id')->get()->values();
        $answersP = [
            // Question 1
            ['question_id' => $questionP[0]->id, 'answer_text' => 'pergi', 'is_correct' => false],
            ['question_id' => $questionP[0]->id, 'answer_text' => 'datang', 'is_correct' => true],
            ['question_id' => $questionP[0]->id, 'answer_text' => 'pulang', 'is_correct' => false],
            ['question_id' => $questionP[0]->id, 'answer_text' => 'berjalan', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionP[1]->id, 'answer_text' => 'co', 'is_correct' => false],
            ['question_id' => $questionP[1]->id, 'answer_text' => 'uk', 'is_correct' => true],
            ['question_id' => $questionP[1]->id, 'answer_text' => 'khia', 'is_correct' => false],
            ['question_id' => $questionP[1]->id, 'answer_text' => 'teng', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionP[2]->id, 'answer_text' => 'melihat', 'is_correct' => false],
            ['question_id' => $questionP[2]->id, 'answer_text' => 'membaca', 'is_correct' => false],
            ['question_id' => $questionP[2]->id, 'answer_text' => 'mendengar', 'is_correct' => true],
            ['question_id' => $questionP[2]->id, 'answer_text' => 'berbicara', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionP[3]->id, 'answer_text' => 'menunggu', 'is_correct' => false],
            ['question_id' => $questionP[3]->id, 'answer_text' => 'mencari', 'is_correct' => false],
            ['question_id' => $questionP[3]->id, 'answer_text' => 'membantu', 'is_correct' => true],
            ['question_id' => $questionP[3]->id, 'answer_text' => 'menggunakan', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionP[4]->id, 'answer_text' => 'menunggu', 'is_correct' => false],
            ['question_id' => $questionP[4]->id, 'answer_text' => 'mencari', 'is_correct' => true],
            ['question_id' => $questionP[4]->id, 'answer_text' => 'membantu', 'is_correct' => false],
            ['question_id' => $questionP[4]->id, 'answer_text' => 'menggunakan', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionP[5]->id, 'answer_text' => 'berjalan', 'is_correct' => false],
            ['question_id' => $questionP[5]->id, 'answer_text' => 'berlari', 'is_correct' => false],
            ['question_id' => $questionP[5]->id, 'answer_text' => 'pergi', 'is_correct' => true],
            ['question_id' => $questionP[5]->id, 'answer_text' => 'pulang', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionP[6]->id, 'answer_text' => 'tertawa', 'is_correct' => false],
            ['question_id' => $questionP[6]->id, 'answer_text' => 'menangis', 'is_correct' => true],
            ['question_id' => $questionP[6]->id, 'answer_text' => 'berbicara', 'is_correct' => false],
            ['question_id' => $questionP[6]->id, 'answer_text' => 'bertanya', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionP[7]->id, 'answer_text' => 'kang', 'is_correct' => false],
            ['question_id' => $questionP[7]->id, 'answer_text' => 'chê', 'is_correct' => true],
            ['question_id' => $questionP[7]->id, 'answer_text' => 'uk', 'is_correct' => false],
            ['question_id' => $questionP[7]->id, 'answer_text' => 'hu', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionP[8]->id, 'answer_text' => 'thoi', 'is_correct' => false],
            ['question_id' => $questionP[8]->id, 'answer_text' => 'chêng', 'is_correct' => true],
            ['question_id' => $questionP[8]->id, 'answer_text' => 'yong', 'is_correct' => false],
            ['question_id' => $questionP[8]->id, 'answer_text' => 'chuêi', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionP[9]->id, 'answer_text' => 'co', 'is_correct' => false],
            ['question_id' => $questionP[9]->id, 'answer_text' => 'chuêi', 'is_correct' => false],
            ['question_id' => $questionP[9]->id, 'answer_text' => 'ok', 'is_correct' => true],
            ['question_id' => $questionP[9]->id, 'answer_text' => 'khok', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionP[10]->id, 'answer_text' => 'khe', 'is_correct' => false],
            ['question_id' => $questionP[10]->id, 'answer_text' => 'khiok', 'is_correct' => false],
            ['question_id' => $questionP[10]->id, 'answer_text' => 'cang', 'is_correct' => true],
            ['question_id' => $questionP[10]->id, 'answer_text' => 'yong', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionP[11]->id, 'answer_text' => 'pergi', 'is_correct' => false],
            ['question_id' => $questionP[11]->id, 'answer_text' => 'pulang', 'is_correct' => true],
            ['question_id' => $questionP[11]->id, 'answer_text' => 'berlari', 'is_correct' => false],
            ['question_id' => $questionP[11]->id, 'answer_text' => 'berjalan', 'is_correct' => false],

            // Question 13
            ['question_id' => $questionP[12]->id, 'answer_text' => 'membaca', 'is_correct' => false],
            ['question_id' => $questionP[12]->id, 'answer_text' => 'melihat', 'is_correct' => true],
            ['question_id' => $questionP[12]->id, 'answer_text' => 'berbicara', 'is_correct' => false],
            ['question_id' => $questionP[12]->id, 'answer_text' => 'mendengar', 'is_correct' => false],

            // Question 14
            ['question_id' => $questionP[13]->id, 'answer_text' => 'menjawab', 'is_correct' => false],
            ['question_id' => $questionP[13]->id, 'answer_text' => 'bertanya', 'is_correct' => true],
            ['question_id' => $questionP[13]->id, 'answer_text' => 'menunggu', 'is_correct' => false],
            ['question_id' => $questionP[13]->id, 'answer_text' => 'mencari', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionP[14]->id, 'answer_text' => 'tertawa', 'is_correct' => true],
            ['question_id' => $questionP[14]->id, 'answer_text' => 'menangis', 'is_correct' => false],
            ['question_id' => $questionP[14]->id, 'answer_text' => 'berbicara', 'is_correct' => false],
            ['question_id' => $questionP[14]->id, 'answer_text' => 'bertanya', 'is_correct' => false],
        ];
        foreach ($answersP as $answer) {
            Answer::create($answer);
        }

        // Topik Q: Tempat & Arah
        $topicQ = Topic::where('title', 'Tempat & Arah')->first();
        $quizQ = Quiz::where('topic_id', $topicQ->id)->first();
        $questionQ = Question::where('quiz_id', $quizQ->id)->orderBy('id')->get()->values();
        $answersQ = [
            // Question 1
            ['question_id' => $questionQ[0]->id, 'answer_text' => 'rumah', 'is_correct' => false],
            ['question_id' => $questionQ[0]->id, 'answer_text' => 'pasar', 'is_correct' => false],
            ['question_id' => $questionQ[0]->id, 'answer_text' => 'sekolah', 'is_correct' => true],
            ['question_id' => $questionQ[0]->id, 'answer_text' => 'toko', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionQ[1]->id, 'answer_text' => 'kong si', 'is_correct' => false],
            ['question_id' => $questionQ[1]->id, 'answer_text' => 'pa sak', 'is_correct' => true],
            ['question_id' => $questionQ[1]->id, 'answer_text' => 'ciak kuang', 'is_correct' => false],
            ['question_id' => $questionQ[1]->id, 'answer_text' => 'nging hang', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionQ[2]->id, 'answer_text' => 'kiri', 'is_correct' => true],
            ['question_id' => $questionQ[2]->id, 'answer_text' => 'kanan', 'is_correct' => false],
            ['question_id' => $questionQ[2]->id, 'answer_text' => 'depan', 'is_correct' => false],
            ['question_id' => $questionQ[2]->id, 'answer_text' => 'belakang', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionQ[3]->id, 'answer_text' => 'belakang', 'is_correct' => false],
            ['question_id' => $questionQ[3]->id, 'answer_text' => 'tengah', 'is_correct' => false],
            ['question_id' => $questionQ[3]->id, 'answer_text' => 'depan', 'is_correct' => true],
            ['question_id' => $questionQ[3]->id, 'answer_text' => 'atas', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionQ[4]->id, 'answer_text' => 'bawah', 'is_correct' => false],
            ['question_id' => $questionQ[4]->id, 'answer_text' => 'dalam', 'is_correct' => false],
            ['question_id' => $questionQ[4]->id, 'answer_text' => 'luar', 'is_correct' => false],
            ['question_id' => $questionQ[4]->id, 'answer_text' => 'atas', 'is_correct' => true],

            // Question 6
            ['question_id' => $questionQ[5]->id, 'answer_text' => 'toko', 'is_correct' => false],
            ['question_id' => $questionQ[5]->id, 'answer_text' => 'rumah', 'is_correct' => false],
            ['question_id' => $questionQ[5]->id, 'answer_text' => 'jalan', 'is_correct' => true],
            ['question_id' => $questionQ[5]->id, 'answer_text' => 'kantor', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionQ[6]->id, 'answer_text' => 'lai', 'is_correct' => false],
            ['question_id' => $questionQ[6]->id, 'answer_text' => 'teng', 'is_correct' => false],
            ['question_id' => $questionQ[6]->id, 'answer_text' => 'tiam', 'is_correct' => false],
            ['question_id' => $questionQ[6]->id, 'answer_text' => 'kuang', 'is_correct' => true],

            // Question 8
            ['question_id' => $questionQ[7]->id, 'answer_text' => 'gua', 'is_correct' => false],
            ['question_id' => $questionQ[7]->id, 'answer_text' => 'ci', 'is_correct' => true],
            ['question_id' => $questionQ[7]->id, 'answer_text' => 'hi', 'is_correct' => false],
            ['question_id' => $questionQ[7]->id, 'answer_text' => 'têk', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionQ[8]->id, 'answer_text' => 'lai', 'is_correct' => false],
            ['question_id' => $questionQ[8]->id, 'answer_text' => 'gua', 'is_correct' => false],
            ['question_id' => $questionQ[8]->id, 'answer_text' => 'cia', 'is_correct' => true],
            ['question_id' => $questionQ[8]->id, 'answer_text' => 'to', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionQ[9]->id, 'answer_text' => 'sekolah', 'is_correct' => false],
            ['question_id' => $questionQ[9]->id, 'answer_text' => 'bank', 'is_correct' => false],
            ['question_id' => $questionQ[9]->id, 'answer_text' => 'rumah sakit', 'is_correct' => true],
            ['question_id' => $questionQ[9]->id, 'answer_text' => 'kantor', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionQ[10]->id, 'answer_text' => 'kanan', 'is_correct' => false],
            ['question_id' => $questionQ[10]->id, 'answer_text' => 'kiri', 'is_correct' => false],
            ['question_id' => $questionQ[10]->id, 'answer_text' => 'depan', 'is_correct' => false],
            ['question_id' => $questionQ[10]->id, 'answer_text' => 'belakang', 'is_correct' => true],

            // Question 12
            ['question_id' => $questionQ[11]->id, 'answer_text' => 'atas', 'is_correct' => false],
            ['question_id' => $questionQ[11]->id, 'answer_text' => 'bawah', 'is_correct' => false],
            ['question_id' => $questionQ[11]->id, 'answer_text' => 'dalam', 'is_correct' => false],
            ['question_id' => $questionQ[11]->id, 'answer_text' => 'luar', 'is_correct' => true],
        ];
        foreach ($answersQ as $answer) {
            Answer::create($answer);
        }

        // Topik R: Transportasi
        $topicR = Topic::where('title', 'Transportasi')->first();
        $quizR = Quiz::where('topic_id', $topicR->id)->first();
        $questionR = Question::where('quiz_id', $quizR->id)->orderBy('id')->get()->values();
        $answersR = [
            // Question 1
            ['question_id' => $questionR[0]->id, 'answer_text' => 'pesawat', 'is_correct' => false],
            ['question_id' => $questionR[0]->id, 'answer_text' => 'kereta', 'is_correct' => false],
            ['question_id' => $questionR[0]->id, 'answer_text' => 'kapal', 'is_correct' => true],
            ['question_id' => $questionR[0]->id, 'answer_text' => 'bus', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionR[1]->id, 'answer_text' => 'mo to', 'is_correct' => false],
            ['question_id' => $questionR[1]->id, 'answer_text' => 'kha chia', 'is_correct' => false],
            ['question_id' => $questionR[1]->id, 'answer_text' => 'huêi chia', 'is_correct' => false],
            ['question_id' => $questionR[1]->id, 'answer_text' => 'têk si', 'is_correct' => true],

            // Question 3
            ['question_id' => $questionR[2]->id, 'answer_text' => 'kapal', 'is_correct' => false],
            ['question_id' => $questionR[2]->id, 'answer_text' => 'kereta', 'is_correct' => false],
            ['question_id' => $questionR[2]->id, 'answer_text' => 'bus', 'is_correct' => true],
            ['question_id' => $questionR[2]->id, 'answer_text' => 'taksi', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionR[3]->id, 'answer_text' => 'mobil', 'is_correct' => false],
            ['question_id' => $questionR[3]->id, 'answer_text' => 'sepeda', 'is_correct' => false],
            ['question_id' => $questionR[3]->id, 'answer_text' => 'kapal', 'is_correct' => false],
            ['question_id' => $questionR[3]->id, 'answer_text' => 'sepeda motor', 'is_correct' => true],

            // Question 5
            ['question_id' => $questionR[4]->id, 'answer_text' => 'huêi', 'is_correct' => false],
            ['question_id' => $questionR[4]->id, 'answer_text' => 'ba', 'is_correct' => false],
            ['question_id' => $questionR[4]->id, 'answer_text' => 'kha', 'is_correct' => true],
            ['question_id' => $questionR[4]->id, 'answer_text' => 'puêi', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionR[5]->id, 'answer_text' => 'puêi', 'is_correct' => true],
            ['question_id' => $questionR[5]->id, 'answer_text' => 'chia', 'is_correct' => false],
            ['question_id' => $questionR[5]->id, 'answer_text' => 'cung', 'is_correct' => false],
            ['question_id' => $questionR[5]->id, 'answer_text' => 'huêi', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionR[6]->id, 'answer_text' => 'kha', 'is_correct' => false],
            ['question_id' => $questionR[6]->id, 'answer_text' => 'ba', 'is_correct' => false],
            ['question_id' => $questionR[6]->id, 'answer_text' => 'huêi', 'is_correct' => true],
            ['question_id' => $questionR[6]->id, 'answer_text' => 'puêi', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionR[7]->id, 'answer_text' => 'sepeda', 'is_correct' => false],
            ['question_id' => $questionR[7]->id, 'answer_text' => 'sepeda motor', 'is_correct' => false],
            ['question_id' => $questionR[7]->id, 'answer_text' => 'bus', 'is_correct' => false],
            ['question_id' => $questionR[7]->id, 'answer_text' => 'mobil', 'is_correct' => true],

            // Question 9
            ['question_id' => $questionR[8]->id, 'answer_text' => 'pelabuhan', 'is_correct' => false],
            ['question_id' => $questionR[8]->id, 'answer_text' => 'halte', 'is_correct' => false],
            ['question_id' => $questionR[8]->id, 'answer_text' => 'bandara', 'is_correct' => true],
            ['question_id' => $questionR[8]->id, 'answer_text' => 'stasiun', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionR[9]->id, 'answer_text' => 'stasiun', 'is_correct' => false],
            ['question_id' => $questionR[9]->id, 'answer_text' => 'bandara', 'is_correct' => false],
            ['question_id' => $questionR[9]->id, 'answer_text' => 'halte', 'is_correct' => false],
            ['question_id' => $questionR[9]->id, 'answer_text' => 'pelabuhan', 'is_correct' => true],
        ];
        foreach ($answersR as $answer) {
            Answer::create($answer);
        }
    }
}
