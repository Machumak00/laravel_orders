<?php

namespace App\Exceptions;

use Exception;
use JetBrains\PhpStorm\Pure;
use Throwable;

class OrderNotFoundExceptionById extends Exception
{
    /**
     * @param  int             $id
     * @param  Throwable|null  $previous
     */
    #[Pure]
    public function __construct(
        int $id,
        Throwable $previous = null
    ) {
        $message = "Order not found by id $id";

        parent::__construct($message, 0, $previous);
    }
}
