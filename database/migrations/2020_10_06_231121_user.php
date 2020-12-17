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
            $table->string('nr_cep');
            $table->string('nr_phone');
            $table->string('ds_email', 60)->unique();
            $table->string('ds_password');
            $table->string('ds_bio');
            $table->dateTime('dt_birth');
            $table->timestamps();
        });

        Schema::table('user', function(Blueprint $table) {
            $table->string('ds_state')->after('nr_cep')->nullable();
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
