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
        $ciudades = Ciudad::selectRaw('CONCAT(descripcion_ciudad, ", ", provincias.descripcion_provincia) AS ciudad_provincia')
            ->join('provincias', 'ciudades.id_provincia', '=', 'provincias.id_provincia')
            ->groupBy('ciudad_provincia')
            ->pluck('ciudad_provincia')
            ->toArray();

        return response()->json($ciudades, 200);
    }
}
