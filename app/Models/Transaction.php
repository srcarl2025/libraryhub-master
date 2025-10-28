<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'book_id',
        'borrowed_at',
        'returned_at'
    ];

    /**
     * A transaction belongs to a student.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * A transaction belongs to a book.
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
