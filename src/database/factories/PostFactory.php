<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' =>$faker->text,
        'description' => $faker->text,
        'country_id' => \App\Models\Country::query()->inRandomOrder()->first()->id,
        'user_id' =>\App\User::query()->inRandomOrder()->first(),
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->email,
        'end_date' => $faker->dateTimeInInterval('now', '+ 30 days')
    ];
});
