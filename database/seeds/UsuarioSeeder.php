<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_administrador = \Cinema\Role::where('nameRol','administrador')->first();

        $administrador = new \Cinema\User();
        $administrador->surname = 'Administrador';
        $administrador->phone = '7077777';
        $administrador->email = 'admin@gmail.com';
        $administrador->password = bcrypt('admin123');
        $administrador->save();
    }
}
