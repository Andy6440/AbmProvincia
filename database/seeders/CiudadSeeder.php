<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            // Posadas

            ["descripcion_ciudad" => "Posadas", "id_provincia" => 54],
            ["descripcion_ciudad" => "Oberá", "id_provincia" => 54],
            ["descripcion_ciudad" => "Eldorado", "id_provincia" => 54],
            ["descripcion_ciudad" => "Garupá", "id_provincia" => 54],
            ["descripcion_ciudad" => "Puerto Iguazú", "id_provincia" => 54],
            ["descripcion_ciudad" => "Apóstoles", "id_provincia" => 54],
            ["descripcion_ciudad" => "Leandro N. Alem", "id_provincia" => 54],
            ["descripcion_ciudad" => "Jardín América", "id_provincia" => 54],
            ["descripcion_ciudad" => "San Vicente", "id_provincia" => 54],
            ["descripcion_ciudad" => "Montecarlo", "id_provincia" => 54],
            ["descripcion_ciudad" => "Puerto Rico", "id_provincia" => 54],
            ["descripcion_ciudad" => "Aristóbulo del Valle", "id_provincia" => 54],
            ["descripcion_ciudad" => "Puerto Esperanza", "id_provincia" => 54],
            ["descripcion_ciudad" => "Wanda", "id_provincia" => 54],
            ["descripcion_ciudad" => "Candelaria", "id_provincia" => 54],


            // san juan
            [
                "descripcion_provincia" => "San Juan",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Rivadavia",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Chimbas",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Santa Lucía",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Rawson",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Pocito",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Caucete",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Albardón",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "San Martín",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "9 de Julio",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Angaco",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Valle Fértil",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Jáchal",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Calingasta",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Iglesia",
                "id_provincia" => 70,
            ],
            [
                "descripcion_provincia" => "Sarmiento",
                "id_provincia" => 70,
            ],

            //Entre Ríos


            [
                "descripcion_provincia" => "Entre Ríos",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Paraná",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Concordia",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Gualeguaychú",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Concepción del Uruguay",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Victoria",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Chajarí",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Villaguay",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Gualeguay",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Federación",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Colón",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Diamante",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Nogoyá",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "La Paz",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "Federal",
                "id_provincia" => 30,
            ],
            [
                "descripcion_provincia" => "San Salvador",
                "id_provincia" => 30,
            ],

            //Santa Cruz

            [
                "descripcion_provincia" => "Santa Cruz",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Río Gallegos",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Caleta Olivia",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "El Calafate",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Río Turbio",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Puerto Deseado",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Pico Truncado",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Las Heras",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "28 de Noviembre",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Perito Moreno",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Gobernador Gregores",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Río Grande",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Puerto Santa Cruz",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Los Antiguos",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Cañadón Seco",
                "id_provincia" => 78,
            ],
            [
                "descripcion_provincia" => "Puerto San Julián",
                "id_provincia" => 78,
            ],

            // rio negro
            [
                "descripcion_provincia" => "Río Negro",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Viedma",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Bariloche",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Cipolletti",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "General Roca",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Allen",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "San Antonio Oeste",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Catriel",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Villa Regina",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Río Colorado",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Choele Choel",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Ingeniero Jacobacci",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Los Menucos",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Cinco Saltos",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Sierra Grande",
                "id_provincia" => 62,
            ],
            [
                "descripcion_provincia" => "Campo Grande",
                "id_provincia" => 62,
            ],

            //Chubut
            [
                "descripcion_provincia" => "Chubut",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Rawson",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Trelew",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Puerto Madryn",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Comodoro Rivadavia",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Esquel",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Sarmiento",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Gaiman",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Dolavon",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Trevelin",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Río Mayo",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "El Hoyo",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Epuyén",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Camarones",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Cushamen",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Futaleufú",
                "id_provincia" => 26,
            ],
            [
                "descripcion_provincia" => "Languiñeo",
                "id_provincia" => 26,
            ],
            // cordoba
            [
                "descripcion_provincia" => "Córdoba",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Villa María",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Río Cuarto",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "San Francisco",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Carlos Paz",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Alta Gracia",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Jesús María",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Cosquín",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Bell Ville",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Villa Dolores",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Rio Tercero",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Arroyito",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "San Marcos Sierras",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "La Cumbre",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Villa General Belgrano",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Río Ceballos",
                "id_provincia" => 14,
            ],
            [
                "descripcion_provincia" => "Deán Funes",
                "id_provincia" => 14,
            ],

            //Mendoza

            [
                "descripcion_provincia" => "Mendoza",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "San Rafael",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Godoy Cruz",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Las Heras",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Maipú",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Luján de Cuyo",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "San Martín",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Rivadavia",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Tunuyán",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Junín",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Santa Rosa",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Guaymallén",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "La Paz",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "San Carlos",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Lavalle",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Malargüe",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "San Rafael",
                "id_provincia" => 50,
            ],
            [
                "descripcion_provincia" => "Tupungato",
                "id_provincia" => 50,
            ],

            //La Rioja
            [
                "descripcion_provincia" => "La Rioja",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "Capital",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "Chilecito",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "Famatina",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "Arauco",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "General Belgrano",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "General Juan Facundo Quiroga",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "General Lamadrid",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "General Ocampo",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "General San Martín",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "Independencia",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "Rosario Vera Peñaloza",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "San Blas de los Sauces",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "Sanagasta",
                "id_provincia" => 46,
            ],
            [
                "descripcion_provincia" => "Vinchina",
                "id_provincia" => 46,
            ],

            //Catamarca

            [
                "descripcion_provincia" => "Catamarca",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Capital",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Andalgalá",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Antofagasta de la Sierra",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Belén",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Capayán",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "El Alto",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Fray Mamerto Esquiú",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "La Paz",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Paclín",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Pomán",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Santa María",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Santa Rosa",
                "id_provincia" => 10,
            ],
            [
                "descripcion_provincia" => "Tinogasta",
                "id_provincia" => 10,
            ],
            //La Pampa
            [
                "descripcion_provincia" => "La Pampa",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Capital",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Atreucó",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Caleu Caleu",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Capital",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Catriló",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Chalileo",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Chapaleufú",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Conhelo",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Curacó",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Guatraché",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Hucal",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Lihuel Calel",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Limay Mahuida",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Loventuel",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Maraco",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Puelén",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Quemú Quemú",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Rancul",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Realicó",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Toay",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Trenel",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Tucúman",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Utracán",
                "id_provincia" => 42,
            ],
            [
                "descripcion_provincia" => "Santiago del Estero",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Agua Dulce",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Alto del Mistol",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Banda",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Beltrán",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Capital",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Choya",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Copo",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Figueroa",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "General Taboada",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Guasayán",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Jiménez",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Juan F. Ibarra",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "La Banda",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Loreto",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Mitre",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Moreno",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Ojo de Agua",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Pellegrini",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Quebrachos",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Río Hondo",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Robles",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Salavina",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "San Martín",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Silípica",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Sarmiento",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Simbolar",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Telares",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Tintina",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Villa Atamisqui",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Villa La Punta",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Villa Ojo de Agua",
                "id_provincia" => 86,
            ],
            //Santiago del Estero
            [
                "descripcion_provincia" => "Santiago del Estero",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Agua Dulce",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Alto del Mistol",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Banda",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Beltrán",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Capital",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Choya",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Copo",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Figueroa",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "General Taboada",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Guasayán",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Jiménez",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Juan F. Ibarra",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "La Banda",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Loreto",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Mitre",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Moreno",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Ojo de Agua",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Pellegrini",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Quebrachos",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Río Hondo",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Robles",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Salavina",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "San Martín",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Silípica",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Sarmiento",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Simbolar",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Telares",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Tintina",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Villa Atamisqui",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Villa La Punta",
                "id_provincia" => 86,
            ],
            [
                "descripcion_provincia" => "Villa Ojo de Agua",
                "id_provincia" => 86,
            ],
            //Corrientes
            [
                "descripcion_provincia" => "Corrientes",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Bella Vista",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Berón de Astrada",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Capital",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Concepción",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Curuzú Cuatiá",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Empedrado",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Esquina",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "General Alvear",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "General Paz",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Goya",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Itatí",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Ituzaingó",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Lavalle",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Mburucuyá",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Mercedes",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Monte Caseros",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Paso de los Libres",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Saladas",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "San Cosme",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "San Luis del Palmar",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "San Miguel",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "San Roque",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Santo Tomé",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Sauce",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "San Lorenzo",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Colonia Carlos Pellegrini",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "San Luis del Palmar",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "San Miguel",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "San Roque",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Santo Tomé",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Sauce",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Vera",
                "id_provincia" => 18,
            ],
            [
                "descripcion_provincia" => "Yapeyú",
                "id_provincia" => 18,
            ],

            //Santa Fe
            [
                "descripcion_provincia" => "Santa Fe",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Rosario",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Venado Tuerto",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Rafaela",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Santo Tomé",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Santa Fe",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Rosario",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Venado Tuerto",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Rafaela",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Santo Tomé",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Granadero Baigorria",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "San Lorenzo",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Funes",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Capitán Bermúdez",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Villa Gobernador Gálvez",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Esperanza",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "San Jorge",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Reconquista",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Avellaneda",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Casilda",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Gálvez",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Villa Constitución",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "San Justo",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Firmat",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Carcaraná",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "San Cristóbal",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Villa Ocampo",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Helvecia",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Sunchales",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "El Trébol",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "San Javier",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Gálvez",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Recreo",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Esperanza",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Santa Isabel",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "Santo Tomé",
                "id_provincia" => 82,
            ],
            [
                "descripcion_provincia" => "San José del Rincón",
                "id_provincia" => 82,
            ],
            //Tucumán
            [
                "descripcion_provincia" => "San Miguel de Tucumán",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Yerba Buena",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Tafí Viejo",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Aguilares",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Banda del Río Salí",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Concepción",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Lules",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Río Seco",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Famaillá",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Tafí del Valle",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Monteros",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Alderetes",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Lamadrid",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Lastenia",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Ranchillos",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Villa Quinteros",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Simoca",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Graneros",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Bella Vista",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Trancas",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Tafí del Valle",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "La Cocha",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Burruyacú",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "San Andrés",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Villa Belgrano",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Los Sarmientos",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Lules",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Delfín Gallo",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "El Manantial",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Yánima",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Ciudacita",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "San Felipe",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Atahona",
                "id_provincia" => 90,
            ],
            [
                "descripcion_provincia" => "Barrancas",
                "id_provincia" => 90,
            ],
            //Neuquén
            [
                "descripcion_provincia" => "Neuquén",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "San Martín de los Andes",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Junín de los Andes",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Zapala",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Plottier",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Cutral Có",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Centenario",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Rincón de los Sauces",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Villa La Angostura",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Senillosa",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Loncopué",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Plaza Huincul",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Las Lajas",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Caviahue-Copahue",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Villa El Chocón",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Aluminé",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Añelo",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Buta Ranquil",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Picún Leufú",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Las Coloradas",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Andacollo",
                "id_provincia" => 58,
            ],
            [
                "descripcion_provincia" => "Huinganco",
                "id_provincia" => 58,
            ],
            //Salta
            [
                "descripcion_provincia" => "Salta",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "San Ramón de la Nueva Orán",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Tartagal",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "General Güemes",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Cafayate",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "San José de Metán",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Rosario de la Frontera",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Embarcación",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "El Galpón",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Cerrillos",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Aguaray",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Las Lajitas",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Campo Quijano",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Rosario de Lerma",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "El Carril",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "San Antonio de los Cobres",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Chicoana",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Gral. Ballivian",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Gral. Mosconi",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Gral. Pizarro",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Rosario de Lerma",
                "id_provincia" => 66,
            ],
            [
                "descripcion_provincia" => "Molinos",
                "id_provincia" => 66,
            ],
            //Chaco
            [
                "descripcion_provincia" => "Chaco",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Resistencia",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Barranqueras",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Fontana",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Villa Ángela",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Presidencia Roque Sáenz Peña",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Charata",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Machagai",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Tres Isletas",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Quitilipi",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Las Breñas",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Villa Berthet",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Pampa del Infierno",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Villa Río Bermejito",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "La Leonesa",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Puerto Eva Perón",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Gancedo",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "La Escondida",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Concepción del Bermejo",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Makallé",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "Miraflores",
                "id_provincia" => 22,
            ],
            [
                "descripcion_provincia" => "General Pinedo",
                "id_provincia" => 22,
            ],
            //Formosa
            [
                "descripcion_provincia" => "Formosa",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Formosa Capital",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Clorinda",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Pirane",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Laguna Blanca",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "San Martin 2",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "El Espinillo",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Las Lomitas",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Misión Tacaaglé",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Ibarreta",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Tres Lagunas",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "General Mansilla",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Comandante Fontana",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Estanislao del Campo",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Palo Santo",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Posta Cambio A Zalazar",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Lote 8",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "General Belgrano",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Riacho He He",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "La Primavera",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Villa General Guemes",
                "id_provincia" => 34,
            ],
            [
                "descripcion_provincia" => "Gran Guardia",
                "id_provincia" => 34,
            ],
            //Jujuy
            [
                "descripcion_provincia" => "Jujuy",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "San Salvador de Jujuy",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "San Pedro de Jujuy",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Palpalá",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Libertador General San Martín",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Perico",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "La Quiaca",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "El Carmen",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Tilcara",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Humahuaca",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "San Pedro",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Abra Pampa",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "San Antonio",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "La Mendieta",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "San Francisco",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Caimancito",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Monterrico",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Volcán",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Yuto",
                "id_provincia" => 38,
            ],
            [
                "descripcion_provincia" => "Purmamarca",
                "id_provincia" => 38,
            ],
            //Ciudad Autónoma de Buenos Aires
            [
                "descripcion_provincia" => "Ciudad Autónoma de Buenos Aires",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Buenos Aires",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Palermo",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Recoleta",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "San Telmo",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Belgrano",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "La Boca",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Puerto Madero",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "San Nicolás",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Retiro",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Monserrat",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Flores",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Almagro",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Caballito",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Boedo",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Villa Crespo",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Villa Urquiza",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Colegiales",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Villa del Parque",
                "id_provincia" => 02,
            ],
            [
                "descripcion_provincia" => "Parque Chacabuco",
                "id_provincia" => 02,
            ],
            //Buenos Aires
            [
                "descripcion_provincia" => "Buenos Aires",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "La Plata",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Mar del Plata",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Bahía Blanca",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Tandil",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Junín",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Necochea",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Pergamino",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "San Nicolás",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Luján",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Zárate",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Olavarría",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "San Pedro",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Trenque Lauquen",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Chascomús",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Azul",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Mercedes",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Villa Gesell",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Tres Arroyos",
                "id_provincia" => 06,
            ],
            [
                "descripcion_provincia" => "Bragado",
                "id_provincia" => 06,
            ],
            //Tierra del Fuego
            [
                "descripcion_provincia" => "Tierra del Fuego, Antártida e Islas del Atlántico Sur",
                "id_provincia" => 94,
            ],
            [
                "descripcion_provincia" => "Ushuaia",
                "id_provincia" => 94,
            ],
            [
                "descripcion_provincia" => "Río Grande",
                "id_provincia" => 94,
            ],
            [
                "descripcion_provincia" => "Tolhuin",
                "id_provincia" => 94,
            ]


        ];
        DB::table('ciudades')->insert($data);
    }
}
