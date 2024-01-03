<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id', 'product_id', 'quantity', 'total', 'address', 'contact_number'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderPurchase()
{
    return $this->hasOne(OrderPurchase::class);
}
}
