<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesCommissionValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'salaryBase' => 'required|regex:/^\d+(\.\d{1,2})?$/|gt:0',
            'daysWorked' => 'required|numeric|gt:0',
            'sales' => 'required|numeric|gte:0',
        ];
    }
}
