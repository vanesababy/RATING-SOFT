<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $persona = new Persona([
            'nombre1' => 'Juan',
            'nombre2' => 'José',
            'apellido1' => 'Orozco',
            'apellido2' => 'Chilito',
            'identificacion' => '1002877490',
            'idTipoIdentificacion' => 1,
            'sexo' => 'M',
            'fechaNac' => '2001-01-21',
            'rh' => 'A+',
            'identificacion' => '1002877490',
            'direccion' => 'CALLE 15# 18-54',
            'email' => 'juanjoseorozco9@gmail.com',
            'telefonoFijo' => '3232226544',
            'celular' => '3232226544',
            'padre' => 'jose orozco',
            'ocupacionPadre' => 'ganadero',
            'madre' => 'rubi chilito',
            'ocupacionMadre' => 'ama de casa',
        ]);

        $persona->save();

        $user = User::create([
            'name' => 'Juan Orozco',
            'email' => 'juanjoseorozco9@gmail.com',
            'password' => bcrypt('1234567890'),
            'idPersona' => $persona->id,
        ])->assignRole('Admin');

        $persona = new Persona([
            'nombre1' => 'andres',
            'nombre2' => 'jesus',
            'apellido1' => 'gomez',
            'apellido2' => 'perez',
            'identificacion' => '1002855480',
            'idTipoIdentificacion' => 1,
            'sexo' => 'M',
            'fechaNac' => '1984-01-21',
            'rh' => 'A+',
            'direccion' => 'CALLE 15# 18-54',
            'email' => 'directivo@gmail.com',
            'telefonoFijo' => '3232226544',
            'celular' => '3232226544',
            'padre' => 'jesus gomez',
            'ocupacionPadre' => 'profesor',
            'madre' => 'cristina perez',
            'ocupacionMadre' => 'desarrolladora',
        ]);

        $persona->save();

        $user = User::create([
            'name' => 'Andres',
            'email' => 'directivo@gmail.com',
            'password' => bcrypt('1234567890'),
            'idPersona' => $persona->id,
        ])->assignRole('Directivo');


        $persona = new Persona([
            'nombre1' => 'estiven',
            'nombre2' => 'daniel',
            'apellido1' => 'rodriguez',
            'apellido2' => 'suarez',
            'identificacion' => '1002548725',
            'idTipoIdentificacion' => 1,
            'sexo' => 'M',
            'fechaNac' => '1990-01-21',
            'rh' => 'A+',
            'direccion' => 'CALLE 15# 18-54',
            'email' => 'profesor@gmail.com',
            'telefonoFijo' => '3232226544',
            'celular' => '3232226544',
            'padre' => 'daniel rodriguez',
            'ocupacionPadre' => 'ingeniero',
            'madre' => 'cristina suarez',
            'ocupacionMadre' => 'periodista',
        ]);

        $persona->save();

        $user = User::create([
            'name' => 'estiven',
            'email' => 'profesor@gmail.com',
            'password' => bcrypt('1234567890'),
            'idPersona' => $persona->id,
        ])->assignRole('Profesor');

        $persona = new Persona([
            'nombre1' => 'brayan',
            'nombre2' => 'jose',
            'apellido1' => 'lopez',
            'apellido2' => 'cruz',
            'identificacion' => '100265415',
            'idTipoIdentificacion' => 1,
            'sexo' => 'M',
            'fechaNac' => '2007-01-21',
            'rh' => 'A+',
            'direccion' => 'CALLE 15# 18-54',
            'email' => 'alumno@gmail.com',
            'telefonoFijo' => '3232226544',
            'celular' => '3232226544',
            'padre' => 'daniel rodriguez',
            'ocupacionPadre' => 'ingeniero',
            'madre' => 'cristina suarez',
            'ocupacionMadre' => 'periodista',
        ]);

        $persona->save();

        $user = User::create([
            'name' => 'brayan',
            'email' => 'alumno@gmail.com',
            'password' => bcrypt('1234567890'),
            'idPersona' => $persona->id,
        ])->assignRole('alumno');

    }
}
