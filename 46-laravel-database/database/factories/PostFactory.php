<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;

use App\Model;

use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title'    => $faker -> word(),
      'text'     => $faker -> text(),
      'category' => $faker -> word(),
      'like'     => $faker -> randomDigit(),
      'dislike'  => $faker -> randomDigit()
    ];
});
