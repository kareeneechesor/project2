<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'booking_date',
        'booking_time',
        'service',
        'price',
        'times_used',
        'visit_count',
    ];
}
