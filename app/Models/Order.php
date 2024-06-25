<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
        'order_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class)->withTrashed();
    }

    public static function generateOrderNumber()
    {
        $latestOrder = static::withTrashed()->latest()->first();
        if ($latestOrder) {
            $orderNumber = 'AAA-' . str_pad($latestOrder->id + 1, 6, "0", STR_PAD_LEFT);
        } else {
            $orderNumber = 'AAA-000001';
        }
        return $orderNumber;
    }

}
