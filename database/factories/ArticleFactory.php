<?php

use Faker\Generator as Faker;
use App\Article;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => json_encode($faker->paragraphs(4)),
        'user_id' => 1
    ];
});
