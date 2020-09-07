<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => str::random(30),
        'status' => true,
        'sort_order' => $faker->numberBetween($min = 1, $max = 20)

    ];
});
