<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;
    public function orders() {
        return $this->hasMany(Order::class);
    }
    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'orders', 'client_id', 'book_id');
    }
}
