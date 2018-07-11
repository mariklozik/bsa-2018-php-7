<?php

use App\Entity\Wallet;
use Faker\Generator as Faker;

$factory->define(Wallet::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, 20)
    ];
});