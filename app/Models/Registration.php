<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
     protected $table = 'registrations';
     protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'gender',
        'dob',
        'phone',
        'email',
        'category',
        'hostel',
        'bus_facility',
        'last_exam_passes',
        'course',
        'rank',
        'address',
    ];
}
