<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        Vehicle::create($request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully.');
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'code' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        $vehicle->update($request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}
