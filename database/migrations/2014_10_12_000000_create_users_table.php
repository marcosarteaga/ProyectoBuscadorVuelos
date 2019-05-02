<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('ventasClientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Codi billete')->references('id')->on('billetes');
            $table->integer('Telefono');
            $table->string('Pasaporte');
            $table->integer('Codigo postal');
            $table->string('Ciudad');
            $table->string('Pais');
            $table->timestamps();
        });

         Schema::create('billetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Origen');
            $table->string('Destino');
            $table->date('Fecha Ida');
            $table->date('Fecha Vuelta');
            $table->timestamps();
        });


        Schema::create('contenidomultimedia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Fotos');
            $table->string('Videos');
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
        Schema::dropIfExists('contenidomultimedia');
        Schema::dropIfExists('billetes');
        Schema::dropIfExists('ventasClientes');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('users');
    }
}
