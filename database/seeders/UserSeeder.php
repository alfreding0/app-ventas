<?php

namespace Database\Seeders;

use App\Models\Personal;
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
        $personal = new Personal();
        $personal->nombres = 'Alfredo';
        $personal->apellidos = 'Gonzales Quiucha';
        $personal->telefono = '0893493';
        $personal->genero = 'M';
        $personal->direccion = 'Camiri';
        $personal->save();
        
        $user = new User();
        $user->name = 'alfreding0';
        $user->email = 'alfredogonzales953@gmail.com';
        $user->password = bcrypt('alfreding0');
        $user->id_personal = '1';
        $user->save();
    }
}
