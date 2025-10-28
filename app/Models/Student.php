<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentNumber',
        'lname',
        'fname',
        'mi',
        'email',
        'contactNumber'
    ];

    /**
     * A student can have many transactions.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
