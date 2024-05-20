<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Customer;
use Bavix\Wallet\Interfaces\ProductInterface;

class Store extends Model implements ProductInterface
{
    use HasFactory, HasWallet;

    protected $fillable = ['store_name', 'building_id', 'floor', 'position', 'phone', 'handphone', 'kakao', 'wechat', 'line', 'telegram', 'instagram', 'website', 'ks_story'];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function getAmountProduct(Customer $customer): int|string
    {
        $store = $this;
        return $store->price;
    }

    public function getMetaProduct(): ?array
    {
        return [
            'meta' =>'Purchase of Product #' .  $this->id,
            'description' => 'Purchase of Product #' . $this->name,
        ];
    }
}
