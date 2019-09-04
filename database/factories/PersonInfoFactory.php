<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\PersonInfo;
use App\Model\Hospital;
use Faker\Generator as Faker;

$factory->define(PersonInfo::class, function (Faker $faker) {
    return [
        //
        'first_name'=>$faker->firstNameMale,
        'middle_name'=>$faker->firstNameMale,
        'last_name'=>$faker->lastName,
        'personal_id'=>function(){return Hospital::all()->random();},
        'phone_number'=>$faker->e164PhoneNumber,    
        'd_o_b'=>$faker->date,
        'address'=>$faker->address

    ];
});
