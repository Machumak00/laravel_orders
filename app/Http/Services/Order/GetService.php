<?php

namespace App\Http\Services\Order;

use App\Exceptions\OrderNotFoundExceptionById;
use App\Models\Order;

class GetService
{
    /**
     * @param  int  $id
     *
     * @return Order
     * @throws OrderNotFoundExceptionById
     */
    public function get(int $id): Order
    {
        $order = Order::where('id', $id)->first();

        if (is_null($order)) {
            throw new OrderNotFoundExceptionById($id);
        }

        return $order;
    }
}
