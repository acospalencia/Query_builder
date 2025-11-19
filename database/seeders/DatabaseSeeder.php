<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $users = [
        ['nombre' => 'Roberto López',  'correo' => 'roberto@example.com',  'telefono' => '7012-4589'],
        ['nombre' => 'Ricardo Pérez',  'correo' => 'ricardo@example.com',  'telefono' => '7891-2255'],
        ['nombre' => 'Rosa Martínez',  'correo' => 'rosa@example.com',     'telefono' => '7458-9988'],
        ['nombre' => 'Raúl Sánchez',   'correo' => 'raul@example.com',     'telefono' => '7033-1144'],
        ['nombre' => 'Rodrigo Díaz',   'correo' => 'rodrigo@example.com',  'telefono' => '7211-5622'],
        ['nombre' => 'María Torres',   'correo' => 'maria@example.com',    'telefono' => '7844-3366'],
        ['nombre' => 'Carlos Gómez',   'correo' => 'carlos@example.com',   'telefono' => '7999-4422'],
        ['nombre' => 'Ximena Rivas',   'correo' => 'ximena@example.com',   'telefono' => '7615-8833'],
    ];

    DB::table('usuarios')->insert($users);

    // Insertar pedidos
    $orders = [
        // Usuario 1 - Roberto
        ['usuario_id' => 1, 'producto' => 'Monitor 24"',    'cantidad' => 1, 'total' => 180],
        ['usuario_id' => 1, 'producto' => 'Teclado',        'cantidad' => 1, 'total' => 25],

        // Usuario 2 - Ricardo
        ['usuario_id' => 2, 'producto' => 'Laptop',         'cantidad' => 1, 'total' => 750],

        // Usuario 3 - Rosa
        ['usuario_id' => 3, 'producto' => 'Memoria USB 64GB','cantidad' => 2, 'total' => 40],
        ['usuario_id' => 3, 'producto' => 'Mouse',          'cantidad' => 1, 'total' => 15],

        // Usuario 4 - Raúl
        ['usuario_id' => 4, 'producto' => 'Audífonos',      'cantidad' => 1, 'total' => 60],

        // Usuario 5 - Rodrigo
        ['usuario_id' => 5, 'producto' => 'Silla Gamer',    'cantidad' => 1, 'total' => 220],
        ['usuario_id' => 5, 'producto' => 'Alfombrilla',    'cantidad' => 1, 'total' => 10],

        // Usuario 6 - María
        ['usuario_id' => 6, 'producto' => 'Webcam HD',      'cantidad' => 1, 'total' => 55],

        // Usuario 7 - Carlos
        ['usuario_id' => 7, 'producto' => 'Parlantes',      'cantidad' => 1, 'total' => 80],
        ['usuario_id' => 7, 'producto' => 'Teclado Mecánico','cantidad' => 1, 'total' => 95],

        // Usuario 8 - Ximena
        ['usuario_id' => 8, 'producto' => 'Smartwatch',     'cantidad' => 1, 'total' => 130],
    ];

    DB::table('pedidos')->insert($orders);
    }
}
