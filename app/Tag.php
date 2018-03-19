<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

	//$fillable nos autoriza a cargar estos campos de forma masiva
    protected $fillable = [
    	'descripcion','slug'
    ];
    //Relaciones

    //Muchas etiquetas pertenecen a muchos post --> Relacion muchos a muchos

    public function posts (){
    	return $this->belongsToMany('App\Post');
    }
}
