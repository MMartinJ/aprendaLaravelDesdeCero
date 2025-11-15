<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Marina',
            'email' => 'marina@mail.com',
            'password' => bcrypt('Pa$$w0rd')
        ]);

        User::factory(9)->create();
    }
}
