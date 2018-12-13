<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $faker->locale('ja_JP');
    return [
        'name' => $faker->name(),
        'display_order' => $faker->randomNumber(1)
    ];
});
