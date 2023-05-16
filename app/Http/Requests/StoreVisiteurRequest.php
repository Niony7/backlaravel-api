<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class StoreVisiteurRequest extends FormRequest
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
            'id'=>['requiered','unique:id'],
            'nom'=>['required','min:3','max:25'],
            'NbJours'=>['requierd', 'min:1','max:3'],
            'TarifJournalier'=>['required','integer']   

        ];
    }
}
