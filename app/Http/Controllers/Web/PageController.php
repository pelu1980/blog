<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;

class PageController extends Controller
{


	//////// INDEX --> Lista todos los Post Publicados ///////

    public function index(){
    	$posts = Post::orderBy('id','DESC')->where('estado','PUBLICADO')->paginate(3);
    	return view('web.index',compact('posts'));
    }

    /////// POST  -->	Mustra un Post particular con todo el detalle //////
    public function post($slug){
    	$post = Post::where('slug',$slug)->first();
    	return view('web.post',compact('post'));
    }


    /////// CATEGORY  --> Lista todos los Posts correspondientes a una determinada Categoría ////////
    public function category($slug){
    	$category_id = Category::where('slug',$slug)->pluck('id')->first();
    	$posts = Post::where('category_id',$category_id)
    					->orderBy('id','DESC')->where('estado','PUBLICADO')->paginate(3);

    	return view('web.index',compact('posts'));
    }



    /////// TAG  --> Lista todos los Posts correspondientes a una Etiqueta determinada //////////////
    public function tag($slug){
    	$posts = Post::whereHas('tags',function($query) use ($slug){
    		$query->where('slug',$slug);
    	})->orderBy('id','DESC')->where('estado','PUBLICADO')->paginate(3);
    	//dd($posts);
    	return view('web.index',compact('posts'));
    }


}
