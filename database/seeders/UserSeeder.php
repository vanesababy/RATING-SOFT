<?php

namespace Database\Seeders;

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
        User::create([
            'name'=>'Juan Orozco',
            'email'=>'juanjoseorozco9@gmail.com',
            'password'=> bcrypt('1234567890')
        ])->assignRole('admin');

        User::create([
            'name'=>'usuario',
            'email'=>'usuario@gmail.com',
            'password'=> bcrypt('1234567890')
        ])->assignRole('usuario');
    }
}
