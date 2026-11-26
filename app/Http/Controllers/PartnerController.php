<?php

namespace App\Http\Controllers;

use App\Models\PartnerRequest; // Import the PartnerRequest model
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    // This function stores a new partner request (when someone submits the partner form)
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',               // Partner full name is required
            'email' => 'required|email',        // Partner email is required and must be valid
            'phone' => 'required',              // Phone number is required
            'company_name' => 'required',       // Company name is required
            'location' => 'required',           // Company location is required
        ]);

        // Create a new partner request record in the database
        PartnerRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            'location' => $request->location,
        ]);

        // Redirect back to the same page with a success message
        return back()->with('success', 'Sent successfully');
    }

    // This function retrieves all partner requests to display them
    public function index()
    {
        // Get all partner requests, newest first
        $partners = PartnerRequest::latest()->get();

        // Return the 'partners' view and send the data
        return view('partners', compact('partners'));
    }
}