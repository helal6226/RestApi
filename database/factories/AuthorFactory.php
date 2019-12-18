<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        //
      
        'name'=>$faker->firstname(),
        'Email'=>$faker->unique()->email,
        'job'=>$faker->randomElement(['lecturer','manager','teacher','researcher']),
        'Num_Writings'=>$faker->numberBetween(10,30),

    ];
});
