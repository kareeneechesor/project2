<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('promotions.index', compact('promotions'));
    }
    public function showPromotions()
    {
        $promotions = Promotion::all();
        return view('promotions.show', compact('promotions'));
    }
    
    

  

    public function create()
    {
        return view('promotions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'details' => 'required|string',
            'status' => 'required|string',  // Validate the status field
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('promotions', 'public') : null;

        Promotion::create([
            'name' => $request->name,
            'image' => $imagePath,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'details' => $request->details,
            'status' => $request->status,
        ]);

        return redirect()->route('promotions.index');
    }

    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'details' => 'required|string',
            'status' => 'required|string',  // Validate the status field
        ]);

        if ($request->hasFile('image')) {
            if ($promotion->image) {
                Storage::disk('public')->delete($promotion->image);
            }
            $promotion->image = $request->file('image')->store('promotions', 'public');
        }

        $promotion->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'details' => $request->details,
            'status' => $request->status,
        ]);

        return redirect()->route('promotions.index');
    }

    public function destroy(Promotion $promotion)
    {
        if ($promotion->image) {
            Storage::disk('public')->delete($promotion->image);
        }
        $promotion->delete();

        return redirect()->route('promotions.index');
    }
}
