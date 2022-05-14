<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'orders';

    /**
     * @var string
     */
    protected $dateFormat = 'Y-m-d';

    /**
     * @var string[]
     */
    protected $fillable = ['full_name', 'total_amount', 'delivery_address'];

    const UPDATED_AT = null;
}
