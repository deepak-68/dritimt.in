<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headersetting extends Model
{
    use HasFactory;
     protected $table = 'header_settings';
     protected $fillable = [
        'phone',
        'news',
    ];
}
