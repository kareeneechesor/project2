<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    // แสดงรายการเวลา
    public function index()
{
    $times = Time::all(); // ดึงข้อมูลเวลาทั้งหมดจากฐานข้อมูล
    return view('times.index', compact('times')); // ส่งข้อมูลไปยัง view
}


    // แสดงฟอร์มสร้างเวลาใหม่
    public function create()
    {
        return view('times.create'); // แสดงฟอร์มสำหรับการสร้างเวลาใหม่
    }

    // จัดเก็บเวลาใหม่ในฐานข้อมูล
    public function store(Request $request)
    {
        $validated = $request->validate([
            'time' => 'required|date_format:H:i', // ตรวจสอบรูปแบบเวลา (HH:MM)
            'status' => 'required|string', // ตรวจสอบสถานะที่ส่งเข้ามา
        ]);

        Time::create($validated); // สร้างเรคคอร์ดใหม่ในฐานข้อมูล

        return redirect()->route('times.index')->with('success', 'เวลาถูกสร้างเรียบร้อยแล้ว'); // ส่งกลับไปยังหน้า index พร้อมข้อความสำเร็จ
    }

    // แสดงฟอร์มแก้ไขเวลา
    public function edit(Time $time)
    {
        return view('times.edit', compact('time')); // ส่งข้อมูลเวลาที่ต้องการแก้ไขไปยัง view
    }

    // อัปเดตข้อมูลเวลาที่มีอยู่ในฐานข้อมูล
    public function update(Request $request, Time $time)
    {
        $validatedData = $request->validate([
            'time' => 'required|date_format:H:i', // ตรวจสอบรูปแบบเวลา (HH:MM)
            'status' => 'required|in:available,unavailable', // ตรวจสอบสถานะที่ต้องการ
        ]);
    
        $time->update($validatedData); // อัปเดตเรคคอร์ดในฐานข้อมูล
    
        return redirect()->route('times.index')->with('success', 'เวลาได้รับการอัปเดตเรียบร้อยแล้ว.'); // ส่งกลับไปยังหน้า index พร้อมข้อความสำเร็จ
    }

    // ลบเวลา
    public function destroy(Time $time)
    {
        $time->delete(); // ลบเรคคอร์ดเวลาออกจากฐานข้อมูล
        return redirect()->route('times.index')->with('success', 'เวลาถูกลบเรียบร้อยแล้ว'); // ส่งกลับไปยังหน้า index พร้อมข้อความสำเร็จ
    }
}
