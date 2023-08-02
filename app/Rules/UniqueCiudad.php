<?php

namespace App\Rules;

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
        return !Ciudad::where('LOWER(TRIM(descripcion_ciudad)) = ?', $value)
        ->where('id_provincia', request()->id_provincia)
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
