<?php

use App\Entity\Money;
use Faker\Generator as Faker;

$factory->define(Money::class, function (Faker $faker) {
    return [
        'currency_id' => $faker->numberBetween(1, 10),
        'amount' => $faker->randomFloat(6, 0, 799076),
        'wallet_id' => $faker->numberBetween(1, 10)
    ];
});