<?php

$factory->define(App\employee_model::class, function (Faker\Generator $faker) {
    return [
         'employee_name' => $faker->userName,
        'employee_email' => $faker->email,
       
    ];
});