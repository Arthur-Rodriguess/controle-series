<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Override;

class SeriesFormRequest extends FormRequest
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
            'nome' => ['required', 'min:3']
        ];
    }

    /**
     * Esse metodo permite a personalização das mensagens de erro em caso de
     * os campos descumprirem as regras de validação
     * 
     * *POREM NAO E O MAIS EFETIVO!*
     */
    // #[Override]
    // public function messages()
    // {
    //     return [
    //         'nome.required' => "O campo nome é obrigatório",
    //         'nome.min' => "O campo nome precisa de no mínimo :min caracteres"

    //         /**
    //          * Pode ser utilizado tambem esse em caso de abreviacao:
    //          * 'nome.*' => "O campo nome nao pode estar vazio ou deve ter no minimo 3 caracteres"
    //          */
    //     ];
    // }
}
