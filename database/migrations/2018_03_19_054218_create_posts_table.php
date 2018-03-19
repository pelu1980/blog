<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->string('slug');
            $table->mediumText('extracto')->nullable;
            $table->text('contenido');
            $table->enum('estado', ['PUBLICADO','BORRADOR'])->default('BORRADOR');  
            $table->string('imagen')->nullable;
            $table->timestamps();

            //RELACIONES - CLAVES FORANEAS

            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
