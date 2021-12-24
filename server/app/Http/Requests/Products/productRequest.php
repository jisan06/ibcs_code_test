<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class productRequest extends FormRequest
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
            'product_name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'required|string',
            'photo' => 'nullable|mimes:jpeg,png,jpg|max:20000'
        ];
    }
}
