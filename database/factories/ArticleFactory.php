<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
            'title'=>$faker->randomElement(['Seenig the Future','COMPUTER EXPANSION','fundamental computing problem','Mitochondrial medicine in the omics era']),
            'creation_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
            'author_id'=>App\Author::InRandomOrder()->first()->id,
            //'loan_id'=>App\Loan::InRandomOrder()->first()->id,


    ];
});
