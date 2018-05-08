<?php

use Illuminate\Database\Seeder;
use \Cinema\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([

            'nameRol'=>'Administrador'



        ]);
    }
}
