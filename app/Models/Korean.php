<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korean extends Model
{
    use HasFactory;

    protected $fillable = ['chinese', 'korean'];
}
