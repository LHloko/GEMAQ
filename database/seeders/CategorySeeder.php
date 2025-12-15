<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Bombas', 'description' => 'Bombas submersas e centrífugas'],
            ['name' => 'Irrigação', 'description' => 'Sistemas e acessórios'],
            ['name' => 'Poços Artesianos', 'description' => 'Equipamentos para perfuração'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
