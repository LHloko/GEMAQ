<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $bombas = Category::where('name', 'Bombas')->first();
        $irrigacao = Category::where('name', 'Irrigação')->first();

        Product::create([
            'name' => 'Bomba Submersa 1HP',
            'description' => 'Indicada para poços artesianos',
            'price' => 1890.00,
            'qtd_estoque' => 0,
            'category_id' => $bombas->id,
        ]);

        Product::create([
            'name' => 'Mangueira 1 polegada',
            'description' => 'Mangueira para irrigação',
            'price' => 120.50,
            'qtd_estoque' => 0,
            'category_id' => $irrigacao->id,
        ]);
    }
}
