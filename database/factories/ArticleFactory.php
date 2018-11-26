<?php

use Faker\Generator as Faker;
use App\Article;
use App\User;

$factory->define(App\Article::class, function (Faker $faker) {
    $isDraft = rand(0, 4) == 4 ? 1 : 0;
    $users = User::all()->take(50);
    $paragraphs = '<p>' . implode('</p><p>', $faker->paragraphs(4)) . '</p>';

    return [
        'title' => $faker->sentence(),
        'content' => $paragraphs,
        'user_id' => $users->random()->id,
        'draft' =>  $isDraft,
        'cover' => 'https://picsum.photos/1200/600',
    ];
});
