<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\student;
use Faker\Generator as Faker;

$factory->define(student::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'address' => $faker->address(),
        'gender' => $faker->randomElement(['pria', 'wanita']),
        'religion' => $faker->randomElement(['islam', 'kristen']),
        'school' => $faker->company(),
    ];
});
