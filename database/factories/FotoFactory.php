<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foto>
 */
class FotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['Municipio Garcia', 'Municipio Diaz'])
        ];
    }
}
