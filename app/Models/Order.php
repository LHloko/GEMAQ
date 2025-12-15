<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'valor_total',
        'status',
        'payment_id',
    ];

    protected $casts = [
        'valor_total' => 'decimal:2'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    /**
     * Itens que compõem o pedido.
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    
    /**
     * Endereço de entrega (snapshot).
    */
    public function address()
    {
        return $this->hasOne(Address::class);
    }

    /**
     * Pagamentos do pedido.
    */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
