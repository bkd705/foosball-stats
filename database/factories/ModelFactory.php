<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'player_one' => function() {
          return factory(App\User::class)->create()->id;
        },
        'player_two' => function() {
          return factory(App\User::class)->create()->id;
        }
    ];
});

$factory->define(App\Game::class, function (Faker $faker) {
  $toChange = $faker->boolean;
  return [
      'team_one_id' => function() {
        return factory(App\Team::class)->create()->id;
      },
      'team_two_id' => function() {
        return factory(App\Team::class)->create()->id;
      },
      'team_one_goals' => $faker->randomDigit,
      'team_two_goals' => $faker->randomDigit
  ];
});
