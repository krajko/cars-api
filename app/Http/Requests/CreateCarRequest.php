<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'max_speed' => 'min:20|max:300',
            'is_automatic' => 'required|boolean',
            'engine' => 'required',
            'number_of_doors' = 'required|min:2|max:5'
        ];
    }
}
