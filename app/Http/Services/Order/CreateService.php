<?php

namespace App\Http\Services\Order;

use App\Models\Order;

class CreateService
{
    /**
     * @var array
     */
    private array $params;

    /**
     * @param  string  $fullName
     * @param  int     $totalAmount
     * @param  string  $deliveryAddress
     */
    public function __construct(
        string $fullName,
        int $totalAmount,
        string $deliveryAddress
    ) {
        $this->params = [
            'full_name' => $fullName,
            'total_amount' => $totalAmount,
            'delivery_address' => $deliveryAddress,
        ];
    }

    /**
     * @return Order
     */
    public function create(): Order
    {
        $order = Order::create($this->params);

        return $order;
    }
}
