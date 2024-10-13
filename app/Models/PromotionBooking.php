<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'booking_date',
        'booking_time',
        'details',
        'service',
        'price',
    ];
}

