<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

	$titulo = $faker->sentence(4);
    return [
    	'user_id'		=> rand(1,30),
    	'category_id'	=> rand(1,20),
    	'slug'			=> str_slug($titulo),
        'titulo'   		=> $titulo,
        'extracto'		=> $faker->text(100),
        'contenido'		=> $faker->text(500),
        'estado'		=> $faker->randomElement(['BORRADOR','PUBLICADO']),
        'imagen'		=> $faker->imageUrl($widt=1200, $height=400),
    ];
});
