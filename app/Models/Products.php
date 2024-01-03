<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['label', 'description', 'image', 'price', 'quantity', 'is_active'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
