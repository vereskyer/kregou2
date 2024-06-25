<?php

// app/Services/OrderService.php

// app/Services/OrderService.php

namespace App\Services;

use App\Models\Order;
use App\Models\User;

class OrderService
{

    // 生成訂單編號
    // public function generateOrderNumber(User $user)
    // {
    //     $userPrefix = strtoupper(substr($user->name, 0, 3));
        
    //     do {
    //         $numberPart = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
    //         $orderNumber = $userPrefix . '-' . $numberPart;
    //     } while (Order::withTrashed()->where('order_number', $orderNumber)->exists());

    //     return $orderNumber;
    // }

    // 生成訂單編號：AAA-隨機數字-遞增數字。

    public function generateOrderNumber(User $user)
    {
        $userPrefix = strtoupper(substr($user->name, 0, 3));
        
        $lastOrder = Order::withTrashed()->where('order_number', 'like', $userPrefix . '-%')->latest('id')->first();
        
        if ($lastOrder) {
            $lastNumberParts = explode('-', $lastOrder->order_number);
            $lastIncrementNumber = intval(end($lastNumberParts));
            $newIncrementNumber = str_pad($lastIncrementNumber + 1, 2, '0', STR_PAD_LEFT);
        } else {
            $newIncrementNumber = '01';
        }
        
        do {
            $randomPart = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
            $orderNumber = $userPrefix . '-' . $randomPart . '-' . $newIncrementNumber;
        } while (Order::withTrashed()->where('order_number', $orderNumber)->exists());

        return $orderNumber;
    }
}

