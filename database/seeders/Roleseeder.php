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
        $role2  = Role::create(['name'=>'Directivo']);
        $role3  = Role::create(['name'=>'Profesor']);
        $role4  = Role::create(['name'=>'alumno']);

        // permisos para el home del admin
        Permission::create(['name'=>'resgistarUsuario',
                            'description' => 'Registrar usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.index',
                            'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2, $role3 , $role4]);
        Permission::create(['name'=>'admin.users.index',
                            'description' => 'Ver el listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.index',
                            'description' => 'Ver listado roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit',
                            'description' => 'Asignar un rol'])->syncRoles([$role1]);

        //permisos para las asignaturas
        Permission::create(['name'=>'gestionAsignaturas.index',
                            'description' => "Gestion asignaturas"])->syncRoles([$role1, $role2 , $role3, $role4]);
        Permission::create(['name'=>'asignaturas.index',
                            'description' => "Ver Listado de asignaturas"])->syncRoles([$role1, $role2 , $role3, $role4]);
        Permission::create(['name'=>'asignaturas.create',
                            'description' => 'Crear asignatura'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'asignaturas.edit',
                            'description' => 'Editar asignatura'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'asignaturas.destroy',
                            'description' => 'Eliminar asignatura'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'asignaturas.show',
                            'description' => 'Ver asignatura'])->syncRoles([$role1, $role2 , $role3, $role4]);

        //permisos directivos
        Permission::create(['name'=>'directivo.index',
                            'description' => 'gestion Directivos'])->syncRoles([$role1, $role2]);

        //gestion de personal
        Permission::create(['name'=>'gestionPersonal.index',
                            'description' => 'gestion Personal'])->syncRoles([$role1, $role2, $role3]);
        
        //permisos para gestions de  profesores
        Permission::create(['name'=>'profesor.index',
                            'description' => 'Ver listado profesores'])->syncRoles([$role1 , $role2]);

        //permisos para gestion de estudiantes
        Permission::create(['name'=>'alumnos.index',
                            'description' => 'Ver listado estudiantes'])->syncRoles([$role1]);

        // permisos para modulo de documentos
        Permission::create(['name'=>'documentos.index',
                            'description' => 'Gestion de documentos'])->syncRoles([$role1, $role2 ,$role3, $role4]);;
        Permission::create(['name'=>'documentos.create',
                            'description' => 'Crear documento'])->syncRoles([$role1,  $role2 ,$role3, $role4]);
        Permission::create(['name'=>'documentos.edit',
                            'description' => 'Editar documento'])->syncRoles([$role1, $role2 ,$role3, $role4]);
        Permission::create(['name'=>'documentos.destroy',
                            'description' => 'Eliminar documento'])->syncRoles([$role1,  $role2 ,$role3, $role4]);
        Permission::create(['name'=>' documentos.show',
                            'description' => 'Ver documento'])->syncRoles([$role1,$role2 ,$role3, $role4]);

        // permisos para modulo de tipo documentos
        Permission::create(['name'=>'tipoDocumentos.index',
                            'description' => 'Gestion de tipo de documentos'])->syncRoles([$role1, $role2]);;
        Permission::create(['name'=>'tipoDocumento.create',
                            'description' => 'Crear tipo de documento'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'tipoDocumento.edit',
                            'description' => 'tipo de documento'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'tipoDocumento.destroy',
                            'description' => 'tipo de documento'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>' tipoDocumento.show',
                            'description' => 'Ver tipo de documento'])->syncRoles([$role1, $role2]);

        //permisos para tipo asignatura
        Permission::create(['name'=>'tipoAsignaturas.index',
                            'description' => 'Gestion de tipo asignaturas'])->syncRoles([$role1,$role2,$role3]);;
        Permission::create(['name'=>'tipoAsignaturas.create',
                            'description' => 'Crear tipo asignatura'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'tipoAsignaturas.edit',
                            'description' => 'Editar tipo asignatura'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'tipoAsignaturas.destroy',
                            'description' => 'Eliminar tipo asignatura'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'tipoAsignaturas.show',
                            'description' => 'Ver tipo asignatura'])->syncRoles([$role1,$role2,$role3]);
        
        // permisos para el modulo de grados
        Permission::create(['name'=>'grados.index',
                            'description' => 'Gestion de grados'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name'=>'grados.create',
                            'description' => 'Crear grado'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'grados.edit',
                            'description' => 'Editar grados'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'agregarEstudiante',
                            'description' => 'Agregar estudiantes'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'grados.destroy',
                            'description' => 'Eliminar grados'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'grados.show',
                            'description' => 'Ver grados'])->syncRoles([$role1,$role2,$role3,$role4]);


        //permisos para cursos
        Permission::create(['name'=>'curso.index',
                            'description' => 'Gestion de cursos'])->syncRoles([$role1,$role2,$role3,$role4]);;
        Permission::create(['name'=>'curso.create',
                            'description' => 'Crear curso'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'curso.edit',
                            'description' => 'Editar curso'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'curso.destroy',
                            'description' => 'Eliminar curso'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'curso.show',
                            'description' => 'Ver curso'])->syncRoles([$role1,$role2,$role3,$role4]);

        //permisos para modulo de periodos
        Permission::create(['name'=>'periodos.index',
                            'description' => 'Gestion de periodos'])->syncRoles([$role1,$role2,$role3,$role4]);;
        Permission::create(['name'=>'periodos.create',
                            'description' => 'Crear periodo'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'periodos.edit',
                            'description' => 'Editar periodo'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'periodos.destroy',
                            'description' => 'Eliminar periodo'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'periodos.show',
                            'description' => 'Ver periodo'])->syncRoles([$role1,$role2,$role3,$role4]);

        // permisos para gestion de calificaciones
        Permission::create(['name'=>'notas.asignaturas',
                            'description' => 'Gestion de calificaciones'])->syncRoles([$role1,$role2,$role3,$role4]);;
        Permission::create(['name'=>'nota.create',
                            'description' => 'Crear notas'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'notas.edit',
                            'description' => 'Editar notas'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'notas.destroy',
                            'description' => 'Eliminar notas'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'notas.show',
                            'description' => 'Ver notas'])->syncRoles([$role1,$role2,$role3,$role4]);

        //permiso para editar perfil
        Permission::create(['name'=>'perfil.edit',
                            'description' => 'Editar perfil'])->syncRoles([$role1, $role2, $role3,$role4]);

    }
}
