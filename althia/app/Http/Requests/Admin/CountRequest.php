<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CountRequest extends FormRequest
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
        $rules = [
            'happy_customer' => [
                'required',
                'integer'
            ],
            'videographer' => [
                'required',
                'integer'
            ],
            'events_complete' => [
                'required',
                'integer'
            ],
        ];

        return $rules;
    }
}
