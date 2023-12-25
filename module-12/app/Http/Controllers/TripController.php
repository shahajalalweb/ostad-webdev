<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip; // Assuming Trip model exists

class TripController extends Controller
{
    public function index()
    {
        // Logic to fetch and display available trips
        $trips = Trip::all(); // Example: Fetch trips from the database
        return view('trips.index', compact('trips')); // Example: Return view with trips data
    }

    public function create()
    {
        // Render a form to create a new trip
        return view('trips.create'); // Example: Return the trip creation form view
    }

    public function store(Request $request)
    {
        // Validate input data for creating a new trip
        $validatedData = $request->validate([
            'departure' => 'required',
            'destination' => 'required',
            // Add other necessary validation rules
        ]);

        // Store the newly created trip details into the database
        Trip::create($validatedData); // Example: Create a new trip record

        return redirect('/trips')->with('success', 'Trip created successfully!'); // Redirect with success message
    }
}
