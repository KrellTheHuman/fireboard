<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'image_url' => $faker->imageUrl(300, 300),
        'hours_capacity' => $faker->numberBetween(20, 55),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(8, true),
        'description' => $faker->sentences(3, true),
        'due_date' => $faker->dateTimeBetween('now', '60 days'),
        'contact_name' => $faker->name,
        'contact_email' => $faker->safeEmail,
        'contact_phone' => $faker->phoneNumber,
        'dev_url' => $faker->url,
        'live_url' => $faker->url,
//        'priority' => $faker->numberBetween(1, 99),
    ];
});

$factory->define(App\Subtask::class, function (Faker\Generator $faker) {
    $status_enum = array(
        'Created',
        'Work in Progress',
        'Waiting on Client',
        'On Hold',
        'Completed',
    );

    return [
        'task_id' => $faker->numberBetween(1, 12),
        'name' => $faker->sentence(8, true),
        'description' => $faker->sentences(3, true),
        'status' => $status_enum[random_int(0,4)],
        'hours_estimate' => $faker->randomFloat(2,.25,8),
        'user_id' => $faker->numberBetween(1, 4),
    ];
});