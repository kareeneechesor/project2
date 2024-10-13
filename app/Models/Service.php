<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // ระบุชื่อของตารางในฐานข้อมูล (ไม่จำเป็นต้องระบุหากใช้ชื่อพหูพจน์ของโมเดลโดยตรง)
    protected $table = 'services';

    // ระบุฟิลด์ที่สามารถกรอกข้อมูลได้ (fillable)
    protected $fillable = [
        'name',
        'details',
        'image',
        'price',
        'duration',
    ];
}
