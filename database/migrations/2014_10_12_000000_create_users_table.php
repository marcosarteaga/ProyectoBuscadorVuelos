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
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('telefono');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('isAdmin');
            $table->timestamps();
        });


        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('title');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('pasajeros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('IdUser');
            $table->string('Nombre');
            $table->string('PrimerApellido');
            $table->string('SegundoApellido');
            $table->string('NumeroDocumento');
            $table->string('Sexo');
            $table->timestamps();
        });

         Schema::create('billetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idUser')->references('id')->on('users');
            $table->string('idPasajeros')->references('id')->on('pasajeros');
            $table->integer('CiudadOrigen')->references('id')->on('ciudades');
            $table->integer('CiudadDestino')->references('id')->on('ciudades');
            $table->date('FechaIda');
            $table->date('FechaVuelta')->nullable();
            $table->time('HoraIda');
            $table->time('HoraVuelta')->nullable();
            $table->string('EstadoBillete');
            $table->string('EstadoPago');
            $table->float('ComisionPrecio');
            $table->float('Precio');
            $table->float('PrecioTotal');
            $table->timestamps();
        });


         Schema::create('paises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->timestamps();
        });


         Schema::create('billetesVentas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Fecha');
            $table->time('HoraIda');
            $table->time('HoraLlegada');
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

        Schema::create('comision', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comision');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('admins');
    }
}
