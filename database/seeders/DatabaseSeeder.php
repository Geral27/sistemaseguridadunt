<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alumno;
use App\Models\Dispositivo;
use App\Models\Rol;
use App\Models\Usuario;
use App\Models\Vehiculo;
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
        $this->call(LaratrustSeeder::class);

        Alumno::create(['id'=>1,
            'dni'=>70821756,
            'nombres'=>'Geraldine Adela',
            'apellidos'=>'Roncal Sánchez',
            'codigomatricula'=>1513300918,
            'facultad'=>'Facultad de Ingeniería',
            'escuela'=>'Ingeniería de Sistemas',
            'telefono'=>920571437,
            'correo'=>'groncal@unitru.edu.pe',
        ]);
        Alumno::create(['id'=>2,
            'dni'=>70821757,
            'nombres'=>'Leslie Eliana',
            'apellidos'=>'Roncal Sánchez',
            'codigomatricula'=>1513301118,
            'facultad'=>'Facultad de Ingeniería',
            'escuela'=>'Ingeniería de Sistemas',
            'telefono'=>920571437,
            'correo'=>'lroncal@unitru.edu.pe',
        ]);
        Alumno::create(['id'=>3,
            'dni'=>70821755,
            'nombres'=>'Ericka Paola',
            'apellidos'=>'Salvador Llaro',
            'codigomatricula'=>1513301218,
            'facultad'=>'Facultad de Ingeniería',
            'escuela'=>'Ingeniería de Sistemas',
            'telefono'=>920571437,
            'correo'=>'esalvador@unitru.edu.pe',
        ]);
        Alumno::create(['id'=>4,
            'dni'=>70821754,
            'nombres'=>'Doris Adela',
            'apellidos'=>'Sánchez Luján',
            'codigomatricula'=>1513301318,
            'facultad'=>'Facultad de Medicina',
            'escuela'=>'Escuela de Medicina',
            'telefono'=>920571437,
            'correo'=>'dsanchez@unitru.edu.pe',
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       /*  Dispositivo::create(['id' => 1,
            'codigodispositivo' => 1,
            'tipodispositivo' => 'Tablet',
            'marca' => 'Lenovo',
            'color' => 'Negro',
            'serie' => 'PF1X14WS',
            'alumno_id' => 1,
            'facultad' => 'Facultad de Ingenieria',
            'escuela' => 'Escuela de Ingeniería de Sistemas',
        ]);
        Dispositivo::create(['id' => 2,
            'codigodispositivo' => 2,
            'tipodispositivo' => 'Laptop',
            'marca' => 'Lenovo',
            'color' => 'Negro',
            'serie' => '159644785Pu',
            'alumno_id' => 1,
            'facultad' => 'Facultad de Ciencias Sociales',
            'escuela' => 'Escuela de Educación Primaria',
        ]);
 */


        /*Vehiculo::create(['id'=>1,
            'codigovehiculo'=> 'A001',
            'tipovehiculo'=> 'Vigente',
            'modelo'=> 'Nissan',
            'placa'=> 'A41-000',
            'soat'=> 'Vigente',
            'facultad'=> 'Facultad de Medicina',
            'escuela'=> 'Escuela de Medicina',
            'alumno_id'=> 1,
        ]);*/


    }
}
