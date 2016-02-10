<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'userName' => $faker->userName,
        'avatar' => $faker->imageUrl($width = 960, $height = 960, 'people'),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeBetween($startDate = '-10 days', $endDate = '-6 days'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-6 days', $endDate = '-4 days'),
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 400),
        'photo' => $faker->imageUrl($width = 1200, $height = 400),
        'created_at' => $faker->dateTimeBetween($startDate = '-4 days', $endDate = '-2 days'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 days', $endDate = 'now'),
    ];
});
