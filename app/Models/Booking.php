<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'booking_date',
        'booking_time',
        'service',
        'price',
        'employee',
        'details',
        'status',
        'user_id', // Make sure to add this
    ];
}
