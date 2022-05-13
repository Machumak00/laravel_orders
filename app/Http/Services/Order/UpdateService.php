<?php

namespace App\Http\Services\Order;

use App\Exceptions\OrderNotFoundExceptionById;
use App\Models\Order;

class UpdateService
{
    /**
     * @var string
     */
    private string $fullName;

    /**
     * @var int
     */
    private int $totalAmount;

    /**
     * @var string
     */
    private string $deliveryAddress;

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
        $this->fullName = $fullName;
        $this->totalAmount = $totalAmount;
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @param  int  $id
     *
     * @return Order
     * @throws OrderNotFoundExceptionById
     */
    public function update(int $id): Order
    {
        $order = Order::where('id', $id)->first();

        if (is_null($order)) {
            throw new OrderNotFoundExceptionById($id);
        }

        $params = [];

        if (!is_null($this->fullName)) {
            $params['full_name'] = $this->fullName;
        }

        if (!is_null($this->totalAmount)) {
            $params['total_amount'] = $this->totalAmount;
        }

        if (!is_null($this->deliveryAddress)) {
            $params['delivery_address'] = $this->deliveryAddress;
        }

        $order = $order->update($params);

        return $order;
    }
}
