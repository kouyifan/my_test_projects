<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Front\Blogs::class, function (Faker $faker) {
    return [
        'title' => $faker->text(rand(5,20)),
        'content' => $faker->realText(100),
        'views' =>  rand(0,100),
        'user_id'   =>  \App\User::orderByRaw("RAND()")->value('id')
    ];
});
