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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Brand::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
        'slug' => $faker->slug,
        'website'	=> $faker->url,
        'description'   => $faker->paragraph,
        'about'   => $faker->paragraph,
        'facebook'   => $faker->url,
        'twitter'   => $faker->url,
        'instagram'   => $faker->url,
        'email'   => $faker->email,
    ];
});

$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    return [
        'brand_id'  => function() {
            factory(App\Brand::class)->create()->id;
        },
        'name' => $faker->unique()->word,
        'slug' => $faker->slug,
        'description'   => $faker->paragraph
    ];
});

$factory->define(App\Testimonial::class, function (Faker\Generator $faker) {
    return [
        'brand_id'  => function() {
            factory(App\Brand::class)->create()->id;
        },
        'text'   => $faker->sentence
    ];
});
