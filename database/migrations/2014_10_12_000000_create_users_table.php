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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamps();
        });


        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Password');
            $table->timestamps();
        });


        Schema::create('pasajeros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Email');
            $table->string('Pasaporte');
            $table->timestamps();
        });

         Schema::create('billetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idUser')->references('id')->on('users');
            $table->string('idPasajeros')->references('id')->on('pasajeros');
            $table->integer('CiudadOrigen')->references('id')->on('ciudades');
            $table->integer('CiudadDestino')->references('id')->on('ciudades');
            $table->date('FechaIda');
            $table->date('FechaVuelta');
            $table->time('HoraIda');
            $table->time('HoraVuelta');
            $table->string('EstadoBillete');
            $table->string('EstadoPago');
            $table->float('ComisionPrecio');
            $table->float('Precio');
            $table->timestamps();
        });


         Schema::create('paises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->timestamps();
        });


         Schema::create('consultabilletes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('FechaIda');
            $table->date('FechaVuelta');
            $table->time('HoraIda');
            $table->time('HoraVuelta');
            $table->float('Precio');
            $table->string('CiudadOrigen');
            $table->string('CiudadDestino');


            $table->timestamps();
        });

          Schema::create('ciudades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('idPais')->references('id')->on('paises');

            $table->timestamps();
        });


        Schema::create('oferta1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('oferta2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('oferta3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
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
        Schema::dropIfExists('oferta3');
        Schema::dropIfExists('oferta2');
        Schema::dropIfExists('oferta1');
        Schema::dropIfExists('ciudades');
        Schema::dropIfExists('consultabilletes');
        Schema::dropIfExists('paises');
        Schema::dropIfExists('billetes');
        Schema::dropIfExists('pasajeros');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('users');
    }
}
