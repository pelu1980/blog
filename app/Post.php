<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
	//$fillable nos autoriza a cargar estos campos de forma masiva
    protected $fillable = [
    	'titulo','user_id','category_id','slug','extracto','contenido','estado','imagen'
    ];

    
	//Relaciones entre tablas

	//Un post está creado por un User --> Inversa de un User tine muchos Posts
	//Relacion uno a muchos (Inverso)

	public function user (){
		return $this->belongsTo('App\User');
	}

	//Un post pertenece a una Category  --> Inversa de una Category tiene muchos Posts
	//Relacion uno a muchos

	public function category (){
		return $this->belongsTo('App\Category');
	}

	//Un post tiene muchas Tags  --> Relacion muchos a muchos

	public function tags (){
		return $this->belongsToMany('App\Tag');
	}

}
