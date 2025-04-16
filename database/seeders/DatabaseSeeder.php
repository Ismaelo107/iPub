<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Mesa::factory(5)->create();
        Comanda::factory(10)->create();

        // Insertar categorías si no existen
        Categoria::insert([
            ['categoria' => 'Cervezas', 'created_at' => now(), 'updated_at' => now()],
            ['categoria' => 'Vinos', 'created_at' => now(), 'updated_at' => now()],
            ['categoria' => 'Refrescos', 'created_at' => now(), 'updated_at' => now()],
        ]);

//        // Verificar si hay categorías antes de crear productos
//        if (Categoria::count() > 0) {
//            Categoria::all()->each(function ($categoria) {
//                Producto::factory()->count(5)->create([
//                    'categoria_id' => $categoria->id,
//                ]);
//            });
//        } else {
//            $this->command->warn(' No hay categorías en la base de datos. No se crearán productos.');
//        }

        // Asignar productos a sus respectivas categorías
        $categoriaRefresco = Categoria::where('categoria', 'Refrescos')->first();
        $categoriaVino = Categoria::where('categoria', 'Vinos')->first();
        $categoriaCerveza = Categoria::where('categoria', 'Cervezas')->first();

        if ($categoriaRefresco) {
            Producto::factory()->refresco()->count(5)->create(['categoria_id' => $categoriaRefresco->id]);
        }

        if ($categoriaVino) {
            Producto::factory()->vino()->count(5)->create(['categoria_id' => $categoriaVino->id]);
        }

        if ($categoriaCerveza) {
            Producto::factory()->cerveza()->count(8)->create(['categoria_id' => $categoriaCerveza->id]);
        }
    }
}
