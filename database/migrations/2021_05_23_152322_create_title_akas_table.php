<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleAkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_akas', function (Blueprint $table) {
            $table->string('titleId');
            $table->integer('ordering');
            $table->string('title');
            $table->string('region')->nullable();
            $table->string('language')->nullable();
            $table->string('types')->nullable();
            $table->string('attributes')->nullable();
            $table->boolean('isOriginalTitle');
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
        Schema::dropIfExists('title_akas');
    }
}
