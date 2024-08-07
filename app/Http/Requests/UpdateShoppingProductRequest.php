<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShoppingProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_shopping' => 'required|exists:shoppings,id',
            'id_product' => 'required|exists:products,id',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ];
    }
}
