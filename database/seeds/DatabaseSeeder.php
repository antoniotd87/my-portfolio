<?php

use App\Models\Category;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Antonio',
                'email' => 'antoniotd87@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'fn43iufnin',
            ]
        );
        Category::create([
            'name' => 'Trabajo',
            'descripcion' => 'Apps realizadas en alguna empresa',
            'slug' => 'trabajo',
        ]);
        Category::create([
            'name' => 'Personales',
            'descripcion' => 'Apps Realizadas por iniciativa propia',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Cursos',
            'descripcion' => 'Apps realizadas en algun curso',
            'slug' => 'curso',
        ]);
    }
}
