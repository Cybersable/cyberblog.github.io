<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'short' => $faker->sentence,
        'text'  => $faker->paragraph(3)
    ];
});
