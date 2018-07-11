<?php

use App\Entity\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'email' => $faker->unique()->email,
    ];
});