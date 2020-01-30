<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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

        'nome'=>'required',
        'email'=>'required|email',
        'password'=>'required',
        'telefone'=>'required',
        'genero'=>'required',
        'nascimento'=>'required',
        'curso_id'=>'required',
        'status_id'=>'required',
    ];
}

public function messages(){
    return [
        'email' => 'Deve ser um endereço de email válido.',
        'required' =>'Campo obrigatorio',
    ];
    }
}
