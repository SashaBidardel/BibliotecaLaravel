<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Libro de Prueba 1',
            'author' => 'Autor de Prueba 1',
            'genre' => 'Género de Prueba 1',
            'publication_year' => 2022,
        ]);

        Book::factory(20)->create(); // Crea 20 libros de prueba utilizando Factory
    }
}
