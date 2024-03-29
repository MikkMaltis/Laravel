<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;
    public  function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class, 'book_authors');
    }
    public function orders(): BelongsToMany 
    {
        return $this->belongsToMany(Order::class, 'book_orders');
    }
}
