<?php

namespace Database\Factories;

use App\Models\Comanda;
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
            'comanda_id' => Comanda::factory(),
            'nombre' => $this->faker->randomElement(['Coca-Cola', 'Pepsi', 'Fanta Naranja', 'Sprite']),
            'precio_venta' => $this->faker->randomFloat(2, 10, 100),
            'precio_compra' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
