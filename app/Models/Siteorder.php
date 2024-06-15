<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siteorder extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'description', 'url', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
