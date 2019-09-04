<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\PersonInfo;
use Faker\Generator as Faker;

$factory->define(PersonInfo::class, function (Faker $faker) {
    return [
        //
        'first_name'=>$faker->firstNameMale,
        'middle_name'=>$faker->firstNameMale,
        'last_name'=>$faker->lastName,
        'national_id'=>$faker->numberBetween(100,10000),
        'phone_number'=>$faker->e164PhoneNumber,    
        'd_o_b'=>$faker->date,
        'address'=>$faker->address

    ];
});
