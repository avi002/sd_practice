<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Product::class, function (Faker $faker) {
    $categories = App\Models\Category::pluck('id')->toArray();
    return [
        'title' => str::random(30),
        'status' => true,
        'sort_order' => $faker->numberBetween($min = 1, $max = 20),
        'category_id' => $faker->randomElement($categories)
    ];
});
