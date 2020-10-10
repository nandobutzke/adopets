<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('nm_user');
            $table->string('ds_public_place');   //logradouro
            $table->string('ds_complement');
            $table->string('nm_neighborhood');
            $table->integer('nr_cep');
            $table->integer('nr_phone');
            $table->string('ds_email');
            $table->string('ds_bio');
            $table->dateTime('dt_birth');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
