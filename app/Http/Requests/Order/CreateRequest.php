<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string',
            'total_amount' => 'required|integer',
            'delivery_address' => 'required|string',
        ];
    }
}
