<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Import the Contact model
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display a listing of the contacts
    public function index()
    {
        $contacts = Contact::all(); // Get all contacts
        return view('contact.index', compact('contacts')); // Pass contacts to the view
    }

    // Show the form for creating a new contact
    public function create()
    {
        return view('contact.create'); // Return the create view
    }
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email', // Ensure the email is unique
            'message' => 'required|string',
        ]);
    
        try {
            // Create a new contact entry in the database
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);
    
            // Log success
            \Log::info('Contact created successfully.', ['email' => $request->email]);
        } catch (\Exception $e) {
            // Log error
            \Log::error('Error creating contact: ' . $e->getMessage());
            // Redirect back with error message
            return redirect()->back()->with('error', 'ไม่สามารถบันทึกข้อมูลได้ กรุณาลองอีกครั้ง')->withInput();
        }
    
        // Redirect to the index route with a success message
        return redirect()->route('contact.index')->with('success', 'ข้อมูลการติดต่อถูกบันทึกเรียบร้อยแล้ว!');
    }
    


    // Show the specified contact
    public function show($id)
    {
        $contact = Contact::findOrFail($id); // Find contact by ID
        return view('contact.show', compact('contact')); // Return the view with contact details
    }

    // Show the form for editing the specified contact
    public function edit($id)
    {
        $contact = Contact::findOrFail($id); // Find contact by ID
        return view('contact.edit', compact('contact')); // Return a view for editing the contact
    }

    // Update the specified contact
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:contacts,email,' . $id,
            'message' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id); // Find contact by ID
        $contact->update($request->all()); // Update the contact
        return redirect()->route('contact.index')->with('success', 'ข้อมูลการติดต่อถูกอัปเดตเรียบร้อยแล้ว!'); // Success message in Thai
    }

    // Remove the specified contact
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id); // Find contact by ID
        $contact->delete(); // Delete the contact
        return redirect()->route('contact.index')->with('success', 'ข้อมูลการติดต่อถูกลบเรียบร้อยแล้ว!'); // Success message in Thai
    }
}
