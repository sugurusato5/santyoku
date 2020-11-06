<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Santyoku;
use Faker\Generator as Faker;

$factory->define(Santyoku::class, function (Faker $faker) {
    return [
            'title' => '桃',
            'description' => '詳細',
            'price' => '15000',
            'image_url' => 'https://growthseed.jp/wp-content/uploads/2016/12/peach-1.jpg',
            

    ];
});
