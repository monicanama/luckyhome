<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPurchase extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function orderPurchased()
    {
        return $this->hasOne(OrderPurchased::class);
    }
}
