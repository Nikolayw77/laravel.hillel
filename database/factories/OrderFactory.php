<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->sentences(12, true),
        //'SKU' => FakerPerson::taxId(),
        'SKU' => $faker->numberBetween(0, 1000000),
        'price' => $faker->randomFloat(2, 5, 200),
        'in_stock' => $faker->numberBetween(0, 15),
        'thumbnail' => $faker->image('public/storage/images/products', 400, 300),
        'short_description' => $faker->sentences(2, true),
    ];
});
