<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        //

        'name'=>$faker->firstname(),
        'DateOfBirth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'address'=>$faker->address(),
        'Email'=>$faker->unique()->email,
        'PhoneNumber'=>$faker->phoneNumber(),
     

    ];
});
