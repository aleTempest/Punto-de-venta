<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
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
            'product_id' => 'required|exists:products,id',
            'in_date' => 'required|date|before_or_equal:out_date',
            'out_date' => 'required|date|after_or_equal:in_date',
            'amount' => 'required|integer',
            'movement' => 'required|string',
            'reason' => 'required|string',
        ];
    }
}
