<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'nullable|string',
            'slug' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
        ];
    }
}
