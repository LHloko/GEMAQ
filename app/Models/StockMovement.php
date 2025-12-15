<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa uma movimentação de estoque de um produto.
 *
 * Registra eventos que alteram o saldo do estoque,
 * como entradas, saídas e ajustes.
 */
class StockMovement extends Model
{
    protected $fillable = [
        'product_id',
        'order_id',
        'type',
        'quantity',
        'origin',
    ];

    // Relacoes 
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

    /**
     * Indica se a movimentacao eh de entrada ou saida
     * 
     * @return bool True se for tipo 'entrada'
     */ 
    public function isEntrada(): bool{
        return $this->type == 'entrada';
    }

    /**
     * Indica se o tipo de movimentacao eh de saida
     * 
     * @return bool True se for tipo 'saida'
     */
    public function isSaida(): bool{
        return $this->type == 'saida';
    }

    /**
     * Calcula o balanco das operacoes e soma no total
     * 
     * Entradas somam, saidas subtraem
     * 
     * @return int quantidade atual em estoque
     */
    public function estoqueAtual(): int{
        return $this->stockMovements()->sum('quantity');
    }

}
