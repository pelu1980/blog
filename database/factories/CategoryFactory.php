<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    
	$titulo = $faker->sentence(4);
    return [
        'descripcion'   => $titulo,
        'slug'			=> str_slug($titulo),
    ];
});
