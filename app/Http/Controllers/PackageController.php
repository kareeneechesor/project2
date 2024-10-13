<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // Display a listing of the packages
    public function index()
    {
        // โหลดข้อมูลแพคเกจทั้งหมด
        $packages = Package::all();
        return view('packages.index', compact('packages')); // เปลี่ยนเป็น view ที่คุณต้องการ
    }


    // Retrieve packages and show them (could be redundant with index)
    public function showPackages()
    {
        // Retrieve all packages from the database
        $packages = Package::all(); // You can use ->paginate(10) for pagination if needed

        // Pass the packages to the view
        return view('packages.index', compact('packages')); // Adjust the view path as necessary
    }

    // Show the form for creating a new package
    public function create()
    {
        return view('packages.create'); // Return the create view
    }

    // Store a newly created package in storage
    public function store(Request $request)
    {
        // Validate incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'price' => 'required|numeric',
            'usage_count' => 'required|integer',
            'status' => 'required|in:available,unavailable'
        ]);

        // Store image if uploaded
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('packages', 'public');
        }

        Package::create($data); // Create a new package
        return redirect()->route('packages.index')->with('success', 'Package created successfully'); // Redirect with success message
    }

    // Show the form for editing the specified package
    public function edit($id)
    {
        $package = Package::findOrFail($id); // Find package by ID or fail
        return view('packages.edit', compact('package')); // Pass the package to the edit view
    }

    // Update the specified package in storage
    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id); // Find package by ID or fail

        // Validate incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'price' => 'required|numeric',
            'usage_count' => 'required|integer',
            'status' => 'required|in:available,unavailable'
        ]);

        // Store image if uploaded
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('packages', 'public');
        }

        $package->update($data); // Update the package
        return redirect()->route('packages.index')->with('success', 'Package updated successfully'); // Redirect with success message
    }

    // Remove the specified package from storage
    public function destroy($id)
    {
        $package = Package::findOrFail($id); // Find package by ID or fail
        $package->delete(); // Delete the package
        return redirect()->route('packages.index')->with('success', 'Package deleted successfully'); // Redirect with success message
    }
}
