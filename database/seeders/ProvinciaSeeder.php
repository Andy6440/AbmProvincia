<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert(
            [
                "descripcion_provincia" => "Misiones",
                "id_provincia" => 54
            ],
            [

                "descripcion_provincia" => "San Juan",
                "id_provincia" => 70
            ],
            [

                "descripcion_provincia" => "Entre Ríos",
                "id_provincia" => 30
            ],
            [

                "descripcion_provincia" => "Santa Cruz",
                "id_provincia" => 78
            ],
            [

                "descripcion_provincia" => "Río Negro",
                "id_provincia" => 62
            ],
            [

                "descripcion_provincia" => "Chubut",
                "id_provincia" => 26
            ],
            [

                "descripcion_provincia" => "Córdoba",
                "id_provincia" => 14
            ],
            [

                "descripcion_provincia" => "Mendoza",
                "id_provincia" => 50
            ],
            [

                "descripcion_provincia" => "La Rioja",
                "id_provincia" => 46
            ],
            [

                "descripcion_provincia" => "Catamarca",
                "id_provincia" => 10
            ],
            [

                "descripcion_provincia" => "La Pampa",
                "id_provincia" => 42
            ],
            [

                "descripcion_provincia" => "Santiago del Estero",
                "id_provincia" => 86
            ],
            [

                "descripcion_provincia" => "Corrientes",
                "id_provincia" => 18
            ],
            [

                "descripcion_provincia" => "Santa Fe",
                "id_provincia" => 82
            ],
            [

                "descripcion_provincia" => "Tucumán",
                "id_provincia" => 90
            ],
            [

                "descripcion_provincia" => "Neuquén",
                "id_provincia" => 58
            ],
            [

                "descripcion_provincia" => "Salta",
                "id_provincia" => 66
            ],
            [

                "descripcion_provincia" => "Chaco",
                "id_provincia" => 22
            ],
            [

                "descripcion_provincia" => "Formosa",
                "id_provincia" => 34
            ],
            [

                "descripcion_provincia" => "Jujuy",
                "id_provincia" => 38
            ],
            [

                "descripcion_provincia" => "Ciudad Autónoma de Buenos Aires",
                "id_provincia" => 02
            ],
            [

                "descripcion_provincia" => "Buenos Aires",
                "id_provincia" => 06
            ],
            [

                "descripcion_provincia" => "Tierra del Fuego, Antártid_provinciaa e Islas del Atlántico Sur",
                "id_provincia" => 94
            ]
        );
    }
}
