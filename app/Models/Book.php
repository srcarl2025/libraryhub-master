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
        'isbn',
        'publisher',
        'publication_year'
    ];

    /**
     * A book can have many transactions.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
