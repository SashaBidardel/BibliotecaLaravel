<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\LoanHistory;


class LoanHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanHistory::create([
            'user_id' => 1, // ID del usuario de prueba
            'book_id' => 1, // ID del libro de prueba
            'loan_date' => Carbon::now(),
            'loan_status' => 'Prestado',
        ]);

        LoanHistory::factory(30)->create(); // Crea 30 registros de historial de préstamos utilizando Factory
    }
}

