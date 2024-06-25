<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'ordered_at', 
        'arrived_at', 
        'shipped_at', 
        'out_of_stock_at'
    ];

    protected $dates = ['ordered_at', 'arrived_at', 'shipped_at', 'out_of_stock_at'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
