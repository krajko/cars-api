<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'brand' => 'sometimes',
            'model' => 'sometimes',
            'year' => 'sometimes',
            'max_speed' => 'min:20|max:300',
            'is_automatic' => 'boolean',
            'engine' => 'sometimes',
            'number_of_doors' = 'min:2|max:5'
        ];
    }
}
