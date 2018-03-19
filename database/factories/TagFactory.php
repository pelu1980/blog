<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    
	$titulo = $faker->unique()->word(3);
    return [
        'descripcion'   => $titulo,
        'slug'			=> str_slug($titulo),
    ];
});
