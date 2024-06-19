<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bandsale extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'url', 'description', 'admin_url'];
}
