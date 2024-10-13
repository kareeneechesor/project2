<?php

namespace App\Http\Controllers;

use App\Models\PackageBooking;
use Illuminate\Http\Request;

class PackageBookingController extends Controller
{
    public function index()
    {
        $bookings = PackageBooking::all(); // Fetch all package bookings
        return view('package_bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('package_bookings.create'); // View for creating a new booking
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'booking_date' => 'required|date',
            'booking_time' => 'required|date_format:H:i',
            'service' => 'required|string|max:255',
            'price' => 'required|numeric',
            'times_used' => 'required|integer',
            'visit_count' => 'nullable|integer',
        ]);

        // If visit_count is not provided, default to 0
        $validated['visit_count'] = $validated['visit_count'] ?? 0;

        PackageBooking::create($validated);

        return redirect()->route('package-bookings.index')->with('success', 'การจองแพคเกจได้ถูกสร้างเรียบร้อยแล้ว.');
    }

    public function edit(PackageBooking $booking)
    {
        return view('package_bookings.edit', compact('booking')); // This line should work correctly
    }
    
    
    public function update(Request $request, PackageBooking $booking)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'booking_date' => 'required|date',
            'booking_time' => 'required|date_format:H:i',
            'service' => 'required|string|max:255',
            'price' => 'required|numeric',
            'times_used' => 'required|integer',
        ]);

        $booking->update($validated);
        return redirect()->route('package-bookings.index')->with('success', 'การจองแพคเกจได้รับการอัปเดตเรียบร้อยแล้ว.');
    }

    public function destroy(PackageBooking $booking)
    {
        // Check if the booking exists before attempting to delete it
        if ($booking) {
            $booking->delete();
            return redirect()->route('package-bookings.index')->with('success', 'การจองแพคเกจถูกลบเรียบร้อยแล้ว.');
        }

        return redirect()->route('package-bookings.index')->with('error', 'ไม่พบการจองที่ต้องการลบ.');
    }
}
