<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenreTypeToGenresTable extends Migration
{
    public function up()
    {
        Schema::table('genres', function (Blueprint $table) {
            $table->string('genre_type')->nullable();
        });
    }

    public function down()
    {
        Schema::table('genres', function (Blueprint $table) {
            $table->dropColumn('genre_type');
        });
    }
}
