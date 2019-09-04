<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Hospital;
use Faker\Generator as Faker;

$factory->define(Hospital::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->company,
        'address'=>$faker->address,
        'national_id'=>$faker->numberBetween(100,10000),
        'password'=>$faker->word,
    ];
});
