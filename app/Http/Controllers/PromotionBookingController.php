<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromotionBooking;

class PromotionBookingController extends Controller
{
    // ฟังก์ชันสำหรับแสดงรายการการจองทั้งหมด
    public function index()
    {
        $bookings = PromotionBooking::all();
        return view('promotion_bookings.index', compact('bookings'));
    }

    // ฟังก์ชันสำหรับแสดงฟอร์มการสร้างการจองใหม่
    public function create()
    {
        return view('create_promotion_booking');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'booking_date' => 'required|date',
            'booking_time' => 'required|string|max:5',
            'details' => 'nullable|string',
            'service' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);
    
        // Create a new booking
        PromotionBooking::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'booking_date' => $request->booking_date, // Ensure this field matches your database
            'booking_time' => $request->booking_time, // Ensure this field matches your database
            'details' => $request->details,
            'service' => $request->service,
            'price' => $request->price,
        ]);
    
        // Redirect to the bookings index page with a success message
        return redirect()->route('promotion_bookings.index')->with('success', 'Booking created successfully.');
    }
    
    // ฟังก์ชันสำหรับแสดงฟอร์มแก้ไขข้อมูลการจอง
    public function edit($id)
    {
        $booking = PromotionBooking::findOrFail($id);
        return view('edit_promotion_booking', compact('booking'));
    }

    // ฟังก์ชันสำหรับอัปเดตข้อมูลการจอง
    public function update(Request $request, $id)
    {
        // Validate ข้อมูลที่รับเข้ามาจากฟอร์ม
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'booking_date' => 'required|date',
            'booking_time' => 'required|string',
            'details' => 'nullable|string'
        ]);

        // อัปเดตข้อมูลการจอง
        $booking = PromotionBooking::findOrFail($id);
        $booking->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'date' => $request->booking_date, // Use the correct field name
            'time' => $request->booking_time, // Use the correct field name
            'details' => $request->details,
            'service' => $request->service, // Save service name if needed
            'price' => $request->price, // Save price if needed
        ]);

        // Redirect ไปยังหน้ารายการการจองหลังจากอัปเดตข้อมูล
        return redirect()->route('promotion_bookings.index')->with('success', 'Promotion booking updated successfully');
    }

    // ฟังก์ชันสำหรับลบข้อมูลการจอง
    public function destroy($id)
    {
        $booking = PromotionBooking::findOrFail($id);
        $booking->delete();
        return redirect()->route('promotion_bookings.index')->with('success', 'Booking deleted successfully');
    }
}
