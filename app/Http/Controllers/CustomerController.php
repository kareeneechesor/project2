<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Display a listing of customers
    public function index()
    {
        $customers = Customer::all(); // Fetch all customers
        return view('customers.index', compact('customers')); // Pass customers to the view
    }

    // Show the form for creating a new customer
    public function create()
    {
        return view('customers.create'); // Return the create customer view
    }

    // Store a newly created customer in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'gender' => 'required|string|max:10',
        ]);

        Customer::create($validatedData); // Create new customer record

        // Redirect back with a success message in Thai
        return redirect()->route('customers.index')->with('success', 'เพิ่มข้อมูลลูกค้าเรียบร้อยแล้ว');
    }

    // Display the specified customer
    public function show($id)
    {
        $customer = Customer::findOrFail($id); // Fetch the customer
        return view('customers.show', compact('customer')); // Return the show view
    }

    // Show the form for editing the specified customer
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer')); // Return the edit view
    }

    // Update the specified customer in the database
    public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
        ]);

        $customer->update($validatedData); // Update customer record

        // Redirect back with a success message
        return redirect()->route('customers.index')->with('success', 'ข้อมูลลูกค้าอัปเดตสำเร็จ');
    }

    // Remove the specified customer from the database
    public function destroy(Customer $customer)
    {
        $customer->delete(); // Delete customer record
        return redirect()->route('customers.index')->with('success', 'ข้อมูลลูกค้าถูกลบเรียบร้อย');
    }
}
