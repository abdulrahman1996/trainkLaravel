<?php

use Faker\Generator as Faker;

$factory->define(\App\Lesson::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' =>$faker->text  ,
        'views' =>$faker->numberBetween(2  , 9999)  ,
        'difficulty' =>  $faker->randomElement(['easy' ,'med', 'diff']),
        'length' => $faker->numberBetween(10  , 600)   ,
        'created_at' =>$faker->dateTime()   ,
        'updated_at' =>$faker->dateTime()


    ];
});
