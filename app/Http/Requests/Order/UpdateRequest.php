<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer|min:1|exists:orders,id',
            'full_name' => 'string',
            'total_amount' => 'integer',
            'delivery_address' => 'string',
            'created_at' => 'date_format:U',
        ];
    }
}
