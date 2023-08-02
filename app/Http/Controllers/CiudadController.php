<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;

class CiudadController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/ciudades",
     *     summary="Obtener el listado de ciudades",
     *     @OA\Response(
     *         response=200,
     *         description="Devuelve un listado de todas las ciudades con sus respectivas provincias."
     *     )
     * )
     */
    public function index()
    {
        // get ciudad with formar ciudad,provincia order by provincia and ciudad
        $ciudades = Ciudad::with('provincia:id_provincia,descripcion_provincia')->get(['descripcion_ciudad','id_provincia'])->sortBy(function ($ciudad, $key) {
            return $ciudad->provincia->descripcion_provincia . $ciudad->descripcion_ciudad;

        });
        return response()->json($ciudades, 200);
    }

}
