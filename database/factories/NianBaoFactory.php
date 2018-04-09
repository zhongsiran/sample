<?php

use Faker\Generator as Faker;

$factory->define(App\Models\NianBao::class, function (Faker $faker) {
    return [
        'regnum' => '440121000'. strval($faker->unique()->numberBetween($min = 100000, $max = 999999)),
        'corpname' => $faker->company(),
        'rep_person' =>$faker->name(),
        'phone' => $faker->phoneNumber(),
        'contact_person' =>$faker->name(),
        'contact_phone' => $faker->phoneNumber(),
    ];
});
