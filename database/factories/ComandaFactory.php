<?php

namespace Database\Factories;

use App\Models\Mesa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comanda>
 */
class ComandaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mesa_id' => Mesa::factory(),
            'producto' => $this->faker->randomElement(['Coca-Cola', 'Pepsi', 'Fanta Naranja', 'Sprite']),
            'cantidad' => $this->faker->numberBetween(1, 10),
            'descripcion' => $this->faker->text(),
        ];
    }
}
