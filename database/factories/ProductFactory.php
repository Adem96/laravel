<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Categorie;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=>$this->faker->text('10'),
        'categorie_id'=>Categorie::all()->random()->id,
    ];
});
