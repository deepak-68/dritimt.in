<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentrequest extends Model
{
    use HasFactory;
     protected $table = 'student_requests';
     protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'course',
        'type',
    ];
}
