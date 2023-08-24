<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Usuario de Prueba',
            'email' => 'usuario@example.com',
            'password' => Hash::make('contraseña'),
        ]);

        User::factory(10)->create(); // Crea 10 usuarios de prueba utilizando Factory
    }
}
