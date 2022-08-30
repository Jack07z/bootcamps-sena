<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1.Leer el archivo de datos
        $json=File::get('database/_data/user.json');
        //2.convertir los datos en un arreglo
        $arreglo_usuarios=json_decode($json);
        //3.recorrer el arreglo
        //var_dump($arreglo_usuarios);
        foreach($arreglo_usuarios as $usuario){
            //4.registrar el usuario en base de datos
            //  se utiliza el metodo ::create
            user::create([
                "username" => $usuario->name,
                "email" => $usuario->email,
                "password" => Hash::make($usuario->password),
            ]);
        }
        

    }
}
