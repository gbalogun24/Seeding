<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords=6, $variableNWords = true),
        'body' => $faker->sentence($nbSentences=6, $variableNSentences = true),
    ];
});
