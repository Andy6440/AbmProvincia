<?php

namespace App\Http\Requests;

use App\Rules\UniqueCiudad;
use Illuminate\Foundation\Http\FormRequest;

class CiudadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_provincia' => 'required|exists:provincias,id_provincia',
            'descripcion_ciudad' => ['required',  'max:255', 'not_regex:/^[\s]*$/', new UniqueCiudad],
        ];
    }
    public function messages()
    {
        return [
            'descripcion_ciudad.required' => 'El nombre de la ciudad es obligatorio.',
            'descripcion_ciudad.max' => 'El nombre de la ciudad no puede tener más de 255 caracteres.',
            'descripcion_ciudad.not_regex' => 'El nombre de la ciudad no puede ser sólo espacios en blanco.',
            'descripcion_ciudad.unique' => 'Ya existe una ciudad con ese nombre en la provincia.',

        ];
    }
}
