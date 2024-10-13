<?php

namespace App\Http\Controllers;

use App\Models\Employee; // Import Employee Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    // Display all employees
    public function index()
    {
        // Fetch all employees from the database
        $employees = Employee::all();
        
        // Pass data to the Blade template
        return view('employees.index', compact('employees'));
    }
    public function showEmployees() {
    // Fetch all employees from the database
    $employees = Employee::all();

    // Pass the employee data to the view
    return view('welcome', compact('employees'));
}


    // Display form for creating a new employee
    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
{
    // Validate the incoming request data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:employees,email',
        'position' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Handle the image upload
    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('employees', 'public');
    }

    // Create a new employee record in the database
    Employee::create($validated);

    // Redirect to the employees index page with a success message
    return redirect()->route('employees.index')->with('success', 'พนักงานถูกสร้างเรียบร้อยแล้ว');
}


    // Display form for editing an existing employee
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Update an existing employee's information
    public function update(Request $request, Employee $employee)
    {
        // Validate input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'position' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($employee->image) {
                Storage::delete('public/' . $employee->image);
            }
            // Store the new image
            $validated['image'] = $request->file('image')->store('employees', 'public');
        }

        // Update the employee's information
        $employee->update($validated);

        // Redirect back with a success message
        return redirect()->route('employees.index')->with('success', 'ข้อมูลพนักงานถูกอัพเดทเรียบร้อยแล้ว');
    }

    // Delete an employee from the database
    public function destroy(Employee $employee)
    {
        // Delete the image from storage if exists
        if ($employee->image) {
            Storage::delete('public/' . $employee->image);
        }

        // Delete the employee record from the database
        $employee->delete();

        // Redirect back with a success message
        return redirect()->route('employees.index')->with('success', 'พนักงานถูกลบเรียบร้อยแล้ว');
    }
}
