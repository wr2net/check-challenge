<?php

namespace App\Cakes\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CakeRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
        if (!$this->cake) {
            return [
                'name' => ['required', 'string'],
                'weight' => ['required', 'numeric'],
                'price' => ['required', 'numeric'],
                'quantity' => ['required', 'numeric'],
            ];
        }

        return [
            'name' => ['required', 'string'],
            'weight' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
        ];
    }
}
