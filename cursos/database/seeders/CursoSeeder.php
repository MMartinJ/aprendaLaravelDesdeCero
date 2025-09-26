<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // $curso1 = new Curso();
        // $curso1->nombre = "WordPress";
        // $curso1->descripcion = "el mejor cms";
        // $curso1->categoria = "Desarrollo Web";
        // $curso1->save();

        
        // $curso2 = new Curso();
        // $curso2->nombre = "WordPress plugins";
        // $curso2->descripcion = "el mejor cms";
        // $curso2->categoria = "Desarrollo Web";
        // $curso2->save();

        //create factories
        Curso::factory(50)->create();

    }
}
