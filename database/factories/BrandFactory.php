<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Brand::class, function (Faker $faker) {
    $brand = $faker->company;
    return [
        'name' => $brand, 
        'slug' => str_slug($brand)
    ];
});
