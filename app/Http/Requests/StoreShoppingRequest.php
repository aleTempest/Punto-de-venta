<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShoppingRequest extends FormRequest
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
            'id_supp' => 'required|exists:suppliers,id',
            'id_product' => 'required|exists:products,id',
            'amount' => 'required|integer',
            'price' => 'required|numeric',
            'purchase_date' => 'required|date',
            'discount' => 'nullable|numeric'
        ];
    }
}
