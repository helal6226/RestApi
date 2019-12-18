<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StudentCard;
use Faker\Generator as Faker;

$factory->define(StudentCard::class, function (Faker $faker) {
    static $idcounter = 1;
    return [
            'StudentNumber'=>$faker->numberBetween(10,30),
            'Firstname'=>$faker->firstname(),
            'Degree'=>$faker->randomElement(['Postgraduate','Undergraduate']),
            'Barcode'=>$faker->ean8(),
            'student_id'=>$idcounter++,
            
            // App\Student::InRandomOrder()->first()->id,


    ];
});
