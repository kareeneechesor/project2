<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'schedule_date',
        'start_time',
        'end_time',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class); // Assuming you have an Employee model
    }
}
