<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonCreateRequest extends FormRequest
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
            'name' => 'required|max:40',
            'image' => 'image | mimes:jpeg,png,jpg',
            'age' => 'required|numeric|min:10|max:40',
            'height' => 'required|numeric|between:0,10.99',
            'evolves_from'=> 'required|max:40',
            'evolves_to'=> 'required|max:40',
            'weakness'=> 'required|max:40',
            'ability'=> 'required|max:40',
        ];
    }
}
