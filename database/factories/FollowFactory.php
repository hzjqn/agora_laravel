<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Follow::class, function (Faker $faker) {

    $users = User::all()->take(10);
    $rn1 = 0;
    $rn2 = 0;

    while($rn1 === $rn2){
        $rn1 = $faker->numberBetween(0,5);
        $rn2 = $faker->numberBetween(5,9);
    }

    return [
        'follower_id' => $users[$rn1]->id,
        'followed_id' => $users[$rn2]->id
    ];
});
