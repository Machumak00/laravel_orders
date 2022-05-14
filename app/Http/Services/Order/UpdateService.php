<?php

namespace App\Http\Services\Order;

use App\Exceptions\OrderNotFoundExceptionById;
use App\Models\Order;

class UpdateService
{
    /**
     * @var string|null
     */
    private string|null $fullName;

    /**
     * @var int|null
     */
    private int|null $totalAmount;

    /**
     * @var string|null
     */
    private string|null $deliveryAddress;

    /**
     * @param string|null $fullName
     * @param int|null $totalAmount
     * @param string|null $deliveryAddress
     */
    public function __construct(
        string|null $fullName,
        int|null $totalAmount,
        string|null $deliveryAddress
    ) {
        $this->fullName = $fullName;
        $this->totalAmount = $totalAmount;
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @param  int  $id
     *
     * @return Order
     */
    public function update(int $id): Order
    {
        $order = Order::where('id', $id)->first();

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

        $order->update($params);
        $order->refresh();

        return $order;
    }
}
