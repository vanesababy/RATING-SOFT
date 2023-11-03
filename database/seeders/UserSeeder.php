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
            'name'=>'Juan Orozco',
            'email'=>'juanjoseorozco9@gmail.com',
            'password'=> bcrypt('1234567890'),
            'idPersona'=> $persona->id
        ])->assignRole('Admin');

        return $user;

    }
}
