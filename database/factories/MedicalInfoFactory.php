<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\MedicalInfo;
use App\Model\PersonInfo;
use Faker\Generator as Faker;

$factory->define(MedicalInfo::class, function (Faker $faker) {
    return [
        //
        'personal_id'=>function(){ return PersonInfo::all()->random();},
        'weight'=>$faker->randomFloat,
        'height'=>$faker->randomFloat,
        'temperature'=>$faker->randomFloat,
        'blood_pressure'=>$faker->randomFloat,
        'reason_for_visit'=>$faker->paragraph
        
    ];
});
