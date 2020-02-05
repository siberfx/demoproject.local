<?php

/** @var Factory $factory */

use App\Models\Blog;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Blog::class, function (Faker $faker) {
    $title = $faker->sentence(3);
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'title' => $title,
        'body' => $faker->sentence(15),
        'slug' => str_slug($title),
        'created_at' => now()
    ];
});
