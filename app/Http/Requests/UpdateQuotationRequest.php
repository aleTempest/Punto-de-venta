<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuotationRequest extends FormRequest
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
            'id_product' => 'required|exists:products,id',
            'id_client' => 'required|exists:clients,id',
            'quotation_date' => 'required|date',
            'validity' => 'required|date|after_or_equal:quotation_date',
            'comments' => 'nullable|string|max:255'
        ];
    }
}
