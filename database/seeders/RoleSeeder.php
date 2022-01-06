<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);

        //Método 1 - Relacionando por ID de permiso
        $role->permissions()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]);

        $role = Role::create(['name' => 'Instructor']);
    
        //Método 2 - Relacionado por nombre de permiso
        $role->syncPermissions(['Crear cursos', 'Leer cursos', 'Actualizar cursos', 'Eliminar cursos']);

    }
}
