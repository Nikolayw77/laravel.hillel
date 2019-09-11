<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order;
use App\Product;
use App\User;
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Person as FakerPerson;

$factory->define(Order::class, function (Faker $faker) {
    return [

        'user_id' => 2,
        'country' => $faker->sentence(2),
        'city' => $faker->sentence(1),
        'address' => $faker->sentences(3, true),
        'total_price' => $faker->randomFloat(2, 5, 10000),
    ];
});
