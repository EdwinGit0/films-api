<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarFilmRequest extends FormRequest
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
            "title" => "required",
            "adult" => "required",
            "backdrop_path" => "required", //si required|unique:films,backdrop_path ? "required|unique:films,backdrop_path,".$this->route('film')->id para mantener el campo unico y no mandar error de que ya esta en uso en el sistema 
            "overview" => "required",
            "video" => "required"
        ];
    }
}
