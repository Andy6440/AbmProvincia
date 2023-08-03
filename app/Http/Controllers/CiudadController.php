<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;

class CiudadController extends Controller
{


    /**
     * @OA\Info(
     *     title="Mi API de Provincias y Ciudades",
     *     version="1.0.0",
     *     description="Esta es una API para gestionar provincias y listar ciudades.",
     *     @OA\Contact(
     *         email="andreassilva0108@gmail.com"
     *     )
     * )
     * @OA\SecurityScheme(
     *     securityScheme="bearerAuth",
     *     type="http",
     *     scheme="bearer",
     *     bearerFormat="JWT",
     * )
     */


    public function index()
    {

        /**
         * @OA\Get(
         *     path="/api/ciudades",
         *     summary="Obtener el listado de ciudades",
         *     @OA\Response(
         *         response=200,
         *         description="Devuelve un listado de todas las ciudades con sus respectivas provincias."
         *     ),
         *     @OA\SecurityRequirement(
         *         name="bearerAuth",
         *     )
         * )
         */
        $ciudades = Ciudad::selectRaw('CONCAT(descripcion_ciudad, ", ", provincias.descripcion_provincia) AS ciudad_provincia')
            ->join('provincias', 'ciudades.id_provincia', '=', 'provincias.id_provincia')
            ->groupBy('ciudad_provincia')
            ->pluck('ciudad_provincia')
            ->toArray();

        return response()->json($ciudades, 200);
    }
}
