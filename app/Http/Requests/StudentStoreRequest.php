<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlongeurStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:plongeurs',
            "phone_portable" => 'required|string|max:255',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nom.required' => 'Nom est obligatoire!',
            'prenom.required' => 'Prenom est obligatoire!',
            'email.required' => 'Adresse courriel est obligatoire!',
            'phone_portable.required' => 'Téléphone portable est obligatoire!'
        ];
    }
}