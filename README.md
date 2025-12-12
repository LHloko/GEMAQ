# SITE GEMAQ 

E-commerce para uma loja de irrigação de serviços de poços e itens agrarios

## Tecnologias
- PHP 8.4
- Laravel 12
- MySQL 8
- Node.js 20 / npm
- Vite + Tailwind

## Como rodar (desenvolvimento)
1. `composer install`
2. `npm install`
3. `cp .env.example .env` e ajustar variáveis
4. `php artisan key:generate`
5. configurar DB e `php artisan migrate --seed`
6. `npm run dev` e `php artisan serve`

