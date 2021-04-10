<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNameBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('name_basics', function (Blueprint $table) {
            //$table->id();
            // there's already an id column in the imdb db known as nconst
            $table->string('nconst');
            $table->string('primary_name');
            $table->year('birth_year');
            $table->year('death_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('name_basics');
    }
}
