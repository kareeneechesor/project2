<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Promotion extends Model
{
    protected $fillable = [
        'name', 'image', 'start_date', 'end_date', 'details', 'status',
    ];

    public function getStatusAttribute($value)
    {
        // Return the status from the database if it's set
        if (!empty($value)) {
            return $value;
        }

        // Default to calculated status if not explicitly set
        return $this->end_date < Carbon::now() ? 'หมดเขต' : 'ใช้งานได้';
    }
}
