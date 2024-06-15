<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gooditem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'content', 'url', 'buy_url', 'detail_description'];
}
