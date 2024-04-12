<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('studio');
            $table->integer('release_year');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
