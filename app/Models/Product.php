<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'name', 'korean_name', 'category_id',  'description', 'wholesale_price',
        'supply_price', 'quantity', 'active', 'url', 'admin_url'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
