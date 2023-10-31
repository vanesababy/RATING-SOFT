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
