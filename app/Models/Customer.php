<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Specify the fillable attributes
    protected $fillable = [
        'name',
        'phone',
        'email',
        'gender', // Add other attributes as needed
        // Add any additional attributes you want to allow mass assignment for
    ];
}
