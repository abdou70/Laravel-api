<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Compte;
use Faker\Generator as Faker;

$factory->define(Compte::class, function (Faker $faker) {

    return [
        'numcompte' => $faker->word,
        'numagence' => $faker->word,
        'clerib' => $faker->randomDigitNotNull,
        'ninea' => $faker->word,
        'dateouv' => $faker->word,
        'fraisouv' => $faker->word,
        'client' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
