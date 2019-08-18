<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidaMenuUrl;

class ValidacionMenu extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:50|unique:menu,nombre, '.$this->route('id'),
            'url' => ['required','max:100', new ValidaMenuUrl], //llamar una regla  evalidacion especifica 
            'icono' => 'nullable|max:50'
        ];
    }
    // mensajes persoalizadas atrave sde esta funcion
    public function messages()
    {
        return [
            'nombre.required' => 'Nombre es obligatorio ',
            'url.required' => 'Url  es obligatoria '
        ];
    }
}
