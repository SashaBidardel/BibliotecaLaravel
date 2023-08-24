<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'genre',
        'publication_year',
        'availability_status',
    ];
    public function loanHistory()
    {
        return $this->hasMany(LoanHistory::class);
    }

}
