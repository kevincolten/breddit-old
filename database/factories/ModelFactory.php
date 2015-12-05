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
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Subbreddit::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->url,
        'title' => $faker->sentence,
        'description' => $faker->text,
        'subbreddit_id' => $faker->numberBetween(1, 25)
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'text' => $faker->text,
    ];
});