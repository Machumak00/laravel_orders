<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer|min:1|exists:orders,id',
            'fullName' => 'string',
            'totalAmount' => 'integer',
            'deliveryAddress' => 'string',
            'createdAt' => 'date_format:U',
        ];
    }
}
