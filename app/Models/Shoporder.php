<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shoporder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'store_name',
        'building',
        'floor',
        'position',
        'phone',
        'description',
        'status',
        'admin_note',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
