<?php

namespace App\Http\Controllers;

use App\Models\EmployeeSchedule;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeScheduleController extends Controller
{
    // Display all employee schedules
    public function index()
    {
        // Retrieve schedules with associated employee data
        $schedules = EmployeeSchedule::with('employee')->get();
        return view('schedules.index', compact('schedules'));
    }

    // Show the form for creating a new schedule
    public function create()
    {
        // Retrieve all employees to populate the dropdown
        $employees = Employee::all();
        return view('schedules.create', compact('employees'));
    }

    // Store a newly created schedule in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'schedule_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'status' => 'required|string|in:active,inactive',
        ]);

        // Create a new schedule
        EmployeeSchedule::create($validated);

        // Redirect back to index with success message
        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully.');
    }

    // Show the form for editing a specific schedule
    public function edit(EmployeeSchedule $schedule)
    {
        // Retrieve all employees to populate the dropdown
        $employees = Employee::all();
        return view('schedules.edit', compact('schedule', 'employees'));
    }

    // Update a specific schedule in the database
    public function update(Request $request, EmployeeSchedule $schedule)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'schedule_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'status' => 'required|string|in:active,inactive',
        ]);

        // Update the schedule
        $schedule->update($validated);

        // Redirect back to index with success message
        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully.');
    }

    // Remove a specific schedule from the database
    public function destroy(EmployeeSchedule $schedule)
    {
        // Delete the schedule
        $schedule->delete();
        
        // Redirect back to index with success message
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully.');
    }
}
