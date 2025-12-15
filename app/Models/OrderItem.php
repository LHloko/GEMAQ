<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
    ];

    protected $cast = [
        'quantity' => 'decimal:2'
    ];

    /**
     * Pedido ao qual o item pertence.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Produto vendido neste item.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    
}
