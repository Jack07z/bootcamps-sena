<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;


class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get('database/_data/bootcamps.json');
        $arreglo_bootcamps=json_decode($json);
        foreach($arreglo_bootcamps as $bootcamps){

            Bootcamp::create([
                "name" => $bootcamps->name,
                "description" => $bootcamps->description,
                "website" => $bootcamps->website,
                "phone" => $bootcamps->phone,
                "user_id" => $bootcamps->user_id
            ]);
        }
    }
}
