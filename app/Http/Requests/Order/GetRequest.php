<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class GetRequest extends FormRequest
{
    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'full_name' => 'string',
            'total_amount' => 'integer',
            'delivery_address' => 'string',
            'created_at' => 'date_format:U',
        ];
    }
}
