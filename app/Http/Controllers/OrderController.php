<?php

namespace App\Http\Controllers;

use App\Exceptions\OrderNotFoundExceptionById;
use App\Http\Requests\Order\CreateRequest;
use App\Http\Requests\Order\UpdateRequest;
use App\Http\Services\Order\CreateService;
use App\Http\Services\Order\GetService;
use App\Http\Services\Order\UpdateService;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    public function create(CreateRequest $request): JsonResponse
    {
        $service = new CreateService(
            $request->input('fullName'),
            $request->input('totalAmount'),
            $request->input('deliveryAddress')
        );

        $order = $service->create();

        return response()->json($order);
    }

    public function update(UpdateRequest $request): JsonResponse
    {
        $service = new UpdateService(
            $request->input('fullName'),
            $request->input('totalAmount'),
            $request->input('deliveryAddress')
        );

        $order = $service->update($request->input('id'));

        return response()->json($order);
    }


    public function get(int $id, GetService $service): JsonResponse
    {
        try {
            $order = $service->get($id);
        } catch (OrderNotFoundExceptionById $e) {
            return response()->json(['message' => $e->getMessage()]);
        }

        return response()->json($order);
    }
}
