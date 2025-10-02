<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        $nombre = $this->faker->unique()->sentence();
        return [
            'nombre' => $nombre, //crea una oración
            'slug' => Str::slug($nombre, '-'),
            'descripcion' => $this->faker->paragraph(), //crea un parrafo
            'categoria' => $this->faker->randomElement([
                'Desarrollo Web',
                'Diseño Web'
            ])
        ];
    }
}
