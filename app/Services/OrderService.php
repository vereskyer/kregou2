<?php

// app/Services/OrderService.php

// app/Services/OrderService.php

namespace App\Services;

use App\Models\Order;
use App\Models\User;

class OrderService
{
    public function generateOrderNumber(User $user)
    {
        $lastOrder = Order::where('user_id', $user->id)->latest()->first();
        $lastOrderNumber = $lastOrder ? $lastOrder->order_number : null;
        
        // 使用用户名的前3个字符（如果用户名少于3个字符，则使用全部）
        $userPrefix = strtoupper(substr($user->name, 0, 3));
        
        if ($lastOrderNumber) {
            $orderNumberParts = explode('-', $lastOrderNumber);
            $numberPart = intval($orderNumberParts[1]);
        } else {
            $numberPart = 0;
        }
        
        $newNumberPart = str_pad($numberPart + 1, 6, '0', STR_PAD_LEFT);
        
        return $userPrefix . '-' . $newNumberPart;
    }
}

