<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'name' => 'required|string|max:250',
            'email' => 'required|string|max:250',
            'phone' => 'required|string|max:250',
            'address' => 'required|string|max:250',
            'rfc' => 'required|string|max:250',
            'business_name' => 'required|string|max:250',
            'postal_code' => 'required|string|max:250',
            'tax_regime' => 'required|string|max:250'
        ];
    }
}
