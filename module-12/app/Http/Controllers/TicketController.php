<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket; // Import the Ticket model
use App\Models\User;   // Import the User model
use App\Models\Trip;   // Import the Trip model

class TicketController extends Controller
{
    public function index()
    {
        // Logic to fetch and display available trips
        $trips = Trip::all(); // Fetch trips from the database using the Trip model
        return view('tickets.index', compact('trips')); // Return view with trips data
    }

    public function purchase(Request $request)
    {
        // Logic to handle ticket purchasing
        // Example: Check seat availability, reserve seat, and store ticket details
        // $request->validate(...); // Example: Validate user input

        // Example: Create a new ticket and save it to the database
        $ticket = Ticket::create([
            'user_id' => auth()->user()->id, // Example: Get the current authenticated user's ID
            'trip_id' => $request->input('trip_id'), // Example: Get the selected trip ID from the request
            // Other ticket details from the request
        ]);

        // Example: Return success message or redirect to confirmation page
        return redirect()->route('tickets.show', $ticket)->with('success', 'Ticket purchased successfully!');
    }

    public function show(User $user)
    {
        // Logic to display user's booked tickets or reservation details
        $userTickets = $user->tickets()->with('trip')->get(); // Example: Get user's tickets with associated trip details
        return view('tickets.show', compact('userTickets')); // Return view with user's tickets data
    }

    public function cancelTicket(Ticket $ticket)
    {
        // Logic to cancel a booked ticket
        // Example: Free up the seat and remove ticket details from the database
        $ticket->delete(); // Example: Delete the ticket

        // Example: Return success message or redirect to user's ticket page
        return redirect()->route('tickets.show', auth()->user())->with('success', 'Ticket canceled successfully!');
    }
}
