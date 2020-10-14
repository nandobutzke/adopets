<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Animals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id_animal');
            $table->integer('nr_age');
            $table->string('nm_name');
            $table->string('ds_genre');   
            $table->string('ds_species');
            $table->string('ds_breed');
            $table->string('ds_email');
            $table->string('ds_bio');
            $table->dateTime('dt_data_publish');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('user');
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
        Schema::dropIfExists('animals');
    }
}
