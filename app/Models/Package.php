<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    // กำหนดให้ model สามารถจัดการกับฟิลด์เหล่านี้
    protected $fillable = [
        'name',
        'description',
        'price',
        'usage_count',
        'image',
        'status',
    ];
}
