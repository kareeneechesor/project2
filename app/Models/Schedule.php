<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Define any necessary properties or methods here
    protected $fillable = ['employee_id', 'schedule_date', 'start_time', 'end_time', 'status'];

    // Define the relationship back to the Employee model
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
