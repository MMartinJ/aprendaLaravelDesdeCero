<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(), //crea una oración
            'descripcion' => $this->faker->paragraph(), //crea un parrafo
            'categoria' => $this->faker->randomElement([
                'Desarrollo Web',
                'Diseño Web'
            ])
        ];
    }
}
