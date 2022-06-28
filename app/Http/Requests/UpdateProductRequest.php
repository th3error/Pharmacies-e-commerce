<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'title'         => 'string|alpha_num',
            'description'   => 'string|alpha_num',
            'image_path'    => 'url',
            'price'         => 'integer|numeric',
            'pharmacy_id'   => 'required|integer|numeric',
            'product_id'    => 'required|integer|numeric'

        ];
    }
}
