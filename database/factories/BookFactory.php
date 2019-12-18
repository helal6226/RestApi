<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        //
            'subject'=>$faker->randomElement(['computer science','mathematics','Clinical Medicine']),
            'title'=>$faker->randomElement(['Foundations of computer science','Deep Learning for Beginners','Mathematical structures in computer science','Medicine']),
            'creation_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
            'author_id'=>App\Author::InRandomOrder()->first()->id,
            
    ];
});
