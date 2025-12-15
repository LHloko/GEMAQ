<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'cpf' => '00000000000',
            'email' => 'admin@site.com',
            'phone' => '31999999999',
            'password' => Hash::make('admin123'),
        ]);

        User::create([
            'name' => 'Cliente Teste',
            'cpf' => '11111111111',
            'email' => 'cliente@site.com',
            'phone' => '31988888888',
            'password' => Hash::make('cliente123'),
        ]);
    }
}
