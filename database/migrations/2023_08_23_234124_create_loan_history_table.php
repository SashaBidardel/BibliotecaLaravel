<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('loan_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            $table->timestamp('loan_date');
            $table->timestamp('return_date')->nullable();
            $table->string('loan_status');
            $table->timestamps();
             // Claves foráneas
             $table->foreign('user_id')->references('id')->on('users');
             $table->foreign('book_id')->references('id')->on('books');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_history');
    }
};

