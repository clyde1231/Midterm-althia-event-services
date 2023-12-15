<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
            'event_id' => [
                'required',
                'integer'
            ],
            'name' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'string'
            ],
            'number' => [
                'required',
                'string'
            ],
            'date_picker' => [
                'nullable',
            ],
            'status' => [
                'nullable',
            ],
            'payment' => [
                'nullable',
            ],
            'message' => [
                'required',
            ],
        ];

        return $rules;
    }
}
