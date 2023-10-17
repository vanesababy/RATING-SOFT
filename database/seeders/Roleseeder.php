<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2  = Role::create(['name'=>'Usuario']);
        $role3  = Role::create(['name'=>'Profesor']);
        $role3  = Role::create(['name'=>'directivo']);


        Permission::create(['name'=>'admin'])->syncRoles([$role1]);
        Permission::create(['name'=>'usuario'])->syncRoles([$role2]);
        Permission::create(['name'=>'profesor'])->syncRoles([$role2]);
        Permission::create(['name'=>'directivo'])->syncRoles([$role2]);


        
        Permission::create(['name'=>'lugars.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'lugars.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'lugars.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'lugars.show'])->syncRoles([$role1]);
        Permission::create(['name'=>'lugars.destroy'])->syncRoles([$role1]);
      


    }
}
