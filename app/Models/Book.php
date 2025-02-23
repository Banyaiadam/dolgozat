<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'publication_year', 'available_copies'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_book');
    }
}
