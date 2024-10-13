<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function showServices()
    {
        // ดึงข้อมูลทั้งหมดจากตาราง services
        $services = Service::all(); // หรือคุณอาจใช้ ->paginate(10) เพื่อแบ่งหน้า

        // ส่งตัวแปร $services ไปยัง view ที่ต้องการ
        return view('service', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($validated);

        return redirect()->route('services.index')->with('success', 'บริการถูกสร้างเรียบร้อยแล้ว');
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'บริการถูกอัพเดทเรียบร้อยแล้ว');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::delete('public/' . $service->image);
        }
        

        $service->delete();

        return redirect()->route('services.index')->with('success', 'บริการถูกลบเรียบร้อยแล้ว');
    }
}
