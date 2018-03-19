<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	//$fillable nos autoriza a cargar estos campos de forma masiva
    protected $fillable = [
    	'descripcion','slug'
    ];


    //Relaciones

    //Una categoria tiene muchos Posts --> Relacion uno a Muchos

    public function posts (){
    	return $this->hasMany('App\Post');
    }
}
