<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanHistory extends Model
{
    use HasFactory;
    protected $table = 'loan_history';
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
