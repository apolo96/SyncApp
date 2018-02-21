<?php

use Faker\Generator as Faker;

$factory->define(\App\Note::class, function (Faker $faker) {
    $notas = [0.0,3.0,4.5];
    $periodo = ['20172','20181'];
    return [
        'nota' => $notas[random_int(0,2)],
        'periodo' => $periodo[random_int(0,1)],
        'corte' => '1',
        'user_id' => 8,
        'nota_final' => 0.0
    ];
});
