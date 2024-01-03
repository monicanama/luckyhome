<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOrderPurchase extends Model
{
    use HasFactory;
    protected $table = 'order_purchases'; 

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'totalcost',
        'status',
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
