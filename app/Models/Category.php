<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Representa um conjunto de produtos 
 * 
 * Registra uma categoria com nome e descricao do tipo de produto que se encaixa nela
 */
class Category extends Model
{
    // Arquivos que permito ser preenchidos em massa 
    protected $fillable = [
        'name',
        'description',
    ];

    // Descreve a relacao: categoria tem varios produtos 
    public function products(){
        return $this->hasMany(Product::class);
    }
}
