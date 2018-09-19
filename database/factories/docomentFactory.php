<?php

use Faker\Generator as Faker;

$factory->define(\App\Document::class, function (Faker $faker) {
        return [
            'title' => $faker->name,
            'body' =>$faker->text  ,
            'created_at' =>$faker->dateTime()   ,
            'updated_at' =>$faker->dateTime()


        ];
});
