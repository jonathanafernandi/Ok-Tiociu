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
            ['question_id' => $questionA[5]->id, 'answer_text' => 'lê', 'is_correct' => false],
            ['question_id' => $questionA[5]->id, 'answer_text' => 'wa', 'is_correct' => true],
            ['question_id' => $questionA[5]->id, 'answer_text' => 'ning', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionA[6]->id, 'answer_text' => 'ki', 'is_correct' => false],
            ['question_id' => $questionA[6]->id, 'answer_text' => 'nang', 'is_correct' => true],
            ['question_id' => $questionA[6]->id, 'answer_text' => 'wa', 'is_correct' => false],
            ['question_id' => $questionA[6]->id, 'answer_text' => 'lê', 'is_correct' => false],

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
            ['question_id' => $questionB[1]->id, 'answer_text' => 'tui êm cu', 'is_correct' => true],
            ['question_id' => $questionB[1]->id, 'answer_text' => 'boe co ni', 'is_correct' => false],
            ['question_id' => $questionB[1]->id, 'answer_text' => 'lê ho', 'is_correct' => false],

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
            ['question_id' => $questionB[4]->id, 'answer_text' => 'yi tidak mengerti', 'is_correct' => false],

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
            ['question_id' => $questionB[7]->id, 'answer_text' => 'lê', 'is_correct' => true],
            ['question_id' => $questionB[7]->id, 'answer_text' => 'yi', 'is_correct' => false],
            ['question_id' => $questionB[7]->id, 'answer_text' => 'ning', 'is_correct' => false],
            ['question_id' => $questionB[7]->id, 'answer_text' => 'wa', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionB[8]->id, 'answer_text' => 'cai', 'is_correct' => false],
            ['question_id' => $questionB[8]->id, 'answer_text' => 'ki tek', 'is_correct' => false],
            ['question_id' => $questionB[8]->id, 'answer_text' => 'si', 'is_correct' => true],
            ['question_id' => $questionB[8]->id, 'answer_text' => 'pak', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionB[9]->id, 'answer_text' => 'cai', 'is_correct' => false],
            ['question_id' => $questionB[9]->id, 'answer_text' => 'tong', 'is_correct' => false],
            ['question_id' => $questionB[9]->id, 'answer_text' => 'pak', 'is_correct' => false],
            ['question_id' => $questionB[9]->id, 'answer_text' => 'sai', 'is_correct' => true],

            // Question 11
            ['question_id' => $questionB[10]->id, 'answer_text' => 'boe', 'is_correct' => false],
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
            ['question_id' => $questionC[3]->id, 'answer_text' => 'muek', 'is_correct' => false],
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
            ['question_id' => $questionD[0]->id, 'answer_text' => 'chek', 'is_correct' => true],
            ['question_id' => $questionD[0]->id, 'answer_text' => 'puek', 'is_correct' => false],
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
            ['question_id' => $questionD[7]->id, 'answer_text' => 'ek', 'is_correct' => true],
            ['question_id' => $questionD[7]->id, 'answer_text' => 'cek', 'is_correct' => false],
            ['question_id' => $questionD[7]->id, 'answer_text' => 'chek', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionD[8]->id, 'answer_text' => 'ek', 'is_correct' => false],
            ['question_id' => $questionD[8]->id, 'answer_text' => 'pek', 'is_correct' => false],
            ['question_id' => $questionD[8]->id, 'answer_text' => 'puek', 'is_correct' => true],
            ['question_id' => $questionD[8]->id, 'answer_text' => 'chek', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionD[9]->id, 'answer_text' => 'khang', 'is_correct' => false],
            ['question_id' => $questionD[9]->id, 'answer_text' => 'chek', 'is_correct' => false],
            ['question_id' => $questionD[9]->id, 'answer_text' => 'puek', 'is_correct' => false],
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
            ['question_id' => $questionE[1]->id, 'answer_text' => 'tang e', 'is_correct' => true],
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
            ['question_id' => $questionE[8]->id, 'answer_text' => 'guek', 'is_correct' => false],
            ['question_id' => $questionE[8]->id, 'answer_text' => 'jik', 'is_correct' => false],
            ['question_id' => $questionE[8]->id, 'answer_text' => 'pai', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionE[9]->id, 'answer_text' => 'ni', 'is_correct' => false],
            ['question_id' => $questionE[9]->id, 'answer_text' => 'guek', 'is_correct' => false],
            ['question_id' => $questionE[9]->id, 'answer_text' => 'jik', 'is_correct' => true],
            ['question_id' => $questionE[9]->id, 'answer_text' => 'pai', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionE[10]->id, 'answer_text' => 'ngou', 'is_correct' => true],
            ['question_id' => $questionE[10]->id, 'answer_text' => 'lak', 'is_correct' => false],
            ['question_id' => $questionE[10]->id, 'answer_text' => 'chek', 'is_correct' => false],
            ['question_id' => $questionE[10]->id, 'answer_text' => 'puek', 'is_correct' => false],

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

        // Topik F: Keluarga
        $topicF = Topic::where('title', 'Keluarga')->first();
        $quizF = Quiz::where('topic_id', $topicF->id)->first();
        $questionF = Question::where('quiz_id', $quizF->id)->orderBy('id')->get()->values();
        $answersF = [
            // Question 1
            ['question_id' => $questionF[0]->id, 'answer_text' => 'kakek', 'is_correct' => false],
            ['question_id' => $questionF[0]->id, 'answer_text' => 'ayah', 'is_correct' => true],
            ['question_id' => $questionF[0]->id, 'answer_text' => 'suami', 'is_correct' => false],
            ['question_id' => $questionF[0]->id, 'answer_text' => 'cucu', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionF[1]->id, 'answer_text' => 'ta pou kia', 'is_correct' => false],
            ['question_id' => $questionF[1]->id, 'answer_text' => 'ca bou kia', 'is_correct' => false],
            ['question_id' => $questionF[1]->id, 'answer_text' => 'ke theng', 'is_correct' => true],
            ['question_id' => $questionF[1]->id, 'answer_text' => 'sung', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionF[2]->id, 'answer_text' => 'cucu', 'is_correct' => false],
            ['question_id' => $questionF[2]->id, 'answer_text' => 'kakek', 'is_correct' => true],
            ['question_id' => $questionF[2]->id, 'answer_text' => 'ayah', 'is_correct' => false],
            ['question_id' => $questionF[2]->id, 'answer_text' => 'suami', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionF[3]->id, 'answer_text' => 'ibu', 'is_correct' => false],
            ['question_id' => $questionF[3]->id, 'answer_text' => 'nenek', 'is_correct' => false],
            ['question_id' => $questionF[3]->id, 'answer_text' => 'cucu', 'is_correct' => false],
            ['question_id' => $questionF[3]->id, 'answer_text' => 'istri', 'is_correct' => true],

            // Question 5
            ['question_id' => $questionF[4]->id, 'answer_text' => 'paman (kakak laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionF[4]->id, 'answer_text' => 'paman (adik laki-laki ayah)', 'is_correct' => true],
            ['question_id' => $questionF[4]->id, 'answer_text' => 'paman (suami saudari ayah/ibu)', 'is_correct' => false],
            ['question_id' => $questionF[4]->id, 'answer_text' => 'paman (saudara ibu)', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionF[5]->id, 'answer_text' => 'cucu', 'is_correct' => true],
            ['question_id' => $questionF[5]->id, 'answer_text' => 'suami', 'is_correct' => false],
            ['question_id' => $questionF[5]->id, 'answer_text' => 'istri', 'is_correct' => false],
            ['question_id' => $questionF[5]->id, 'answer_text' => 'ibu', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionF[6]->id, 'answer_text' => 'bibi (istri kakak laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionF[6]->id, 'answer_text' => 'bibi (istri adik laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionF[6]->id, 'answer_text' => 'bibi (saudari ayah)', 'is_correct' => false],
            ['question_id' => $questionF[6]->id, 'answer_text' => 'bibi (saudari ibu)', 'is_correct' => true],

            // Question 8
            ['question_id' => $questionF[7]->id, 'answer_text' => 'ce', 'is_correct' => false],
            ['question_id' => $questionF[7]->id, 'answer_text' => 'moi', 'is_correct' => true],
            ['question_id' => $questionF[7]->id, 'answer_text' => 'sim', 'is_correct' => false],
            ['question_id' => $questionF[7]->id, 'answer_text' => 'kim', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionF[8]->id, 'answer_text' => 'sung', 'is_correct' => false],
            ['question_id' => $questionF[8]->id, 'answer_text' => 'ang', 'is_correct' => false],
            ['question_id' => $questionF[8]->id, 'answer_text' => 'kia', 'is_correct' => true],
            ['question_id' => $questionF[8]->id, 'answer_text' => 'hia', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionF[9]->id, 'answer_text' => 'sim', 'is_correct' => false],
            ['question_id' => $questionF[9]->id, 'answer_text' => 'kou', 'is_correct' => true],
            ['question_id' => $questionF[9]->id, 'answer_text' => 'êm', 'is_correct' => false],
            ['question_id' => $questionF[9]->id, 'answer_text' => 'yi', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionF[10]->id, 'answer_text' => 'êm', 'is_correct' => false],
            ['question_id' => $questionF[10]->id, 'answer_text' => 'kou', 'is_correct' => false],
            ['question_id' => $questionF[10]->id, 'answer_text' => 'moi', 'is_correct' => false],
            ['question_id' => $questionF[10]->id, 'answer_text' => 'ma', 'is_correct' => true],

            // Question 12
            ['question_id' => $questionF[11]->id, 'answer_text' => 'cucu', 'is_correct' => false],
            ['question_id' => $questionF[11]->id, 'answer_text' => 'anak perempuan', 'is_correct' => true],
            ['question_id' => $questionF[11]->id, 'answer_text' => 'kakak perempuan', 'is_correct' => false],
            ['question_id' => $questionF[11]->id, 'answer_text' => 'adik perempuan', 'is_correct' => false],

            // Question 13
            ['question_id' => $questionF[12]->id, 'answer_text' => 'paman (kakak laki-laki ayah)', 'is_correct' => true],
            ['question_id' => $questionF[12]->id, 'answer_text' => 'paman (adik laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionF[12]->id, 'answer_text' => 'paman (suami saudari ayah/ibu)', 'is_correct' => false],
            ['question_id' => $questionF[12]->id, 'answer_text' => 'paman (saudara ibu)', 'is_correct' => false],

            // Question 14
            ['question_id' => $questionF[13]->id, 'answer_text' => 'suami', 'is_correct' => true],
            ['question_id' => $questionF[13]->id, 'answer_text' => 'cucu', 'is_correct' => false],
            ['question_id' => $questionF[13]->id, 'answer_text' => 'ayah', 'is_correct' => false],
            ['question_id' => $questionF[13]->id, 'answer_text' => 'kakek', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionF[14]->id, 'answer_text' => 'paman (kakak laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionF[14]->id, 'answer_text' => 'paman (adik laki-laki ayah)', 'is_correct' => false],
            ['question_id' => $questionF[14]->id, 'answer_text' => 'paman (suami saudari ayah/ibu)', 'is_correct' => true],
            ['question_id' => $questionF[14]->id, 'answer_text' => 'paman (saudara ibu)', 'is_correct' => false],
        ];
        foreach ($answersF as $answer) {
            Answer::create($answer);
        }

        // Topik G: Warna
        $topicG = Topic::where('title', 'Warna')->first();
        $quizG = Quiz::where('topic_id', $topicG->id)->first();
        $questionG = Question::where('quiz_id', $quizG->id)->orderBy('id')->get()->values();
        $answersG = [
            // Question 1
            ['question_id' => $questionG[0]->id, 'answer_text' => 'warna biru', 'is_correct' => false],
            ['question_id' => $questionG[0]->id, 'answer_text' => 'warna merah', 'is_correct' => true],
            ['question_id' => $questionG[0]->id, 'answer_text' => 'warna kuning', 'is_correct' => false],
            ['question_id' => $questionG[0]->id, 'answer_text' => 'warna hijau', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionG[1]->id, 'answer_text' => 'pek sek', 'is_correct' => false],
            ['question_id' => $questionG[1]->id, 'answer_text' => 'ng sek', 'is_correct' => false],
            ['question_id' => $questionG[1]->id, 'answer_text' => 'ou sek', 'is_correct' => true],
            ['question_id' => $questionG[1]->id, 'answer_text' => 'nam sek', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionG[2]->id, 'answer_text' => 'warna ungu', 'is_correct' => false],
            ['question_id' => $questionG[2]->id, 'answer_text' => 'warna abu-abu', 'is_correct' => false],
            ['question_id' => $questionG[2]->id, 'answer_text' => 'warna pink', 'is_correct' => false],
            ['question_id' => $questionG[2]->id, 'answer_text' => 'warna hijau', 'is_correct' => true],

            // Question 4
            ['question_id' => $questionG[3]->id, 'answer_text' => 'warna abu-abu', 'is_correct' => false],
            ['question_id' => $questionG[3]->id, 'answer_text' => 'warna emas', 'is_correct' => true],
            ['question_id' => $questionG[3]->id, 'answer_text' => 'warna kuning', 'is_correct' => false],
            ['question_id' => $questionG[3]->id, 'answer_text' => 'warna hijau', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionG[4]->id, 'answer_text' => 'warna merah', 'is_correct' => false],
            ['question_id' => $questionG[4]->id, 'answer_text' => 'warna ungu', 'is_correct' => false],
            ['question_id' => $questionG[4]->id, 'answer_text' => 'warna pink', 'is_correct' => true],
            ['question_id' => $questionG[4]->id, 'answer_text' => 'warna kuning', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionG[5]->id, 'answer_text' => 'ng', 'is_correct' => false],
            ['question_id' => $questionG[5]->id, 'answer_text' => 'kim', 'is_correct' => false],
            ['question_id' => $questionG[5]->id, 'answer_text' => 'nam', 'is_correct' => true],
            ['question_id' => $questionG[5]->id, 'answer_text' => 'ang', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionG[6]->id, 'answer_text' => 'ng', 'is_correct' => true],
            ['question_id' => $questionG[6]->id, 'answer_text' => 'che', 'is_correct' => false],
            ['question_id' => $questionG[6]->id, 'answer_text' => 'ou', 'is_correct' => false],
            ['question_id' => $questionG[6]->id, 'answer_text' => 'pek', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionG[7]->id, 'answer_text' => 'kim', 'is_correct' => false],
            ['question_id' => $questionG[7]->id, 'answer_text' => 'ang', 'is_correct' => false],
            ['question_id' => $questionG[7]->id, 'answer_text' => 'pek', 'is_correct' => true],
            ['question_id' => $questionG[7]->id, 'answer_text' => 'nam', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionG[8]->id, 'answer_text' => 'warna putih', 'is_correct' => false],
            ['question_id' => $questionG[8]->id, 'answer_text' => 'warna biru', 'is_correct' => false],
            ['question_id' => $questionG[8]->id, 'answer_text' => 'warna ungu', 'is_correct' => true],
            ['question_id' => $questionG[8]->id, 'answer_text' => 'warna hijau', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionG[9]->id, 'answer_text' => 'warna emas', 'is_correct' => false],
            ['question_id' => $questionG[9]->id, 'answer_text' => 'warna abu-abu', 'is_correct' => true],
            ['question_id' => $questionG[9]->id, 'answer_text' => 'warna pink', 'is_correct' => false],
            ['question_id' => $questionG[9]->id, 'answer_text' => 'warna hitam', 'is_correct' => false],
        ];
        foreach ($answersG as $answer) {
            Answer::create($answer);
        }

        // Topik H: Makanan & Minuman
        $topicH = Topic::where('title', 'Makanan & Minuman')->first();
        $quizH = Quiz::where('topic_id', $topicH->id)->first();
        $questionH = Question::where('quiz_id', $quizH->id)->orderBy('id')->get()->values();
        $answersH = [
            // Question 1
            ['question_id' => $questionH[0]->id, 'answer_text' => 'beras', 'is_correct' => false],
            ['question_id' => $questionH[0]->id, 'answer_text' => 'nasi', 'is_correct' => true],
            ['question_id' => $questionH[0]->id, 'answer_text' => 'bubur', 'is_correct' => false],
            ['question_id' => $questionH[0]->id, 'answer_text' => 'mi', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionH[1]->id, 'answer_text' => 'hê', 'is_correct' => true],
            ['question_id' => $questionH[1]->id, 'answer_text' => 'te', 'is_correct' => false],
            ['question_id' => $questionH[1]->id, 'answer_text' => 'hoi', 'is_correct' => false],
            ['question_id' => $questionH[1]->id, 'answer_text' => 'chai', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionH[2]->id, 'answer_text' => 'asin', 'is_correct' => false],
            ['question_id' => $questionH[2]->id, 'answer_text' => 'pedas', 'is_correct' => false],
            ['question_id' => $questionH[2]->id, 'answer_text' => 'manis', 'is_correct' => true],
            ['question_id' => $questionH[2]->id, 'answer_text' => 'asam', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionH[3]->id, 'answer_text' => 'telur', 'is_correct' => false],
            ['question_id' => $questionH[3]->id, 'answer_text' => 'buah', 'is_correct' => false],
            ['question_id' => $questionH[3]->id, 'answer_text' => 'sayur', 'is_correct' => true],
            ['question_id' => $questionH[3]->id, 'answer_text' => 'kacang', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionH[4]->id, 'answer_text' => 'kopi', 'is_correct' => false],
            ['question_id' => $questionH[4]->id, 'answer_text' => 'susu', 'is_correct' => false],
            ['question_id' => $questionH[4]->id, 'answer_text' => 'air', 'is_correct' => false],
            ['question_id' => $questionH[4]->id, 'answer_text' => 'teh', 'is_correct' => true],

            // Question 6
            ['question_id' => $questionH[5]->id, 'answer_text' => 'beras', 'is_correct' => false],
            ['question_id' => $questionH[5]->id, 'answer_text' => 'roti', 'is_correct' => false],
            ['question_id' => $questionH[5]->id, 'answer_text' => 'bubur', 'is_correct' => true],
            ['question_id' => $questionH[5]->id, 'answer_text' => 'mi', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionH[6]->id, 'answer_text' => 'manis', 'is_correct' => false],
            ['question_id' => $questionH[6]->id, 'answer_text' => 'pedas', 'is_correct' => false],
            ['question_id' => $questionH[6]->id, 'answer_text' => 'asam', 'is_correct' => true],
            ['question_id' => $questionH[6]->id, 'answer_text' => 'pahit', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionH[7]->id, 'answer_text' => 'pek', 'is_correct' => false],
            ['question_id' => $questionH[7]->id, 'answer_text' => 'ho', 'is_correct' => false],
            ['question_id' => $questionH[7]->id, 'answer_text' => 'mo', 'is_correct' => true],
            ['question_id' => $questionH[7]->id, 'answer_text' => 'tou', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionH[8]->id, 'answer_text' => 'koi', 'is_correct' => false],
            ['question_id' => $questionH[8]->id, 'answer_text' => 'gu', 'is_correct' => true],
            ['question_id' => $questionH[8]->id, 'answer_text' => 'yo', 'is_correct' => false],
            ['question_id' => $questionH[8]->id, 'answer_text' => 'ak', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionH[9]->id, 'answer_text' => 'bak', 'is_correct' => false],
            ['question_id' => $questionH[9]->id, 'answer_text' => 'ciak', 'is_correct' => false],
            ['question_id' => $questionH[9]->id, 'answer_text' => 'pa', 'is_correct' => false],
            ['question_id' => $questionH[9]->id, 'answer_text' => 'khung', 'is_correct' => true],

            // Question 11
            ['question_id' => $questionH[10]->id, 'answer_text' => 'tê', 'is_correct' => false],
            ['question_id' => $questionH[10]->id, 'answer_text' => 'koi', 'is_correct' => false],
            ['question_id' => $questionH[10]->id, 'answer_text' => 'hoi', 'is_correct' => false],
            ['question_id' => $questionH[10]->id, 'answer_text' => 'he', 'is_correct' => true],

            // Question 12
            ['question_id' => $questionH[11]->id, 'answer_text' => 'telur', 'is_correct' => true],
            ['question_id' => $questionH[11]->id, 'answer_text' => 'kepiting', 'is_correct' => false],
            ['question_id' => $questionH[11]->id, 'answer_text' => 'udang', 'is_correct' => false],
            ['question_id' => $questionH[11]->id, 'answer_text' => 'ikan', 'is_correct' => false],

            // Question 13
            ['question_id' => $questionH[12]->id, 'answer_text' => 'pahit', 'is_correct' => false],
            ['question_id' => $questionH[12]->id, 'answer_text' => 'tawar', 'is_correct' => false],
            ['question_id' => $questionH[12]->id, 'answer_text' => 'pedas', 'is_correct' => true],
            ['question_id' => $questionH[12]->id, 'answer_text' => 'asam', 'is_correct' => false],

            // Question 14
            ['question_id' => $questionH[13]->id, 'answer_text' => 'kopi', 'is_correct' => false],
            ['question_id' => $questionH[13]->id, 'answer_text' => 'susu', 'is_correct' => false],
            ['question_id' => $questionH[13]->id, 'answer_text' => 'air', 'is_correct' => true],
            ['question_id' => $questionH[13]->id, 'answer_text' => 'teh', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionH[14]->id, 'answer_text' => 'roti', 'is_correct' => false],
            ['question_id' => $questionH[14]->id, 'answer_text' => 'buah', 'is_correct' => false],
            ['question_id' => $questionH[14]->id, 'answer_text' => 'tahu', 'is_correct' => true],
            ['question_id' => $questionH[14]->id, 'answer_text' => 'telur', 'is_correct' => false],
        ];
        foreach ($answersH as $answer) {
            Answer::create($answer);
        }

        // Topik I: Anggota Tubuh
        $topicI = Topic::where('title', 'Anggota Tubuh')->first();
        $quizI = Quiz::where('topic_id', $topicI->id)->first();
        $questionI = Question::where('quiz_id', $quizI->id)->orderBy('id')->get()->values();
        $answersI = [
            // Question 1
            ['question_id' => $questionI[0]->id, 'answer_text' => 'rambut', 'is_correct' => false],
            ['question_id' => $questionI[0]->id, 'answer_text' => 'wajah', 'is_correct' => false],
            ['question_id' => $questionI[0]->id, 'answer_text' => 'kepala', 'is_correct' => true],
            ['question_id' => $questionI[0]->id, 'answer_text' => 'leher', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionI[1]->id, 'answer_text' => 'kha', 'is_correct' => false],
            ['question_id' => $questionI[1]->id, 'answer_text' => 'chiu', 'is_correct' => true],
            ['question_id' => $questionI[1]->id, 'answer_text' => 'tou', 'is_correct' => false],
            ['question_id' => $questionI[1]->id, 'answer_text' => 'heng', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionI[2]->id, 'answer_text' => 'hidung', 'is_correct' => false],
            ['question_id' => $questionI[2]->id, 'answer_text' => 'mulut', 'is_correct' => false],
            ['question_id' => $questionI[2]->id, 'answer_text' => 'telinga', 'is_correct' => false],
            ['question_id' => $questionI[2]->id, 'answer_text' => 'mata', 'is_correct' => true],

            // Question 4
            ['question_id' => $questionI[3]->id, 'answer_text' => 'lidah', 'is_correct' => false],
            ['question_id' => $questionI[3]->id, 'answer_text' => 'hidung', 'is_correct' => true],
            ['question_id' => $questionI[3]->id, 'answer_text' => 'mulut', 'is_correct' => false],
            ['question_id' => $questionI[3]->id, 'answer_text' => 'leher', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionI[4]->id, 'answer_text' => 'mulut', 'is_correct' => false],
            ['question_id' => $questionI[4]->id, 'answer_text' => 'mata', 'is_correct' => false],
            ['question_id' => $questionI[4]->id, 'answer_text' => 'wajah', 'is_correct' => false],
            ['question_id' => $questionI[4]->id, 'answer_text' => 'rambut', 'is_correct' => true],

            // Question 6
            ['question_id' => $questionI[5]->id, 'answer_text' => 'kulit', 'is_correct' => false],
            ['question_id' => $questionI[5]->id, 'answer_text' => 'otak', 'is_correct' => false],
            ['question_id' => $questionI[5]->id, 'answer_text' => 'darah', 'is_correct' => true],
            ['question_id' => $questionI[5]->id, 'answer_text' => 'tulang', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionI[6]->id, 'answer_text' => 'chiu', 'is_correct' => false],
            ['question_id' => $questionI[6]->id, 'answer_text' => 'kha', 'is_correct' => true],
            ['question_id' => $questionI[6]->id, 'answer_text' => 'koi', 'is_correct' => false],
            ['question_id' => $questionI[6]->id, 'answer_text' => 'cêng', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionI[7]->id, 'answer_text' => 'nau', 'is_correct' => false],
            ['question_id' => $questionI[7]->id, 'answer_text' => 'sim', 'is_correct' => true],
            ['question_id' => $questionI[7]->id, 'answer_text' => 'kuk', 'is_correct' => false],
            ['question_id' => $questionI[7]->id, 'answer_text' => 'phuei', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionI[8]->id, 'answer_text' => 'mak', 'is_correct' => false],
            ['question_id' => $questionI[8]->id, 'answer_text' => 'chiu', 'is_correct' => false],
            ['question_id' => $questionI[8]->id, 'answer_text' => 'koi', 'is_correct' => true],
            ['question_id' => $questionI[8]->id, 'answer_text' => 'kha', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionI[9]->id, 'answer_text' => 'hidung', 'is_correct' => false],
            ['question_id' => $questionI[9]->id, 'answer_text' => 'mata', 'is_correct' => false],
            ['question_id' => $questionI[9]->id, 'answer_text' => 'mulut', 'is_correct' => true],
            ['question_id' => $questionI[9]->id, 'answer_text' => 'telinga', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionI[10]->id, 'answer_text' => 'tangan', 'is_correct' => false],
            ['question_id' => $questionI[10]->id, 'answer_text' => 'perut', 'is_correct' => false],
            ['question_id' => $questionI[10]->id, 'answer_text' => 'kaki', 'is_correct' => true],
            ['question_id' => $questionI[10]->id, 'answer_text' => 'punggung', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionI[11]->id, 'answer_text' => 'kepala', 'is_correct' => false],
            ['question_id' => $questionI[11]->id, 'answer_text' => 'rambut', 'is_correct' => false],
            ['question_id' => $questionI[11]->id, 'answer_text' => 'wajah', 'is_correct' => true],
            ['question_id' => $questionI[11]->id, 'answer_text' => 'leher', 'is_correct' => false],
        ];
        foreach ($answersI as $answer) {
            Answer::create($answer);
        }

        // Topik J: Kata Kerja Dasar
        $topicJ = Topic::where('title', 'Kata Kerja Dasar')->first();
        $quizJ = Quiz::where('topic_id', $topicJ->id)->first();
        $questionJ = Question::where('quiz_id', $quizJ->id)->orderBy('id')->get()->values();
        $answersJ = [
            // Question 1
            ['question_id' => $questionJ[0]->id, 'answer_text' => 'pergi', 'is_correct' => false],
            ['question_id' => $questionJ[0]->id, 'answer_text' => 'datang', 'is_correct' => true],
            ['question_id' => $questionJ[0]->id, 'answer_text' => 'pulang', 'is_correct' => false],
            ['question_id' => $questionJ[0]->id, 'answer_text' => 'berjalan', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionJ[1]->id, 'answer_text' => 'co', 'is_correct' => false],
            ['question_id' => $questionJ[1]->id, 'answer_text' => 'uk', 'is_correct' => true],
            ['question_id' => $questionJ[1]->id, 'answer_text' => 'khia', 'is_correct' => false],
            ['question_id' => $questionJ[1]->id, 'answer_text' => 'têng', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionJ[2]->id, 'answer_text' => 'melihat', 'is_correct' => false],
            ['question_id' => $questionJ[2]->id, 'answer_text' => 'membaca', 'is_correct' => false],
            ['question_id' => $questionJ[2]->id, 'answer_text' => 'mendengar', 'is_correct' => true],
            ['question_id' => $questionJ[2]->id, 'answer_text' => 'berbicara', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionJ[3]->id, 'answer_text' => 'menunggu', 'is_correct' => false],
            ['question_id' => $questionJ[3]->id, 'answer_text' => 'mencari', 'is_correct' => false],
            ['question_id' => $questionJ[3]->id, 'answer_text' => 'membantu', 'is_correct' => true],
            ['question_id' => $questionJ[3]->id, 'answer_text' => 'menggunakan', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionJ[4]->id, 'answer_text' => 'menunggu', 'is_correct' => false],
            ['question_id' => $questionJ[4]->id, 'answer_text' => 'mencari', 'is_correct' => true],
            ['question_id' => $questionJ[4]->id, 'answer_text' => 'membantu', 'is_correct' => false],
            ['question_id' => $questionJ[4]->id, 'answer_text' => 'menggunakan', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionJ[5]->id, 'answer_text' => 'berjalan', 'is_correct' => false],
            ['question_id' => $questionJ[5]->id, 'answer_text' => 'berlari', 'is_correct' => false],
            ['question_id' => $questionJ[5]->id, 'answer_text' => 'pergi', 'is_correct' => true],
            ['question_id' => $questionJ[5]->id, 'answer_text' => 'pulang', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionJ[6]->id, 'answer_text' => 'tertawa', 'is_correct' => false],
            ['question_id' => $questionJ[6]->id, 'answer_text' => 'menangis', 'is_correct' => true],
            ['question_id' => $questionJ[6]->id, 'answer_text' => 'berbicara', 'is_correct' => false],
            ['question_id' => $questionJ[6]->id, 'answer_text' => 'bertanya', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionJ[7]->id, 'answer_text' => 'kang', 'is_correct' => false],
            ['question_id' => $questionJ[7]->id, 'answer_text' => 'che', 'is_correct' => true],
            ['question_id' => $questionJ[7]->id, 'answer_text' => 'uk', 'is_correct' => false],
            ['question_id' => $questionJ[7]->id, 'answer_text' => 'hu', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionJ[8]->id, 'answer_text' => 'thoi', 'is_correct' => false],
            ['question_id' => $questionJ[8]->id, 'answer_text' => 'kang', 'is_correct' => true],
            ['question_id' => $questionJ[8]->id, 'answer_text' => 'mung', 'is_correct' => false],
            ['question_id' => $questionJ[8]->id, 'answer_text' => 'chuei', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionJ[9]->id, 'answer_text' => 'co', 'is_correct' => false],
            ['question_id' => $questionJ[9]->id, 'answer_text' => 'chuei', 'is_correct' => false],
            ['question_id' => $questionJ[9]->id, 'answer_text' => 'ok', 'is_correct' => true],
            ['question_id' => $questionJ[9]->id, 'answer_text' => 'khok', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionJ[10]->id, 'answer_text' => 'khê', 'is_correct' => false],
            ['question_id' => $questionJ[10]->id, 'answer_text' => 'khiok', 'is_correct' => false],
            ['question_id' => $questionJ[10]->id, 'answer_text' => 'cang', 'is_correct' => true],
            ['question_id' => $questionJ[10]->id, 'answer_text' => 'yong', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionJ[11]->id, 'answer_text' => 'pergi', 'is_correct' => false],
            ['question_id' => $questionJ[11]->id, 'answer_text' => 'pulang', 'is_correct' => true],
            ['question_id' => $questionJ[11]->id, 'answer_text' => 'berlari', 'is_correct' => false],
            ['question_id' => $questionJ[11]->id, 'answer_text' => 'berjalan', 'is_correct' => false],

            // Question 13
            ['question_id' => $questionJ[12]->id, 'answer_text' => 'membaca', 'is_correct' => false],
            ['question_id' => $questionJ[12]->id, 'answer_text' => 'melihat', 'is_correct' => true],
            ['question_id' => $questionJ[12]->id, 'answer_text' => 'berbicara', 'is_correct' => false],
            ['question_id' => $questionJ[12]->id, 'answer_text' => 'mendengar', 'is_correct' => false],

            // Question 14
            ['question_id' => $questionJ[13]->id, 'answer_text' => 'menjawab', 'is_correct' => false],
            ['question_id' => $questionJ[13]->id, 'answer_text' => 'bertanya', 'is_correct' => true],
            ['question_id' => $questionJ[13]->id, 'answer_text' => 'menunggu', 'is_correct' => false],
            ['question_id' => $questionJ[13]->id, 'answer_text' => 'mencari', 'is_correct' => false],

            // Question 15
            ['question_id' => $questionJ[14]->id, 'answer_text' => 'tertawa', 'is_correct' => true],
            ['question_id' => $questionJ[14]->id, 'answer_text' => 'menangis', 'is_correct' => false],
            ['question_id' => $questionJ[14]->id, 'answer_text' => 'berbicara', 'is_correct' => false],
            ['question_id' => $questionJ[14]->id, 'answer_text' => 'bertanya', 'is_correct' => false],
        ];
        foreach ($answersJ as $answer) {
            Answer::create($answer);
        }

        // Topik K: Kata Sifat Umum
        $topicK = Topic::where('title', 'Kata Sifat Umum')->first();
        $quizK = Quiz::where('topic_id', $topicK->id)->first();
        $questionK = Question::where('quiz_id', $quizK->id)->orderBy('id')->get()->values();
        $answersK = [
            // Question 1
            ['question_id' => $questionK[0]->id, 'answer_text' => 'kecil', 'is_correct' => false],
            ['question_id' => $questionK[0]->id, 'answer_text' => 'besar', 'is_correct' => true],
            ['question_id' => $questionK[0]->id, 'answer_text' => 'panjang', 'is_correct' => false],
            ['question_id' => $questionK[0]->id, 'answer_text' => 'pendek', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionK[1]->id, 'answer_text' => 'phi', 'is_correct' => false],
            ['question_id' => $questionK[1]->id, 'answer_text' => 'kui', 'is_correct' => true],
            ['question_id' => $questionK[1]->id, 'answer_text' => 'coi', 'is_correct' => false],
            ['question_id' => $questionK[1]->id, 'answer_text' => 'cio', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionK[2]->id, 'answer_text' => 'lambat', 'is_correct' => false],
            ['question_id' => $questionK[2]->id, 'answer_text' => 'jauh', 'is_correct' => false],
            ['question_id' => $questionK[2]->id, 'answer_text' => 'cepat', 'is_correct' => true],
            ['question_id' => $questionK[2]->id, 'answer_text' => 'dekat', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionK[3]->id, 'answer_text' => 'bersih', 'is_correct' => false],
            ['question_id' => $questionK[3]->id, 'answer_text' => 'kotor', 'is_correct' => true],
            ['question_id' => $questionK[3]->id, 'answer_text' => 'baru', 'is_correct' => false],
            ['question_id' => $questionK[3]->id, 'answer_text' => 'lama', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionK[4]->id, 'answer_text' => 'buruk', 'is_correct' => false],
            ['question_id' => $questionK[4]->id, 'answer_text' => 'lelah', 'is_correct' => true],
            ['question_id' => $questionK[4]->id, 'answer_text' => 'sakit', 'is_correct' => false],
            ['question_id' => $questionK[4]->id, 'answer_text' => 'senang', 'is_correct' => false],

            // Question 6
            ['question_id' => $questionK[5]->id, 'answer_text' => 'dekat', 'is_correct' => true],
            ['question_id' => $questionK[5]->id, 'answer_text' => 'cepat', 'is_correct' => false],
            ['question_id' => $questionK[5]->id, 'answer_text' => 'jauh', 'is_correct' => false],
            ['question_id' => $questionK[5]->id, 'answer_text' => 'lambat', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionK[6]->id, 'answer_text' => 'lak', 'is_correct' => false],
            ['question_id' => $questionK[6]->id, 'answer_text' => 'lau', 'is_correct' => false],
            ['question_id' => $questionK[6]->id, 'answer_text' => 'cheng', 'is_correct' => true],
            ['question_id' => $questionK[6]->id, 'answer_text' => 'seng', 'is_correct' => false],

            // Question 8
            ['question_id' => $questionK[7]->id, 'answer_text' => 'hek', 'is_correct' => false],
            ['question_id' => $questionK[7]->id, 'answer_text' => 'hi', 'is_correct' => true],
            ['question_id' => $questionK[7]->id, 'answer_text' => 'ho', 'is_correct' => false],
            ['question_id' => $questionK[7]->id, 'answer_text' => 'mo', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionK[8]->id, 'answer_text' => 'kêng', 'is_correct' => false],
            ['question_id' => $questionK[8]->id, 'answer_text' => 'ngang', 'is_correct' => true],
            ['question_id' => $questionK[8]->id, 'answer_text' => 'mang', 'is_correct' => false],
            ['question_id' => $questionK[8]->id, 'answer_text' => 'têng', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionK[9]->id, 'answer_text' => 'kecil', 'is_correct' => false],
            ['question_id' => $questionK[9]->id, 'answer_text' => 'banyak', 'is_correct' => true],
            ['question_id' => $questionK[9]->id, 'answer_text' => 'besar', 'is_correct' => false],
            ['question_id' => $questionK[9]->id, 'answer_text' => 'sedikit', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionK[10]->id, 'answer_text' => 'buruk', 'is_correct' => false],
            ['question_id' => $questionK[10]->id, 'answer_text' => 'baik', 'is_correct' => false],
            ['question_id' => $questionK[10]->id, 'answer_text' => 'panas', 'is_correct' => true],
            ['question_id' => $questionK[10]->id, 'answer_text' => 'dingin', 'is_correct' => false],

            // Question 12
            ['question_id' => $questionK[11]->id, 'answer_text' => 'baru', 'is_correct' => true],
            ['question_id' => $questionK[11]->id, 'answer_text' => 'lama', 'is_correct' => false],
            ['question_id' => $questionK[11]->id, 'answer_text' => 'cepat', 'is_correct' => false],
            ['question_id' => $questionK[11]->id, 'answer_text' => 'lambat', 'is_correct' => false],
        ];
        foreach ($answersK as $answer) {
            Answer::create($answer);
        }

        // Topik L: Tempat & Arah
        $topicL = Topic::where('title', 'Tempat & Arah')->first();
        $quizL = Quiz::where('topic_id', $topicL->id)->first();
        $questionL = Question::where('quiz_id', $quizL->id)->orderBy('id')->get()->values();
        $answersL = [
            // Question 1
            ['question_id' => $questionL[0]->id, 'answer_text' => 'rumah', 'is_correct' => false],
            ['question_id' => $questionL[0]->id, 'answer_text' => 'pasar', 'is_correct' => false],
            ['question_id' => $questionL[0]->id, 'answer_text' => 'sekolah', 'is_correct' => true],
            ['question_id' => $questionL[0]->id, 'answer_text' => 'toko', 'is_correct' => false],

            // Question 2
            ['question_id' => $questionL[1]->id, 'answer_text' => 'kong si', 'is_correct' => false],
            ['question_id' => $questionL[1]->id, 'answer_text' => 'pa sak', 'is_correct' => true],
            ['question_id' => $questionL[1]->id, 'answer_text' => 'ciak kuang', 'is_correct' => false],
            ['question_id' => $questionL[1]->id, 'answer_text' => 'nging hang', 'is_correct' => false],

            // Question 3
            ['question_id' => $questionL[2]->id, 'answer_text' => 'kiri', 'is_correct' => true],
            ['question_id' => $questionL[2]->id, 'answer_text' => 'kanan', 'is_correct' => false],
            ['question_id' => $questionL[2]->id, 'answer_text' => 'depan', 'is_correct' => false],
            ['question_id' => $questionL[2]->id, 'answer_text' => 'belakang', 'is_correct' => false],

            // Question 4
            ['question_id' => $questionL[3]->id, 'answer_text' => 'belakang', 'is_correct' => false],
            ['question_id' => $questionL[3]->id, 'answer_text' => 'tengah', 'is_correct' => false],
            ['question_id' => $questionL[3]->id, 'answer_text' => 'depan', 'is_correct' => true],
            ['question_id' => $questionL[3]->id, 'answer_text' => 'atas', 'is_correct' => false],

            // Question 5
            ['question_id' => $questionL[4]->id, 'answer_text' => 'bawah', 'is_correct' => false],
            ['question_id' => $questionL[4]->id, 'answer_text' => 'dalam', 'is_correct' => false],
            ['question_id' => $questionL[4]->id, 'answer_text' => 'luar', 'is_correct' => false],
            ['question_id' => $questionL[4]->id, 'answer_text' => 'atas', 'is_correct' => true],

            // Question 6
            ['question_id' => $questionL[5]->id, 'answer_text' => 'toko', 'is_correct' => false],
            ['question_id' => $questionL[5]->id, 'answer_text' => 'rumah', 'is_correct' => false],
            ['question_id' => $questionL[5]->id, 'answer_text' => 'jalan', 'is_correct' => true],
            ['question_id' => $questionL[5]->id, 'answer_text' => 'kantor', 'is_correct' => false],

            // Question 7
            ['question_id' => $questionL[6]->id, 'answer_text' => 'lai', 'is_correct' => false],
            ['question_id' => $questionL[6]->id, 'answer_text' => 'têng', 'is_correct' => false],
            ['question_id' => $questionL[6]->id, 'answer_text' => 'tiam', 'is_correct' => false],
            ['question_id' => $questionL[6]->id, 'answer_text' => 'kuang', 'is_correct' => true],

            // Question 8
            ['question_id' => $questionL[7]->id, 'answer_text' => 'gua', 'is_correct' => false],
            ['question_id' => $questionL[7]->id, 'answer_text' => 'ci', 'is_correct' => true],
            ['question_id' => $questionL[7]->id, 'answer_text' => 'hi', 'is_correct' => false],
            ['question_id' => $questionL[7]->id, 'answer_text' => 'tek', 'is_correct' => false],

            // Question 9
            ['question_id' => $questionL[8]->id, 'answer_text' => 'lai', 'is_correct' => false],
            ['question_id' => $questionL[8]->id, 'answer_text' => 'gua', 'is_correct' => false],
            ['question_id' => $questionL[8]->id, 'answer_text' => 'cia', 'is_correct' => true],
            ['question_id' => $questionL[8]->id, 'answer_text' => 'to', 'is_correct' => false],

            // Question 10
            ['question_id' => $questionL[9]->id, 'answer_text' => 'sekolah', 'is_correct' => false],
            ['question_id' => $questionL[9]->id, 'answer_text' => 'bank', 'is_correct' => false],
            ['question_id' => $questionL[9]->id, 'answer_text' => 'rumah sakit', 'is_correct' => true],
            ['question_id' => $questionL[9]->id, 'answer_text' => 'kantor', 'is_correct' => false],

            // Question 11
            ['question_id' => $questionL[10]->id, 'answer_text' => 'kanan', 'is_correct' => false],
            ['question_id' => $questionL[10]->id, 'answer_text' => 'kiri', 'is_correct' => false],
            ['question_id' => $questionL[10]->id, 'answer_text' => 'depan', 'is_correct' => false],
            ['question_id' => $questionL[10]->id, 'answer_text' => 'belakang', 'is_correct' => true],

            // Question 12
            ['question_id' => $questionL[11]->id, 'answer_text' => 'atas', 'is_correct' => false],
            ['question_id' => $questionL[11]->id, 'answer_text' => 'bawah', 'is_correct' => false],
            ['question_id' => $questionL[11]->id, 'answer_text' => 'dalam', 'is_correct' => false],
            ['question_id' => $questionL[11]->id, 'answer_text' => 'luar', 'is_correct' => true],
        ];
        foreach ($answersL as $answer) {
            Answer::create($answer);
        }
    }
}
