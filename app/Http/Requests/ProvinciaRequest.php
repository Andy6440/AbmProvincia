<?php

namespace App\Http\Requests;

use App\Rules\UniqueProvincia;
use Illuminate\Foundation\Http\FormRequest;

class ProvinciaRequest extends FormRequest
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
            'descripcion_provincia' => ['required',  'max:255', 'not_regex:/^[\s]*$/', new UniqueProvincia()],
        ];
    }
    public function messages()
    {
        return [
            'descripcion_provincia.required' => 'El nombre de la provincia es obligatorio.',
            'descripcion_provincia.alpha' => 'El nombre de la provincia sólo puede contener letras.',
            'descripcion_provincia.max' => 'El nombre de la provincia no puede tener más de 255 caracteres.',
            'descripcion_provincia.not_regex' => 'El nombre de la provincia no puede ser sólo espacios en blanco.',
            'descripcion_provincia.unique' => 'Ya existe una provincia con ese nombre.',

        ];
    }
}
