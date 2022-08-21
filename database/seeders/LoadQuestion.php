<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;


class LoadQuestion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = Question::create(
            [
                'id' => 1,
                'question' => '¿Qué he hecho mal hoy?'
            ]
        );
        $p2 = Question::create(
            [
                'id' => 2,
                'question' => '¿Qué he hecho bien hoy?'
            ]
        );
        $p3 = Question::create(
            [
                'id' => 3,
                'question' => '¿Qué podría haber hecho de otra manera?'
            ]
        );
        $p4 = Question::create(
            [
                'id' => 4,
                'question' => 'Define tu dia en una frase o palabra'
            ]
        );
        $p5 = Question::create(
            [
                'id' => 5,
                'question' => '¿Pon lo que tu quieras?'
            ]
        );

    }
}
