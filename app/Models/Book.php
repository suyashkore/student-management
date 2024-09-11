<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Specify which attributes can be mass assigned.
    protected $fillable = [
        'title',
        'author',
        'description',
        'published_date',
    ];

    // Specify that 'published_date' is a date field
    protected $dates = ['published_date'];
}
