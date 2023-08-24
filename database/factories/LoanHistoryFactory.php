<?php

namespace Database\Factories;

use App\Models\LoanHistory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class LoanHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoanHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1, // Cambia esto si es necesario
            'book_id' => 1, // Cambia esto si es necesario
            'loan_date' => Carbon::now(),
            'loan_status' => 'Prestado'
        ];
    }
}

