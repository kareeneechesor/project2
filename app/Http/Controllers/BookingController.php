<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    // Show the form for creating a new booking
    public function create(Request $request)
    {
        $unavailableTimes = [];
        $date = $request->input('date');

        if ($date) {
            $unavailableTimes = Booking::where('booking_date', $date)
                ->pluck('booking_time')
                ->toArray();
        }

        return view('bookings.create', compact('unavailableTimes'));
    }
    public function history(Request $request)
    {
        // Assuming you want to fetch bookings for the logged-in user
        $bookings = Booking::where('user_id', auth()->id())->get(); // Fetch the booking history for the logged-in user
        return view('bookings.history', compact('bookings')); // Pass the bookings to the view
    }


    // Store a newly created booking in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'booking_date' => 'required|date',
            'booking_time' => 'required|string',
            'service' => 'required|string|max:255',
            'price' => 'required|numeric',
            'employee' => 'required|string|max:255',
            'details' => 'nullable|string',
            'status' => 'required|string|in:pending,confirmed,canceled',
        ]);
    
        Booking::create($validatedData);
    
        // Redirect back with a success message in Thai
        return redirect()->back()->with('success', 'การจองได้ถูกสร้างเรียบร้อยแล้ว.'); // Updated message in Thai
    }
    

    // Fetch and display confirmed bookings with pagination
public function confirmedBookings()
{
    // Paginate confirmed bookings from the database (adjust the number as needed)
    $confirmedBookings = Booking::where('status', 'confirmed')->paginate(10); // Adjust the number for how many entries you want per page

    // Return the view with confirmed bookings
    return view('confirmed_bookings', compact('confirmedBookings'));
}

public function canceledBookings(Request $request)
{
    // Fetch canceled bookings from the database
    $canceledBookings = Booking::where('status', 'canceled')->get();

    return view('bookings.canceled', compact('canceledBookings'));
}


    // Display all bookings
    public function index()
{
    $bookings = Booking::all(); // Fetch all bookings from the database
    return view('bookings.index', compact('bookings')); // Send data to the view
}

    // Show the form for editing a specific booking
    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    // Update a specific booking
    public function update(Request $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'booking_date' => 'required|date',
            'booking_time' => 'required|string',
            'service' => 'required|string|max:255',
            'price' => 'required|numeric',
            'employee' => 'required|string|max:255',
            'details' => 'nullable|string',
            'status' => 'required|in:pending,confirmed,canceled',
        ]);

        $booking->update($validatedData);

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    // Remove a specific booking from the database
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'ลบการจองเรียบร้อยแล้ว.'); // Updated message in Thai
    }


    // Update the status of a specific booking
    public function updateStatus(Request $request)
{
    $validatedData = $request->validate([
        'booking_id' => 'required|exists:bookings,id',
        'status' => 'required|in:pending,confirmed,canceled',
    ]);

    $booking = Booking::find($validatedData['booking_id']);
    $booking->status = $validatedData['status'];
    $booking->save();

    // Redirect to confirmed bookings page after updating the status
    return redirect()->route('bookings.confirmed')->with('success', 'สถานะการจองถูกปรับปรุงเรียบร้อยแล้ว.'); // Updated message in Thai
}

    
}
