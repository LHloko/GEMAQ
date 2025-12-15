<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa um produto na loja.
 * 
 * Registra seu nome, descricao, preco, quantidade em estoque, se esta ativo para venda, categoria a qual o produto pertence
 */
class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'qtd_estoque',
        'controla_estoque',
        'is_active',
        'category_id',
    ];

    // Formata o tipo para um padrao 
    protected $casts = [
        'price' => 'decimal:2',
        'controla_estoque' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Descreve a relacao: 1 para 1
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function stockMovement(){
        return $this->hasMany(StockMovement::class);
    }

    public function orderItem(){
        return $this->hasMany(OrderItem::class);
    }
}
