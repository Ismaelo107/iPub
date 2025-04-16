<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Comanda;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'comanda_id' => Comanda::factory(),
            'categoria_id' => Categoria::factory(),
            'precio_venta' => $this->faker->randomFloat(2, 10, 100),
            'precio_compra' => $this->faker->randomFloat(2, 10, 100),
        ];
    }

    // Estado para Refrescos
    public function refresco()
    {
        return $this->state(fn(array $attributes) => [
            'nombre' => $this->faker->randomElement(['Coca-Cola', 'Pepsi', 'Fanta Naranja', 'Sprite']),
            'tipo' => 'refresco',
        ]);
    }

    // Estado para Vinos
    public function vino()
    {
        return $this->state(fn(array $attributes) => [
            'nombre' => $this->faker->randomElement(['Vino Tinto', 'Vino Blanco', 'Vino Rosado']),
            'tipo' => 'vino',
        ]);
    }

    // Estado para Cervezas
    public function cerveza()
    {
        return $this->state(fn(array $attributes) => [
            'nombre' => $this->faker->randomElement(['Heineken', 'Corona', 'Budweiser']),
            'tipo' => 'cerveza',
        ]);
    }
}
