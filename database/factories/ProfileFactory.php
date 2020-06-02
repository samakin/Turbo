<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, fn (Faker $faker) =>
[
    'avatar' => 'avatars/' . $faker->image(
        $dir = storage_path() . '/app/public/avatars',
        $width = 90,
        $height = 90,
        $category = 'people',
        $fullPath = false,
        $randomize = true,
    ),
    'address' => $faker->address,
    'phone' => $faker->regexify('/^(0)(5|6|7)(4|5|6|7)[0-9]{7}$/'),
]);