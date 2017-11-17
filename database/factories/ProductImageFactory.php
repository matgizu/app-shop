<?php

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
         'image' => $faker->imageUrl(250,250),
        'Product_id' => $faker->numberBetween(1,100)
    ];
});
