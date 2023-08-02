<?php

namespace App\Rules;

use App\Helpers\CustomHelper;
use App\Models\Ciudad;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueCiudad implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $server = request()->server();
        
        $provinciaName = CustomHelper::addSpacesBeforeUppercase($server['argv'][3]);
        return !Ciudad::join('provincias', 'ciudades.id_provincia', '=', 'provincias.id_provincia')
        ->where('ciudades.descripcion_ciudad', 'like','%'.strtolower(trim($value)).'%')
        ->where('provincias.descripcion_provincia', 'like','%'.strtolower(trim($provinciaName)).'%')
        ->exists();
      


    }
    

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ya existe una ciudad con ese nombre en la misma provincia.';
    }
}
