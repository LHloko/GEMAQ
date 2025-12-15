<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable =[
        'order_id',
        'street',
        'complement',
        'neighborhood',
        'city',
        'state',
        'postal_code',
    ];

    /**
     * Pedido ao qual o endereço pertence.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
