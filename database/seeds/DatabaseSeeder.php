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




		DB::table('pasajeros')->insert([
	        ['id' => 1,'IdUser'=>'1', 'Nombre' => 'Marcos'  ,'PrimerApellido' => 'Arteaga','SegundoApellido'=> 'Valle','NumeroDocumento' => '49899096k','Sexo'=>'Hombre'  ,'created_at' => new DateTime, 'updated_at' => new DateTime],
	        ['id' => 2,'IdUser'=>'1', 'Nombre' => 'Miguel'  ,'PrimerApellido' => 'Arteaga','SegundoApellido'=> 'Valle','NumeroDocumento' => '49899095C','Sexo'=>'Hombre'  ,'created_at' => new DateTime, 'updated_at' => new DateTime]

	    ]);


	    DB::table('paises')->insert([
	    	['id' => 1, 'Nombre' => 'España','created_at' => new DateTime, 'updated_at' => new DateTime]
	    ]);


	    DB::table('billetes')->insert([
	    	['id' => 1,'idUser' => 1,'idPasajeros'=> 1 ,'CiudadOrigen'=> 15,'CiudadDestino'=> 30,'FechaIDa'=>'2019-05-14','FechaVuelta'=>'2019-05-13','HoraIda'=>'15:19:12','HoraVuelta'=>'20:19:12','EstadoBillete'=>'No emitido','EstadoPago'=>'En Espera','ComisionPrecio'=>50,'Precio'=>200,'PrecioTotal'=>250,'created_at' => new DateTime, 'updated_at' => new DateTime],
	    	['id' => 2,'idUser' => 3,'idPasajeros'=> 2 ,'CiudadOrigen'=> 20,'CiudadDestino'=> 5,'FechaIDa'=>'2019-05-14','FechaVuelta'=>'2019-05-13','HoraIda'=>'15:19:12','HoraVuelta'=>'20:19:12','EstadoBillete'=>'emitido','EstadoPago'=>'Pagado','ComisionPrecio'=>40,'Precio'=>150,'PrecioTotal'=>190,'created_at' => new DateTime, 'updated_at' => new DateTime]

	    ]);


	    

        DB::table('comision')->insert([
            ['id'=>1,'comision'=>0,'created_at' => new DateTime, 'updated_at' => new DateTime]
        ]);



        $meses=['01','02','03','04','05','06','07','08','09','10','11','12'];
        $meses28=['02'];
        $meses30=['04','06','09','11'];
        $meses31=['01','03','05','07','08','10','12'];

        $cantidadMeses28=count($meses28);
        $cantidadMeses30=count($meses30);
        $cantidadMeses31=count($meses31);

        $TotalMeses=$cantidadMeses28+$cantidadMeses30+$cantidadMeses31;

        $ciudades = [['Albacete','1'],['Ciudad Real','2'],['Cuenca','3'],['Guadalajara','4'],['Toledo','5'],['Huesca','6'],['Teruel','7'],['Zaragoza','8'],['Ceuta','9'],['Madrid','10'],['Murcia','11'],['Melilla','12'],['Navarra','13'],['Almería','14'],['Cádiz','15'],['Córdoba','16'],['Granada','17'],['Huelva','18'],['Jaén','19'],['Málaga','20'],['Sevilla','21'],['Asturias','22'],['Cantabria','23'],['Ávila','24'],['Burgos','25'],['León','26'],['Palencia','27'],['Salamanca','28'],['Segovia','29'],['Soria','30'],['Valladolid','31'],['Zamora','32'],['Barcelona','33'],['Gerona','34'],['Lérida','35'],['Tarragona','36'],['Badajoz','37'],['Cáceres','38'],['La Coruña','39'], ['Lugo','40'], ['Orense','41'], ['Pontevedra','42'], ['La Rioja','43'], ['Islas Baleares','44'],['Álava','45'], ['Guipúzcoa','46'], ['Vizcaya','47'], ['Las Palmas','48'],['Santa Cruz De Tenerife','49'],['Alicante','50'],['Castellón','51'], ['Valencia','52']];

        $r=1;
        
            
        
        for ($i=0; $i < $TotalMeses ; $i++) { 

            if (in_array($meses[$i], $meses28)) {

                for ($j=1; $j <= 28 ; $j++) { 
                //print_r(date('Y')."-".$meses[$i]."-".$j);
                    $dig=strlen($j);
                    if ($dig==1) {
                        $j="0".$j;
                    }
                    $dia=date('Y')."-".$meses[$i]."-".$j;
                    
                    for ($c=0; $c < count($ciudades) ; $c++) {
                        foreach ($ciudades as  $value) {
                            if ($ciudades[$c][0]!=$value[0]) {
                                $precio=rand(50,150);
                                //print_r($r."-".$dia."-".$ciudades[$c][0]."-".$ciudades[$c][1]."-".$value[0]."-".$value[1]."-".$precio."-"."18:00");
                                DB::table('billetesVentas')->insert([
                                ['id' => $r, 'Fecha' => $dia,'HoraIda' => '18:00','HoraLlegada' => '10:00','Precio' => $precio,'CiudadOrigen' => $ciudades[$c][1] ,'CiudadDestino' => $value[1],'created_at' => new DateTime, 'updated_at' => new DateTime]
                                ]);

                                
                                $r=$r+1; 
 
                            }

                        } 

                    }
                }
            }
            elseif (in_array($meses[$i], $meses30)) {
                for ($j=1; $j <= 30 ; $j++) { 
                    //print_r(date('Y')."-".$meses[$i]."-".$j);
                    $dig=strlen($j);
                    if ($dig==1) {
                        $j="0".$j;
                    }   
                    $dia=date('Y')."-".$meses[$i]."-".$j;
                    
                    for ($c=0; $c < count($ciudades) ; $c++) {
                        foreach ($ciudades as  $value) {
                            if ($ciudades[$c][0]!=$value[0]) {
                                $precio=rand(50,150);
                                //print_r($r."-".$dia."-".$ciudades[$c][0]."-".$ciudades[$c][1]."-".$value[0]."-".$value[1]."-".$precio."-"."18:00");
                                DB::table('billetesVentas')->insert([
                                ['id' => $r, 'Fecha' => $dia,'HoraIda' => '18:00','HoraLlegada' => '10:00','Precio' => $precio,'CiudadOrigen' => $ciudades[$c][1] ,'CiudadDestino' => $value[1],'created_at' => new DateTime, 'updated_at' => new DateTime]
                                ]);
                                
                                $r=$r+1; 
 
                            }
                        } 
                    }
                }
            }
            elseif (in_array($meses[$i], $meses31)) {
                for ($j=1; $j <= 31 ; $j++) { 
                    //print_r(date('Y')."-".$meses[$i]."-".$j);
                    $dig=strlen($j);
                    if ($dig==1) {
                        $j="0".$j;
                    }
                    $dia=date('Y')."-".$meses[$i]."-".$j;
                    
                    for ($c=0; $c < count($ciudades) ; $c++) {
                        foreach ($ciudades as  $value) {
                            if ($ciudades[$c][0]!=$value[0]) {
                                $precio=rand(50,150);
                                //print_r($r."-".$dia."-".$ciudades[$c][0]."-".$ciudades[$c][1]."-".$value[0]."-".$value[1]."-".$precio."-"."18:00");
                                DB::table('billetesVentas')->insert([
                                ['id' => $r, 'Fecha' => $dia,'HoraIda' => '18:00','HoraLlegada' => '10:00','Precio' => $precio,'CiudadOrigen' => $ciudades[$c][1] ,'CiudadDestino' => $value[1],'created_at' => new DateTime, 'updated_at' => new DateTime]
                                ]);
                                $r=$r+1; 
 
                            }

                        } 

                    }
                }
            }


        }
    }
}
