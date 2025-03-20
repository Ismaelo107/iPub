<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Producto;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Mesa::factory(5)->create();
        Comanda::factory(10)->create();
        DB::table('categorias')->insertOrIgnore([
            ['categoria' => 'Cervezas', 'created_at' => now(), 'updated_at' => now()],
            ['categoria' => 'Vinos', 'created_at' => now(), 'updated_at' => now()],
            ['categoria' => 'Refrescos', 'created_at' => now(), 'updated_at' => now()],
        ]);


        // Crear productos asociados a categorías
        Categoria::all()->each(function ($categoria) {
            Producto::factory()->count(5)->create([
                'categoria_id' => $categoria->id,
            ]);
        });

    }
}
