<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('ciudades')->insert([
            ['id' => 1, 'idPais' => 1  ,  'Nombre' => 'Albacete', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'idPais' => 1  ,  'Nombre' => 'Ciudad Real', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'idPais' => 1  ,  'Nombre' => 'Cuenca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'idPais' => 1  ,  'Nombre' => 'Guadalajara', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'idPais' => 1  ,  'Nombre' => 'Toledo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'idPais' => 1  ,  'Nombre' => 'Huesca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'idPais' => 1  ,  'Nombre' => 'Teruel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'idPais' => 1  ,  'Nombre' => 'Zaragoza', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'idPais' => 1  , 'Nombre' => 'Ceuta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'idPais' => 1  , 'Nombre' => 'Madrid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'idPais' => 1  , 'Nombre' => 'Murcia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'idPais' => 1  , 'Nombre' => 'Melilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'idPais' => 1  , 'Nombre' => 'Navarra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'idPais' => 1  ,  'Nombre' => 'Almería', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'idPais' => 1  ,  'Nombre' => 'Cádiz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'idPais' => 1  ,  'Nombre' => 'Córdoba', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 17, 'idPais' => 1  ,  'Nombre' => 'Granada', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 18, 'idPais' => 1  ,  'Nombre' => 'Huelva', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 19, 'idPais' => 1  ,  'Nombre' => 'Jaén', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 20, 'idPais' => 1  ,  'Nombre' => 'Málaga', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 21, 'idPais' => 1  ,  'Nombre' => 'Sevilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 22, 'idPais' => 1  ,  'Nombre' => 'Asturias', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 23, 'idPais' => 1  ,  'Nombre' => 'Cantabria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 24, 'idPais' => 1  ,  'Nombre' => 'Ávila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 25, 'idPais' => 1  ,  'Nombre' => 'Burgos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 26, 'idPais' => 1  ,  'Nombre' => 'León', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 27, 'idPais' => 1  ,  'Nombre' => 'Palencia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 28, 'idPais' => 1  ,  'Nombre' => 'Salamanca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 29, 'idPais' => 1 ,  'Nombre' => 'Segovia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 30, 'idPais' => 1 ,  'Nombre' => 'Soria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 31, 'idPais' => 1 ,  'Nombre' => 'Valladolid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 32, 'idPais' => 1 ,  'Nombre' => 'Zamora', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 33, 'idPais' => 1,   'Nombre' => 'Barcelona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 34, 'idPais' => 1,   'Nombre' => 'Gerona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 35, 'idPais' => 1,  'Nombre' => 'Lérida', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 36, 'idPais' => 1,  'Nombre' => 'Tarragona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 37, 'idPais' => 1,   'Nombre' => 'Badajoz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 38, 'idPais' => 1,   'Nombre' => 'Cáceres', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 39, 'idPais' => 1,  'Nombre' => 'La Coruña', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 40, 'idPais' => 1,   'Nombre' => 'Lugo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 41, 'idPais' => 1,   'Nombre' => 'Orense', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 42, 'idPais' => 1,   'Nombre' => 'Pontevedra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 43, 'idPais' => 1,   'Nombre' => 'La Rioja', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 44, 'idPais' => 1,  'Nombre' => 'Islas Baleares', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 45, 'idPais' => 1,   'Nombre' => 'Álava', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 46, 'idPais' => 1,   'Nombre' => 'Guipúzcoa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 47, 'idPais' => 1,   'Nombre' => 'Vizcaya', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 48, 'idPais' => 1,    'Nombre' => 'Las Palmas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 49, 'idPais' => 1,    'Nombre' => 'Santa Cruz De Tenerife', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 50, 'idPais' => 1,   'Nombre' => 'Alicante', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 51, 'idPais' => 1,   'Nombre' => 'Castellón', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 52, 'idPais' => 1,   'Nombre' => 'Valencia', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        ]);


		DB::table('admin')->insert([
	        ['id' => 1, 'Nombre' => 'marcos','Password' => 'marcos123' ,'created_at' => new DateTime, 'updated_at' => new DateTime],
	        ['id' => 2, 'Nombre' => 'miguel'  ,'Password' => 'miguel123' ,'created_at' => new DateTime, 'updated_at' => new DateTime]

	    ]);


		DB::table('pasajeros')->insert([
	        ['id' => 1, 'Nombre' => 'marcos'  ,'Apellidos' => 'Arteaga Valle'  ,'Email' => 'marcos@gmail.com','Pasaporte' => '49899096k'  ,'created_at' => new DateTime, 'updated_at' => new DateTime],
	        ['id' => 2, 'Nombre' => 'miguel'  ,'Apellidos' => 'Arteaga Valle'    ,'Email' => 'miguel@gmail.com','Pasaporte' => '49899095c' ,'created_at' => new DateTime, 'updated_at' => new DateTime]

	    ]);


	    DB::table('paises')->insert([
	    	['id' => 1, 'Nombre' => 'España','created_at' => new DateTime, 'updated_at' => new DateTime]
	    ]);


	    DB::table('billetes')->insert([
	    	['id' => 1,'idUser' => 1,'idPasajeros'=> 1 ,'CiudadOrigen'=> 15,'CiudadDestino'=> 30,'FechaIDa'=>'2019-05-14','FechaVuelta'=>'2019-05-13','HoraIda'=>'15:19:12','HoraVuelta'=>'20:19:12','EstadoBillete'=>'No emitido','EstadoPago'=>'En Espera','ComisionPrecio'=>50,'Precio'=>200,'created_at' => new DateTime, 'updated_at' => new DateTime],
	    	['id' => 2,'idUser' => 3,'idPasajeros'=> 2 ,'CiudadOrigen'=> 20,'CiudadDestino'=> 5,'FechaIDa'=>'2019-05-14','FechaVuelta'=>'2019-05-13','HoraIda'=>'15:19:12','HoraVuelta'=>'20:19:12','EstadoBillete'=>'emitido','EstadoPago'=>'Pagado','ComisionPrecio'=>40,'Precio'=>150,'created_at' => new DateTime, 'updated_at' => new DateTime]

	    ]);


	    DB::table('billetesVentas')->insert([
            ['id' => 1, 'Fecha' => '2019-05-16','HoraIda' => '15:19:12','HoraLlegada' => '20:19:12','Precio' => 150,'CiudadOrigen' => 20 ,'CiudadDestino' => 5,'created_at' => new DateTime, 'updated_at' => new DateTime]
        ]);




    }
}
