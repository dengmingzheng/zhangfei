<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Account;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'password' => bcrypt('123456'),
        'created_at' => Carbon::now(),
    ];
});
