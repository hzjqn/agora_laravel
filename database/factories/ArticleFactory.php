<?php

use Faker\Generator as Faker;
use App\Article;
use App\User;

$factory->define(App\Article::class, function (Faker $faker) {
    $users = User::all()->take(10);
    return [
        'title' => $faker->sentence(),
        'content' => json_encode($faker->paragraphs(4)),
        'user_id' => $users->random()->id,
    ];
});
