<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'tittle' => $faker->sentence(2),
        'description' => $faker->sentences(12, true),
        'SKU' => FakerPerson:: taxId(),
        'price' => $faker->randomFloat(2, 5, 200),
        'in_stock' => $faker->numberBetween(0, 15),
        'thumbnail' => $faker->image('public/storage/images/product', 400, 300),
        'short_description' => $faker->sentences(2, true),
    ];
});
