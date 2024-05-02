<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerStoreRequest extends FormRequest
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
            'brand' => 'required|string',
            'ram' => 'required',
            'hard_disk' => 'required|integer',
            'number_cores' => 'required|integer',
            'processor' => 'required|string',
            'operative_system' => 'nullable|string',
            'date_creation' => 'required|date',
            'graphic_memory?' => 'nullable|boolean',
            'cc_graphic_memory' => 'nullable'
        ];
    }
}
