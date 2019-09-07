<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
       'name' => $faker->name,
       'email' => $faker->email,
       'birthday' => $faker->dateTimeThisCentury->format('Y-m-d'),
       'user_id' => function(){
          return factory(App\User::class)->create()->id;
        },
   ];
});